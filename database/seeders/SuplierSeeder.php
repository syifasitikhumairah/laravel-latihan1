<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class SuplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$table->string('nama_suplier');
        // $table->string('alamat');
        // $table->integer('kode_pos');
        // $table->string('kota');
        $post = [
            ['nama_suplier'=>'Risa',
            'alamat'=>'Cibaduyut',
            'kode_pos'=>'40238',
            'kota'=>'Bandung'
            ],

            ['nama'=>'Nindya',
            'alamat'=>'Andir',
            'kode_pos'=>'40238',
            'kota'=>'Bandung'
            ],

            ['nama'=>'Rudi',
            'alamat'=>'Cangkuang Wetan',
            'kode_pos'=>'40238',
            'kota'=>'Bandung'
            ],

            ['nama'=>'Annisa',
            'alamat'=>'Katapang',
            'kode_pos'=>'40238',
            'kota'=>'Bandung'
            ],

            ['nama'=>'Santia',
            'alamat'=>'Sukamenak',
            'kode_pos'=>'40238',
            'kota'=>'Bandung'
            ],
        ];
        DB::table('supliers')->insert($post);
    }
}
