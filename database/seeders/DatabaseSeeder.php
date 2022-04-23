<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([ElementsSeeder::class]);
        $this->call([JadwalSshSeeder::class]);
        $this->call([KodeBelanjaSeeder::class]);
        $this->call([MenuSeeder::class]);
        $this->call([RequestSshSeeder::class]);
        $this->call([RoleSeeder::class]);
        $this->call([SetRumusHargaSeeder::class]);
        $this->call([SshSeeder::class]);
        $this->call([UserAccessMenuSeeder::class]);
        $this->call([UsersTableSeeder::class]);
    }
}
