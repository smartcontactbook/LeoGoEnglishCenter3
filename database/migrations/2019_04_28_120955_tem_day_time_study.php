<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TemDayTimeStudy extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tem_day_time_study', function (Blueprint $table) {
            $table->Increments('id');
            $table->text('title');
            $table->date('dayStartStudy');
            $table->date('dayEndStudy');
            $table->time('timeStartStudy');
            $table->time('timeEndStudy');
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
        Schema::dropIfExists('tem_day_time_study');
    }
}
