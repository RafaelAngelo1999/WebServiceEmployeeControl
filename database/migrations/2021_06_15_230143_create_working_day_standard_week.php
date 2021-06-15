<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkingDayStandardWeek extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('working_day_standard_week', function (Blueprint $table) {
            $table->id();
            $table->enum('day', ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday']);
            $table->unsignedBigInteger('working_day_standard_id')->unsigned();
            $table->unsignedBigInteger('employee_id')->unsigned();
            
            $table->foreign('employee_id')->references('id')->on('employee');
            $table->foreign('working_day_standard_id')->references('id')->on('working_day_standard');
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
        Schema::dropIfExists('working_day_standard_week');
    }
}
