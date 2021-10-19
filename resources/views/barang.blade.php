<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Barang</title>
</head>
<body>
    {{-- // $table->string('nama_barang');
    // $table->string('varian');
    // $table->integer('harga_beli');
    // $table->integer('harga_jual'); --}}

    <center><h1>Data Barang</h1></center>
    @foreach ($barang as $item)
    <b>ID {{$item->id}}</b><br>
    Nama barang : {{$item->nama_barang}}<br>
    Varian : {{$item->varian}}<br>
    Harga beli : {{$item->harga_beli}}<br>
    Harga jual : {{$item->harga_jual}}<br>
    <hr>
    @endforeach
</body>
</html>
