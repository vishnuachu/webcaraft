<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\permission_category;

class PermissionCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('** Started Seeding for Roles **');

        $role = permission_category::create([
            'name'              => 'Role',
        ]);

        $role = permission_category::create([
            'name'              => 'User',
        ]);

        $role = permission_category::create([
            'name'              => 'Category',
        ]);

        $role = permission_category::create([
            'name'              => 'Product',
        ]);

        $role = permission_category::create([
            'name'              => 'Order',
        ]);

        $this->command->info('** Completed Seeding for Roles **');
    }
}
