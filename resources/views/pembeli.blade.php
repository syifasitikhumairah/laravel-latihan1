<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pembeli</title>
</head>
<body>
    {{-- // $table->string('nama');
        // $table->string('jns_kelamin');
        // $table->string('alamat');
        // $table->integer('kode_pos');
        // $table->string('kota');
        // $table->date('tgl_lahir'); --}}

    <center><h1>Data Pembeli</h1></center>
    @foreach ($pembeli as $item)
    <b>ID {{$item->id}}</b><br>
    Nama : {{$item->nama}}<br>
    Jenis kelamin : {{$item->jns_kelamin}}<br>
    Alamat : {{$item->alamat}}<br>
    Kode pos : {{$item->kode_pos}}<br>
    Kota : {{$item->kota}}<br>
    Tanggal lahir : {{$item->tgl_lahir}}<br>
    <hr>
    @endforeach
</body>
</html>
