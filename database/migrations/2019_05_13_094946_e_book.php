<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EBook extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('e_book', function (Blueprint $table) {
             $table->Increments('id');
            $table->string('eBook_Name');
            $table->string('Author');
            $table->string('description');
            $table->string('image');
            $table->string('file');
            $table->integer('Course_ID')->unsigned();
            $table->foreign('Course_ID')->references('id')->on('course');
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
        Schema::dropIfExists('e_book');
    }
}
