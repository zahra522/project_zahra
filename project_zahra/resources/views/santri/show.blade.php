<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>show santri</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <h2>Show santri</h2>
        <table class="form-control">
            <tr>
                <td>Nama:</td>
                <td>{{$findsantri->nama}}</td>
            </tr>
            <tr>
                <td>Tempat Tanggal Lahir:</td>
                <td>{{$findsantri->tempat_tanggal_lahir}}</td>
            </tr>
            <tr>
                <td>alamat :</td>
                <td>{{$findsantri->alamat}}</td>
                
            </tr>
        </tr>
            <tr>
                <td>Nama Ayah :</td>
                <td>{{$findsantri->nama_ayah}}</td>
                
            </tr>
            <tr>
                <td>Nama Ibu :</td>
                <td>{{$findsantri->nama_ibu}}</td>
            </tr>
            <tr>
                <td>pendidikan Terakhir :</td>
                <td>{{@$findsantri->pendidikans->pendidikan_terakhir}}</td>
                
            </tr>   
                
            
        </table>
    </body>
</html>