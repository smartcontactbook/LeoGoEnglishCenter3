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
            $table->string('Description')->nullable();
            $table->string('Full_Name');
            $table->string('Nick_Name');
            $table->string('Email');
            $table->string('Birth_Day');
            $table->string('Parent_Name');
            $table->string('Phone_Number');
            $table->integer('Gender');
            $table->string('Address');
            $table->datetime('Test_Schedule')->nullable();
            $table->integer('Course_ID')->unsigned();
            $table->foreign('Course_ID')->references('id')->on('course');

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
