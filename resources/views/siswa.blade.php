<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Ini Tabel Siswa</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama Siswa</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Id Mapel</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswa as $i)
            <?php $no = 1; ?>
            <tr>
                <td><?= $no += 1; ?></td>
                <td>{{$i->nis}}</td>
                <td>{{$i->nama_siswa}}</td>
                <td>{{$i->tgl_lahir}}</td>
                <td>{{$i->alamat}}</td>
                <td>{{$i->id_mapel}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>