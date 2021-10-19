<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pembelian</title>
</head>
<body>
    {{-- $table->string('nama_barang');
            $table->string('nama_suplier');
            $table->integer('qty');
            $table->date('tgl'); --}}

    <center><h1>Data Pembelian</h1></center>
    @foreach ($pembelian as $item)
    <b>ID {{$item->id}}</b><br>
    Nama barang : {{$item->nama_barang}}<br>
    Nama suplier : {{$item->nama_suplier}}<br>
    Qty : {{$item->qty}}<br>
    Tanggal : {{$item->tgl}}<br>
    <hr>
    @endforeach
</body>
</html>
