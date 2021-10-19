<?php

namespace App\Http\Controllers;

// memanggil model hero
use App\Models\Hero;
use App\Models\Barang;
use App\Models\Pesanan;
use App\Models\Pembelian;
use App\Models\Pembeli;
use App\Models\Suplier;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function test()
    {
        $result = "<h1>Test Controller</h1>";
        return view('test', compact('result'));
    }

    public function heroes()
    {
        // memanggil semua data yg ada di model 'Hero'
        $hero = Hero::all();
        return view('hero', compact('hero'));
    }

    public function barangs()
    {
        // memanggil semua data yg ada di model 'Barang'
        $barang = Barang::all();
        return view('barang', compact('barang'));
    }

    public function pesanans()
    {
        // memanggil semua data yg ada di model 'Pesanan'
        $pesanan = Pesanan::all();
        return view('pesanan', compact('pesanan'));
    }

    public function pembelians()
    {
        // memanggil semua data yg ada di model 'Pembelian'
        $pembelian = Pembelian::all();
        return view('pembelian', compact('pembelian'));
    }

    public function pembelis()
    {
        // memanggil semua data yg ada di model 'Pembeli'
        $pembeli = Pembeli::all();
        return view('pembeli', compact('pembeli'));
    }

    public function supliers()
    {
        // memanggil semua data yg ada di model 'Suplier'
        $suplier = Suplier::all();
        return view('suplier', compact('suplier'));
    }
}
