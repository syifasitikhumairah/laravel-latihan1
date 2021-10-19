<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PembelianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$table->string('nama_barang');
        // $table->string('nama_suplier');
        // $table->integer('qty');
        // $table->date('tgl');
        $post = [
            ['nama_barang'=>'Rinso Matic',
            'nama_suplier'=>'Desi',
            'qty'=>'2',
            'tgl'=>'2021-10-13'],

            ['nama_barang'=>'Sunlight 755 ml',
            'nama_suplier'=>'Mirna',
            'qty'=>'1',
            'tgl'=>'2021-10-13'],

            ['nama_barang'=>'Sepatu Converse',
            'nama_suplier'=>'Galih',
            'qty'=>'1',
            'tgl'=>'2021-10-08'],

            ['nama_barang'=>'Kerudung Bella Square',
            'nama_suplier'=>'Kayla',
            'qty'=>'3',
            'tgl'=>'2021-10-19'],

            ['nama_barang'=>'Shampo Pantene',
            'nama_suplier'=>'Kartika',
            'qty'=>'1',
            'tgl'=>'2021-09-29'],
        ];
        DB::table('pembelians')->insert($post);
    }
}
