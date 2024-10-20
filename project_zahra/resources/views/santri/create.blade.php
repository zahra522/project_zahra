<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data</title>
</head>
<body>
    <h1>Tambah Dta Santri</h1>

    <form action="{{ url('storesantri') }}" method="POST">
        @csrf
        <div>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama">
        </div>
        <div>
            <label for="tempat_tanggal_lahir">Tempat Tanggal Lahir:</label>
            <input type="text" id="tempat_tanggal_lahir" name="tempat_tanggal_lahir">
        </div>
        <div>
            <label for="alamat">Alamat:</label>
            <input type="text" id="alamat" name="alamat">
        </div>
            <div>
                <label for="nama_ayah">Nama Ayah:</label>
                <input type="text" id="nama_ayah" name="nama_ayah">
            </div>
            <div>
                <label for="nama_ibu">Nama Ibu:</label>
                <input type="text" id="nama_ibu" name="nama_ibu">
            </div>
            <label for="pendidikan">Pendidikan Terakhir:</label>
            <select name="pendidikan" id="pendidikan">
                <option value="-">Pendidikan Terakhir</option>
                @foreach($pendidikan as $row)
                    <option value="{{$row->id}}">{{$row->pendidikan_terakhir}}</option>
                @endforeach
            </select>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
