<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mahasiswa</title>
</head>
<body>
    <center><h1>Data Mahasiswa</h1></center>
    @foreach ($query as $item)
    <b>id {{$item->id}}</b><br>
    NIM : {{$item->nim}}<br>
    Nama : {{$item->nama}}<br>
    Jurusan : {{$item->jurusan}}<br>
    Wali : {{$item->wali}}<br>
    <hr>
    @endforeach
</body>
</html>
