<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class siswa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $siswa = [
        //     ['nis' => '2002', 'nama_siswa' => 'Vivi Heni R', 'alamat_siswa' => 'Kp.Cangkuang', 'tanggal_lahir' => '2001-04-03'],
           
        // ];

        // DB::table('siswas')->insert($siswa);
        $a = [
            ['nis' => '876','nama_siswa' => 'bayu','alamat_siswa' => 'kopo','tanggal_lahir'=>'1999-04-27'],
        ];

        DB::table('siswas')->insert($a);
    }
}
