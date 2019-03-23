<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class TableQuiz extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quiz', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Title');
            $table->integer('Correct');
            $table->integer('Wrong');
            $table->integer('Total');
            $table->integer('Time_Test');
            $table->text('Intro');
            $table->string('Tag');
            $table->date('Date_Test');
            $table->integer('Tutor_ID')->unsigned();
            $table->integer('Lesson_ID')->unsigned();
          //  $table->primary('id');
            $table->foreign('Tutor_ID')->references('id')->on('tutor');
            $table->foreign('Lesson_ID')->references('id')->on('lesson');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quiz');
    }
}