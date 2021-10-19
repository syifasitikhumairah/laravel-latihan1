<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PembeliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // //$table->string('nama');
        // $table->string('jns_kelamin');
        // $table->string('alamat');
        // $table->integer('kode_pos');
        // $table->string('kota');
        // $table->date('tgl_lahir');
        $post = [
            ['nama'=>'Risa',
            'jns_kelamin'=>'Perempuan',
            'alamat'=>'Cibaduyut',
            'kode_pos'=>'40238',
            'kota'=>'Bandung',
            'tgl_lahir'=>'1996-08-31'
            ],

            ['nama'=>'Nindya',
            'jns_kelamin'=>'Perempuan',
            'alamat'=>'Andir',
            'kode_pos'=>'40238',
            'kota'=>'Bandung',
            'tgl_lahir'=>'2001-03-15'
            ],

            ['nama'=>'Rudi',
            'jns_kelamin'=>'Laki-laki',
            'alamat'=>'Cangkuang Wetan',
            'kode_pos'=>'40238',
            'kota'=>'Bandung',
            'tgl_lahir'=>'1999-12-03'
            ],

            ['nama'=>'Annisa',
            'jns_kelamin'=>'Perempuan',
            'alamat'=>'Katapang',
            'kode_pos'=>'40238',
            'kota'=>'Bandung',
            'tgl_lahir'=>'1994-09-27'
            ],

            ['nama'=>'Santia',
            'jns_kelamin'=>'Perempuan',
            'alamat'=>'Sukamenak',
            'kode_pos'=>'40238',
            'kota'=>'Bandung',
            'tgl_lahir'=>'2003-05-16'
            ],
        ];
        DB::table('pembelis')->insert($post);
    }
}
