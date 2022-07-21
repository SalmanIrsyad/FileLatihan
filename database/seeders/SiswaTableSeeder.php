<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $siswa= [
            ['nis' => '1001' , 'nama_siswa' => 'Udin Saja' , 'alamat_lahir' => 'Bandung' , 'tanggal_lahir' => '2000/09/03'],
            ['nis' => '1002' , 'nama_siswa' => 'Udin Lagi' , 'alamat_lahir' => 'Bandung' , 'tanggal_lahir' => '2000/09/10'],
            ['nis' => '1002' , 'nama_siswa' => 'Lagi-lagi Udin' , 'alamat_lahir' => 'Bandung' , 'tanggal_lahir' => '2000/09/11'],
        ];
        DB::table('siswas')->insert($siswa);
    }
}
