<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles_crud_permission = new Permission();
        $roles_crud_permission->name         = 'roles-crud';
        $roles_crud_permission->display_name = 'CRUD for roles';
        $roles_crud_permission->description  = 'Create Read Update Delete for roles table';
        $roles_crud_permission->save();

        $users_crud_permission = new Permission();
        $users_crud_permission->name         = 'users-crud';
        $users_crud_permission->display_name = 'CRUD for users';
        $users_crud_permission->description  = 'Create Read Update Delete for users table';
        $users_crud_permission->save();

        $permissions_crud_permission = new Permission();
        $permissions_crud_permission->name         = 'permissions-crud';
        $permissions_crud_permission->display_name = 'CRUD for permissions';
        $permissions_crud_permission->description  = 'Create Read Update Delete for permissions table';
        $permissions_crud_permission->save();

        $institutions_crud_permission = new Permission();
        $institutions_crud_permission->name         = 'institutions-crud';
        $institutions_crud_permission->display_name = 'CRUD for institutions';
        $institutions_crud_permission->description  = 'Create Read Update Delete for institutions table';
        $institutions_crud_permission->save();

        $faculties_crud_permission = new Permission();
        $faculties_crud_permission->name         = 'faculties-crud';
        $faculties_crud_permission->display_name = 'CRUD for faculties';
        $faculties_crud_permission->description  = 'Create Read Update Delete for faculties table';
        $faculties_crud_permission->save();

        $courses_crud_permission = new Permission();
        $courses_crud_permission->name         = 'courses-crud';
        $courses_crud_permission->display_name = 'CRUD for courses';
        $courses_crud_permission->description  = 'Create Read Update Delete for courses table';
        $courses_crud_permission->save();

        $admin_role = Role::where('name', 'admin')->first();
        $otm_role = Role::where('name', 'otm')->first();

        $admin_role->attachPermissions([$roles_crud_permission,
            $users_crud_permission,
            $permissions_crud_permission,
            $institutions_crud_permission,
            $faculties_crud_permission,
            $courses_crud_permission]);

        $otm_role->attachPermissions([$faculties_crud_permission, $courses_crud_permission]);
    }
}
