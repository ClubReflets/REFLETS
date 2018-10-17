<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Add default admin user
        DB::Table('users')->insert([
            'firstname' => 'Reflets',
            'lastname' => 'Admin',
            'email' => 'reflets@etsmtl.net',
            'password' => bcrypt('qwerty')
        ]);
    }
}
