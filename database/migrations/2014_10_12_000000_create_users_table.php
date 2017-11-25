<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('lastName')->nullable()      ;
            $table->string('firstName')->nullable();
            $table->string('secondName')->nullable();
            $table->string('region')->nullable();
            $table->string('city')->nullable();
            $table->string('postNumber')->nullable();
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('listOfOrders')->nullable();
            $table->string('password');
            $table->boolean('isAdmin')->default(0);
            $table->text('photo')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
