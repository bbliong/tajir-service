<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('payment_name', 100);
            $table->string('description', 100);
            $table->string('card_holder', 100);
            $table->string('card_number', 100);
            $table->string('is_active', 100);
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->string('image_url', 100)->nullable();
            $table->string('created_by', 255);
            $table->string('updated_by', 255);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('parent_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
