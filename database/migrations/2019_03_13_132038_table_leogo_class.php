<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableLeogoClass extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leogo_class', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Class_Name');
            $table->date('Start_Date');
            $table->date('End_Date');
            $table->float('Tuition');
            $table->string('Description');
            $table->integer('QuantityStudent');
            $table->integer('QuantitySession');
            $table->integer('Lecturer_ID')->unsigned();
            $table->integer('Tutor_ID')->unsigned();
            $table->integer('Level_ID')->unsigned();
          //  $table->primary('id');
            $table->foreign('Tutor_ID')->references('id')->on('staff');
            $table->foreign('Lecturer_ID')->references('id')->on('staff');
            $table->foreign('Level_ID')->references('id')->on('level');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leogo_class');
    }
}
