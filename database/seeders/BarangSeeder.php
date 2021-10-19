<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = [
            // $table->string('nama_barang');
            // $table->string('varian');
            // $table->integer('harga_beli');
            // $table->integer('harga_jual');
            ['nama_barang'=>'Rinso Matic',
            'varian'=>'Detergen',
            'harga_beli'=>'43000',
            'harga_jual'=>'52000'],

            ['nama_barang'=>'Sunlight 755 ml',
            'varian'=>'Sabun cuci piring',
            'harga_beli'=>'13200',
            'harga_jual'=>'14000'],

            ['nama_barang'=>'Sepatu Converse',
            'varian'=>'Sepatu',
            'harga_beli'=>'150000',
            'harga_jual'=>'175000'],

            ['nama_barang'=>'Kerudung Bella Square',
            'varian'=>'Hijab',
            'harga_beli'=>'8000',
            'harga_jual'=>'9900'],

            ['nama_barang'=>'Shampo Pantene',
            'varian'=>'Shampo',
            'harga_beli'=>'32000',
            'harga_jual'=>'35000'],
        ];
        DB::table('barangs')->insert($post);
    }
}
