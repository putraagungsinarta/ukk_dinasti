<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3><center>Laporan Data Buku</center></h3>
    <table border="1" cellspacing="0" cellpading="5">
    <tr>
        <td>#</td>
        <td>Judul</td>
        <td>Penulis</td>
        <td>Penerbit</td>
        <td>TahunTerbit</td>
    </tr>
    @foreach ($buku as $b)
        <tr>
            <td>{{$b->id}}</td>
            <td>{{$b->judul}}</td>
            <td>{{$b->penulis}}</td>
            <td>{{$b->penerbit}}</td>
            <td>{{$b->tahunterbit}}</td>
        </tr>
    @endforeach
</table>
</body>
</html>