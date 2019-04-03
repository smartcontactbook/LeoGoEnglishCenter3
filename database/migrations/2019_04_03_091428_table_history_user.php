<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableHistoryUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_user', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('Level_ID')->unsigned();
            $table->integer('Class_ID')->unsigned();
            $table->integer('Children_ID')->unsigned();
            $table->date('Start_Date');
            $table->date('End_Date');
            $table->foreign('Level_ID')->references('id')->on('level');
            $table->foreign('Class_ID')->references('id')->on('class');
            $table->foreign('Children_ID')->references('id')->on('children');
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
        Schema::dropIfExists('history_user');
    }
}
