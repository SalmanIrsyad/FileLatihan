<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class JurusanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $jurusan= [
            ['kode_mata_pelajaran' => 1001 , 'nama_mata_pelajaran' => 'B001' , 'semester' => '2' , 'jurusan' => 'Rekayasa Perangkat Lunak'],
            
        ];
        DB::table('jurusans')->insert($jurusan);
    }
}
