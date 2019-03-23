<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableStaffAccount extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_account', function (Blueprint $table) {
            $table->increments('id');
            $table->string('User_Name');
            $table->string('Password');
            $table->integer('Staff_ID')->unsigned();  
            $table->foreign('Staff_ID')->references('id')->on('staff');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff_account');
    }
}
