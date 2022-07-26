<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('** Started Seeding for Roles **');

        $role = Role::create([
            'name'              => 'Super Admin',
            'guard_name'        => 'web',
        ])->givePermissionTo(Permission::all());

        $role = Role::create([
            'name'              => 'User',
            'guard_name'        => 'web',
        ])->givePermissionTo('create_role');

        $this->command->info('** Completed Seeding for Roles **');
    }
}
