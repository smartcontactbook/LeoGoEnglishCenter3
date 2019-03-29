<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableChildrenClass extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('children_class', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Children_ID')->unsigned();
            $table->integer('Class_ID')->unsigned();
            $table->float('Score_A')->nullable();
            $table->float('Score_B')->nullable();
            $table->float('Score_C')->nullable();
            $table->float('Score_D')->nullable();
            $table->float('Score_E')->nullable();
            $table->foreign('Children_ID')->references('id')->on('children');
            $table->foreign('Class_ID')->references('id')->on('leogo_class');
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
        Schema::dropIfExists('children_class');
    }
}
