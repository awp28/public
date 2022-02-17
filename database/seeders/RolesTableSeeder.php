<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ['name' => 'admin', 'display_name' => 'Administrator', 'description' => 'Admin have all permissions'],
            ['name' => 'otm', 'display_name' => 'Higher education institution', 'description' => 'Higher education institution']
        ];

        DB::table('roles')->insert($roles);
    }
}
