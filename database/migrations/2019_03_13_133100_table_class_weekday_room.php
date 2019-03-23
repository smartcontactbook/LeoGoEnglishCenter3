<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class TableClassWeekdayRoom extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_weekday_room', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Class_ID')->unsigned();
            $table->integer('Classroom_ID')->unsigned();
            $table->integer('Weekday_ID1')->unsigned();
            $table->integer('Weekday_ID2')->unsigned();
            // $table->integer('Hours');
            // $table->time('Time_Start');
            // $table->time('Time_End');
            $table->foreign('Class_ID')->references('id')->on('class');
            $table->foreign('Classroom_ID')->references('id')->on('class_room');
            $table->foreign('Weekday_ID1')->references('id')->on('weekday');
            $table->foreign('Weekday_ID2')->references('id')->on('weekday');
          //  $table->primary('id');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('class_weekday_room');
    }
}