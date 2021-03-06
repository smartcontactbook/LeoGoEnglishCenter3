<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableTemSchedule extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tem_schedule', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Classroom_ID')->unsigned();
            $table->integer('Weekday_ID')->unsigned();
            $table->integer('Time_Study_ID')->unsigned();
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
        Schema::dropIfExists('tem_schedule');
    }
}
