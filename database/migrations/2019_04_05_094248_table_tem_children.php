<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableTemChildren extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tem_children', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Children_ID')->unsigned();
            $table->foreign('Children_ID')->references('id')->on('children');
            $table->integer('Course_ID')->unsigned();
            $table->foreign('Course_ID')->references('id')->on('course');
            $table->integer('Level_ID')->unsigned();
            $table->foreign('Level_ID')->references('id')->on('level');
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
        Schema::dropIfExists('tem_children');
    }
}
