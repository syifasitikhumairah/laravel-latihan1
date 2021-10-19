<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pesanan</title>
</head>
<body>
    {{-- //$table->string('nama_pelanggan');
        // $table->string('nama_barang');
        // $table->integer('qty');
        // $table->date('tgl_pesan'); --}}

    <center><h1>Data Pesanan</h1></center>
    @foreach ($pesanan as $item)
    <b>ID {{$item->id}}</b><br>
    Nama pelanggan : {{$item->nama_pelanggan}}<br>
    Nama barang : {{$item->nama_barang}}<br>
    Qty : {{$item->qty}}<br>
    Tanggal pesan : {{$item->tgl_pesan}}<br>
    <hr>
    @endforeach
</body>
</html>
