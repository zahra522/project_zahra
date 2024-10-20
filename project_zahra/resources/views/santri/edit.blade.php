<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buruh</title>
</head>
<body>
    <h1>Edit Data Buruh</h1>

    <form action="{{ url('updatesantri', $santri->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" value="{{ $santri->nama }}">
        </div>
        <div>
            <label for="tempat_tanggal_lahir">Tempat_Tanggal_Lahir:</label>
            <input type="text" id="tempat_tanggal_lahir" name="tempat_tanggal_lahir" value="{{ $santri->tempat_tanggal_lahir }}">
        </div>

        <div>
            <label for="alamat">Alamat:</label>
            <input type="text" id="alamat" name="alamat" value="{{ $santri->alamat }}">
        </div>
        <div>
            <label for="nama_ayah">Nama Ayah:</label>
            <input type="text" id="nama_ayah" name="posisi" value="{{ $santri->nama_ayah }}">
        </div>
        <div>
            <label for="nama_ibu">Nama Ibu:</label>
            <input type="text" id="nama_ibu" name="posisi" value="{{ $santri->nama_ibu }}">
        </div>
        <label for="pendidikan_terakhir">pendidikan Terakhir:</label>
            
        <select name="pendidikan" id="pendidikan">
            <option value="-">Pendidikan Terakhir</option>
            @foreach($wilayah as $row)
                <option value="{{ $row->id }}" {{ $row->id == $findsantri->pendidikan ? 'selected' : '' }}>
                    {{ $row->pendidikan_terakhir }}
                </option>
            @endforeach
        <button type="submit">Update</button>
    </form>
</body>
</html>
