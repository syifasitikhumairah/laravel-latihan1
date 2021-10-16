<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class DosensSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = [
            ['nipd'=>"0012021", 'nama'=>'Susanti', 'alamat'=>'Cibiru'],
            ['nipd'=>"0022021", 'nama'=>'Risa', 'alamat'=>'Cibaduyut'],
            ['nipd'=>"0032021", 'nama'=>'Rahmat', 'alamat'=>'Buahbatu'],
            ['nipd'=>"0042021", 'nama'=>'Toni', 'alamat'=>'Katapang'],
            ['nipd'=>"0052021", 'nama'=>'Putri', 'alamat'=>'Regol'],
        ];
        // memasukkan data ke dalam tabel "posts"
        DB::table('_dosens')->insert($post);
    }
}
