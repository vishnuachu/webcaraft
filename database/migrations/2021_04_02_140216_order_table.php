<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_no');
            $table->string('user_id');
            $table->smallInteger('delivery_address');
            $table->smallInteger('order_status');
            $table->enum('payment_method', ['cod', 'card'])->default('cod');
            $table->smallInteger('payment_status');
            $table->smallInteger('total_count');
            $table->double('total_amount');
            $table->smallInteger('view')->default(0);
            $table->timestamp('deleted_at')->nullable();
            $table->text('reason')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order');
    }
}
