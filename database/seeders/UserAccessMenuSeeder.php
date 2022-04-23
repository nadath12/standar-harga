<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserAccessMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('user_access_menus')->insert([
            'role_id' => '1',
            'menu_id' => '1',
            'is_active' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
