<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$table->string('nama_pelanggan');
        // $table->string('nama_barang');
        // $table->integer('qty');
        // $table->date('tgl_pesan');
        $post = [
            ['nama_pelanggan'=>'Risa',
            'nama_barang'=>'Rinso Matic',
            'qty'=>'2',
            'tgl_pesan'=>'2021-10-13'],

            ['nama_pelanggan'=>'Nindya',
            'nama_barang'=>'Sunlight 755 ml',
            'qty'=>'1',
            'tgl_pesan'=>'2021-10-13'],

            ['nama_pelanggan'=>'Rudi',
            'nama_barang'=>'Sepatu Converse',
            'qty'=>'1',
            'tgl_pesan'=>'2021-10-08'],

            ['nama_pelanggan'=>'Annisa',
            'nama_barang'=>'Kerudung Bella Square',
            'qty'=>'3',
            'tgl_pesan'=>'2021-10-19'],

            ['nama_pelanggan'=>'Santia',
            'nama_barang'=>'Shampo Pantene',
            'qty'=>'1',
            'tgl_pesan'=>'2021-09-29'],
        ];
        DB::table('pesanans')->insert($post);
    }
}
