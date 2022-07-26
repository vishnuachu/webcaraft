<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('** Started Seeding for Permissions **');

        Permission::create([
            'name'              => 'view_all_role',
            'guard_name'        => 'web',
        ]);
        Permission::create([
            'name'              => 'create_role',
            'guard_name'        => 'web',
        ]);

        Permission::create([
            'name'              => 'edit_role',
            'guard_name'        => 'web',
        ]);

        Permission::create([
            'name'              => 'delete_role',
            'guard_name'        => 'web',
        ]);

        Permission::create([
            'name'              => 'permission_role',
            'guard_name'        => 'web',
        ]);

        Permission::create([
            'name'              => 'view_all_user',
            'guard_name'        => 'web',
        ]);

        Permission::create([
            'name'              => 'create_user',
            'guard_name'        => 'web',
        ]);

        Permission::create([
            'name'              => 'edit_user',
            'guard_name'        => 'web',
        ]);

        Permission::create([
            'name'              => 'delete_user',
            'guard_name'        => 'web',
        ]);

        Permission::create([
            'name'              => 'view_user',
            'guard_name'        => 'web',
        ]);

        Permission::create([
            'name'              => 'view_all_category',
            'guard_name'        => 'web',
        ]);

        Permission::create([
            'name'              => 'create_category',
            'guard_name'        => 'web',
        ]);

        Permission::create([
            'name'              => 'edit_category',
            'guard_name'        => 'web',
        ]);

        Permission::create([
            'name'              => 'delete_category',
            'guard_name'        => 'web',
        ]);

        Permission::create([
            'name'              => 'view_all_product',
            'guard_name'        => 'web',
        ]);

        Permission::create([
            'name'              => 'create_product',
            'guard_name'        => 'web',
        ]);

        Permission::create([
            'name'              => 'view_product',
            'guard_name'        => 'web',
        ]);

        Permission::create([
            'name'              => 'edit_product',
            'guard_name'        => 'web',
        ]);

        Permission::create([
            'name'              => 'delete_product',
            'guard_name'        => 'web',
        ]);

        Permission::create([
            'name'              => 'view_all_order',
            'guard_name'        => 'web',
        ]);

        Permission::create([
            'name'              => 'create_order',
            'guard_name'        => 'web',
        ]);

        Permission::create([
            'name'              => 'view_order',
            'guard_name'        => 'web',
        ]);

        Permission::create([
            'name'              => 'edit_order',
            'guard_name'        => 'web',
        ]);

        $this->command->info('** Completed Seeding for Permissions **');
    }
}
