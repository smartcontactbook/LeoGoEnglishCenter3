<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableSchedule extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedule', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Classroom_ID')->unsigned();
            $table->integer('Weekday_ID')->unsigned();
            $table->integer('Time_Study_ID')->unsigned();
            $table->foreign('Classroom_ID')->references('id')->on('class_room');
            $table->foreign('Weekday_ID')->references('id')->on('weekday');
            $table->foreign('Time_Study_ID')->references('id')->on('time_study');
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
        Schema::dropIfExists('schedule');
    }
}
