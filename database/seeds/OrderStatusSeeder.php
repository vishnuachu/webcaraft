<?php

use Illuminate\Database\Seeder;
use App\Models\order_status;

class OrderStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        order_status::create([
            'status'              => 'Order Placed',
        ]);
        order_status::create([
            'status'              => 'Processing',
        ]);
        order_status::create([
            'status'              => 'Packed',
        ]);
        order_status::create([
            'status'              => 'Delivered',
        ]);
        order_status::create([
            'status'              => 'Canceled or Declined',
        ]);
    }
}
