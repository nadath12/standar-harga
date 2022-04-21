<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('menus')->insert([
            'id' => '1',
            'menu_name' => 'Home',
            'icon' => 'ni ni-tv-2',
            'menu_link' => 'home',
            'menu_deskripsi'=> '',
            'level' => '0',
            'menu_top_id' => '0',
            'is_active' => '1',
            'urut' => '0',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
