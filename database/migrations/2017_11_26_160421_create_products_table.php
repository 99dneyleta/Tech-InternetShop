<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id')->unique();
            $table->integer('brandID')->unsigned();
            $table->foreign('brandID')->references('id')->on('brands');
            $table->text('model');
            $table->text('sizes');
            $table->integer('connector');
            $table->text('material');
            $table->integer('colorID')->unsigned();
            $table->foreign('colorID')->references('id')->on('colors');
            $table->float('price');
            $table->integer('quantity');
            $table->text('description');
            $table->text('photo');
            $table->integer('typeID')->unsigned();
            $table->foreign('typeID')->references('id')->on('types');
            $table->integer('power')->nullable();
            $table->integer('capacity')->nullable();
            $table->float('volume')->nullable();
            $table->integer('crutchsQuantity')->nullable();
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

