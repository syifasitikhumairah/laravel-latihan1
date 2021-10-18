<?php

namespace App\Http\Controllers;

// memanggil model hero
use App\Models\Hero;
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
}
