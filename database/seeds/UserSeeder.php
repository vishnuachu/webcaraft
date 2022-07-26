<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('** Started Seeding for Users **');

        $user = User::create([
            'registerid'              => 'QB7213688',
            'name'              => 'Super Admin',
            'phone'              => '12345678',
            'image'              => '/image/user_dp/image/user.jpg',
            'approve'              => '1',
            'email'             => 'admin@webandcraft.com',
            'password'          => bcrypt('password'),
        ])->assignRole('Super Admin');

        $user = User::create([
            'registerid'              => 'QB7213688',
            'name'              => 'User',
            'phone'              => '12345678',
            'image'              => '/image/user_dp/image/user.jpg',
            'approve'              => '1',
            'email'             => 'user@webandcraft.com',
            'password'          => bcrypt('password'),
        ])->assignRole('User');

        $this->command->info('** Completed Seeding for Users **');
    }
}
