<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableTemChildrenClass extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tem_children_class', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Score');
            $table->string('Children_Name');
            $table->string('Email');
            $table->string('Birth_Day');
            $table->string('Parent_Name');
            $table->string('Phone_Number');
            $table->integer('Gender');
            $table->string('Address');
            $table->integer('Status');
            $table->integer('id_Children');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tem_children_class');
    }
}
