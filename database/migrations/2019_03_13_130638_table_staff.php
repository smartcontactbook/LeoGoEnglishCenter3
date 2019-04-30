<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class TableStaff extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
             $table->increments('id');
            $table->string('Description');
            $table->string('Full_Name');
            $table->string('email');
            $table->string('Birth_Day');
            $table->string('Phone_Number');
            $table->integer('Gender');
            $table->string('Address');
            $table->string('avatar');
            $table->string('User_Name')->nullable();
            $table->string('password');
            $table->integer('Role_ID')->unsigned();
            $table->foreign('Role_ID')->references('id')->on('role');
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
        Schema::dropIfExists('staff');
    }
}