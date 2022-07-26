<?php

use Illuminate\Database\Seeder;
use App\Models\payment_status;

class PaymentStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        payment_status::create([
            'status'              => 'Pending',
        ]);
        payment_status::create([
            'status'              => 'Success',
        ]);
        payment_status::create([
            'status'              => 'Failed',
        ]);
        payment_status::create([
            'status'              => 'Declined',
        ]);
        payment_status::create([
            'status'              => 'Refund Initiated',
        ]);
        payment_status::create([
            'status'              => 'Refunded',
        ]);
    }
}
