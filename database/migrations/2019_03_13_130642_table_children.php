<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableChildren extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('children', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Score');
            $table->string('Description');
            $table->string('Full_Name');
            $table->string('Nick_Name');
            $table->string('email');
            $table->string('Birth_Day');
            $table->string('Parent_Name');
            $table->string('Phone_Number');
            $table->integer('Gender');
            $table->string('Address');
            $table->string('avatar');
            $table->integer('Status');
            $table->string('User_Name');
            $table->string('password');
            $table->integer('Role_ID')->unsigned();
            $table->foreign('Role_ID')->references('id')->on('role');
            
         //   $table->primary('id');
            // $table->foreign('Course_ID')->references('id')->on('course');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('children');
    }
}
