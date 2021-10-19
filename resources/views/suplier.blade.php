<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Suplier</title>
</head>
<body>
    {{-- //$table->string('nama_suplier');
        // $table->string('alamat');
        // $table->integer('kode_pos');
        // $table->string('kota'); --}}

    <center><h1>Data Suplier</h1></center>
    @foreach ($suplier as $item)
    <b>ID {{$item->id}}</b><br>
    Nama suplier : {{$item->nama_suplier}}<br>
    Alamat : {{$item->alamat}}<br>
    Kode pos : {{$item->kode_pos}}<br>
    Kota : {{$item->kota}}<br>
    <hr>
    @endforeach
</body>
</html>
