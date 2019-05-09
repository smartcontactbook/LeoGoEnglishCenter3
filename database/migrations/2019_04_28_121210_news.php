<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class News extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('title');
            $table->string('image');
            $table->string('description');
            $table->text('content');
            $table->date('create_at');
            $table->integer('type');
            $table->integer('status');
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('staff');
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
        Schema::dropIfExists('news');
    }
}
