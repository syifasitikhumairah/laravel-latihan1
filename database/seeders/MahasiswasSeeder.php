<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class MahasiswasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = [
            ['nim'=>"191", 'nama'=>'Sani', 'jurusan'=>'RPL', 'wali'=>'Dani'],
            ['nim'=>"192", 'nama'=>'Anisa', 'jurusan'=>'RPL', 'wali'=>'Budi'],
            ['nim'=>"193", 'nama'=>'Anto', 'jurusan'=>'RPL', 'wali'=>'Fitri'],
            ['nim'=>"194", 'nama'=>'Deri', 'jurusan'=>'RPL', 'wali'=>'Titin'],
            ['nim'=>"195", 'nama'=>'Nasrul', 'jurusan'=>'RPL', 'wali'=>'Rijal'],
        ];
        // memasukkan data ke dalam tabel "posts"
        DB::table('mahasiswas')->insert($post);
    }
}
