<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dosen</title>
</head>
<body>
    <center><h1>Data Dosen</h1></center>
    @foreach ($query as $item)
    NIPD : {{$item->nipd}}<br>
    Nama : {{$item->nama}}<br>
    Alamat : {{$item->alamat}}<br>
    <hr>
    @endforeach
</body>
</html>
