<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = [
            ['nipd'=>"2021101", 'nama'=>'Susanti', 'alamat'=>'Cibiru'],
            ['nipd'=>"2021102", 'nama'=>'Tono', 'alamat'=>'Cibaduyut'],
            ['nipd'=>"2021103", 'nama'=>'Anggunn', 'alamat'=>'Antapani'],
            ['nipd'=>"2021104", 'nama'=>'Deni', 'alamat'=>'Buahbatu'],
            ['nipd'=>"2021105", 'nama'=>'Yanto', 'alamat'=>'Baleendah'],
        ];
        DB::table('dosens')->insert($post);
    }
}
