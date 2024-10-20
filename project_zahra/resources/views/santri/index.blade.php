<DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
        <title>Data Pekerja</title>
    </head>
    <body>
        <h1>Data Pekerja</h1>
    
        <a href="{{url('createsantri') }}">Tambah data</a>
    
        <table border="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Tempat Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Pendidikan terakhir</th>
                    <th>Nama Ayah</th>'
                    <th>Nama Ibu</th>
                    <th>Pendidikan Terakhir</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($datasantri as $item)
                <tr class="text-center">
                    <td>{{ $item->nik }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->tempat_tanggal_lahir }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->nama_ayah }}</td>
                    <td>{{ $item->nama_ibu}}</td>
                    <td>{{ @$item->pendidikans->pendidikan_terakhir }}</td>
                  
    
                    <td>
                        <a href="{{ url('showsantri', $item->id) }}"class="btn btn-primary">detail</a> |
                        <a href="{{ url('editsantri', $item->id) }}"class="btn btn-info">Edit</a> |
                        <form action="{{ url('deletesantri', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('POST')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this record?')">Hapus</button>
                        </form>
                        
                            
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
    </html>
    