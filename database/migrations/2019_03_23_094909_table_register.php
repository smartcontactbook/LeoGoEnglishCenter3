<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableRegister extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Score')->nullable();
            $table->string('Description');
            $table->string('First_Name');
            $table->string('Last_Name');
            $table->string('Email');
            $table->string('Birth_Day');
            $table->string('Parent_Name');
            $table->string('Phone_Number');
            $table->integer('Gender');
            $table->string('Address');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('register');
    }
}
