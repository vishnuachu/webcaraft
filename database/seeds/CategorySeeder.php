<?php

use Illuminate\Database\Seeder;
use App\Models\category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        category::create([
            'name'              => 'Television',
        ]);
        category::create([
            'name'              => 'Headphones',
        ]);
    }
}
