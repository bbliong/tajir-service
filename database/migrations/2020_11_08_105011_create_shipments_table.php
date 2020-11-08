<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipments', function (Blueprint $table) {
            $table->id();
            $table->string('shipment_name', 100);
            $table->string('description', 100);
            $table->string('code', 100);
            $table->string('is_active', 100);
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->string('image_url', 100)->nullable();
            $table->string('created_by', 255);
            $table->string('updated_by', 255);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('parent_id')->references('id')->on('shipments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shipments');
    }
}
