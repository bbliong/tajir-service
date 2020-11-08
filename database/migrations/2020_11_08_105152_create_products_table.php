<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('size_id');
            $table->unsignedBigInteger('color_id');
            $table->string('product_name', 100);
            $table->string('slug', 100);
            $table->mediumInteger('price');
            $table->mediumInteger('cross_price')->nullable();
            $table->mediumInteger('discount_price')->nullable();
            $table->boolean('is_discount');
            $table->boolean('is_populer');
            $table->text('description');
            $table->string('created_by', 255);
            $table->string('updated_by', 255);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('size_id')->references('id')->on('product_sizes');
            $table->foreign('color_id')->references('id')->on('product_colors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
