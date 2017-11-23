<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEliquidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eliquids', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('brandID')->unsigned();
            $table->foreign('brandID')->references('id')->on('brands');
            $table->integer('vg');
            $table->integer('pg');
            $table->float('nicotine');
            $table->integer('sizeID')->unsigned();
            $table->foreign('sizeID')->references('id')->on('priceforsize');
            $table->float('price');
            $table->integer('quantity');
            $table->text('description');
            $table->boolean('isFlavour')->nullable();
            $table->float('oneNicotinePrice')->nullable();
            $table->text('photo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eliquids');
    }
}
