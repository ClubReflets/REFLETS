<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrganizationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Add default organization (Reflets)
        DB::Table('organizations')->insert([
            'name' => 'Reflets',
            'email' => 'Admin',
            'email' => 'reflets@etsmtl.net',
            'description' => 'ReflETS regroupe des étudiants de l’ÉTS ayant comme passion commune la photographie',
            'logo' => 'INSERT_LOGO'
        ]);
    }
}
