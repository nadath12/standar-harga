<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JadwalSshSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('jadwal_sshes')->insert([

            'nama_jadwal' => 'Input SSH OPD',
            'date_start' => date('Y-m-d H:i:s', strtotime("-2 day", strtotime(date("Y-m-d H:i:s")))),
            'date_finish' => date('Y-m-d H:i:s', strtotime("+10 day", strtotime(date("Y-m-d H:i:s")))),
            'tahun' => date('Y'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
