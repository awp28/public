<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::firstOrCreate([
            'name' => 'Admin',
            'slug' => 'admin'
        ]);

        // $role->permissions()->sync(Permission::pluck('id')->toArray());

        User::updateOrCreate(
            [
                'username' => 'test'
            ],
            [
                'name' => 'Admin',
                'password' => 'test2806',
                'role_id' => $role->id,
            ]
        );
    }
}
