<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableLecturerAccount extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lecturer_account', function (Blueprint $table) {
            $table->increments('id');
            $table->string('User_Name');
            $table->string('Password');
            $table->integer('Lecturer_ID')->unsigned();
            $table->foreign('Lecturer_ID')->references('id')->on('lecturer'); 

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lecturer_account');
    }
}
