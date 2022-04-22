<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('roles')->insert([
            [
                'id' => '1',
                'role_name' => 'ADMIN',
                'keterangan' => 'Administrator',
                'tupoksi' => '',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '2',
                'role_name' => 'OPERATOR',
                'keterangan' => 'Operator BPKAD',
                'tupoksi' => '',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '3',
                'role_name' => 'KEPALA_BPKAD',
                'keterangan' => 'Kepala BPKAD',
                'tupoksi' => '',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '4',
                'role_name' => 'VERIFIKATOR',
                'keterangan' => 'Tim Verifikator',
                'tupoksi' => '',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '5',
                'role_name' => 'OPD',
                'keterangan' => 'OPD Perangkat Daerah',
                'tupoksi' => '',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
