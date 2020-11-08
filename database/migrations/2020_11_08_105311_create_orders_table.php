<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('shipment_id');
            $table->unsignedBigInteger('payment_id');            
            $table->string('ref_code', 50);
            $table->string('status', 50);
            $table->string('created_by', 255);
            $table->string('updated_by', 255);
            $table->mediumInteger('sub_total');
            $table->mediumInteger('total_price');
            $table->mediumInteger('shipment_price');
            $table->mediumInteger('discount_total');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('shipment_id')->references('id')->on('shipments');
            $table->foreign('payment_id')->references('id')->on('payments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
