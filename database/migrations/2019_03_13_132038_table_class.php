<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableClass extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Class_Name');
            $table->date('Start_Date');
            $table->date('End_Date');
            $table->float('Tuition');
            $table->integer('Lecturer_ID')->unsigned();
            $table->integer('Tutor_ID')->unsigned();
            $table->integer('Course_ID')->unsigned();
          //  $table->primary('id');
            $table->foreign('Tutor_ID')->references('id')->on('tutor');
            $table->foreign('Lecturer_ID')->references('id')->on('lecturer');
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
        Schema::dropIfExists('class');
    }
}
