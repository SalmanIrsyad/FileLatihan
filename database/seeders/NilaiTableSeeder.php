<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class NilaiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $nilai = [
            ['nis' => '1001', 'kode_mata_pelajaran'=> 'B001' ,'nilai' => 90 ,'index_nilai'=> 'A'],
        ];
        DB::table('nilais')->insert($nilai);
    }
}
