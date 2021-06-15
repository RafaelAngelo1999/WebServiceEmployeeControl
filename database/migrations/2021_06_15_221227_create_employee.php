<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('obs');
            $table->boolean('standard')->nullable();
            $table->unsignedBigInteger('office_id')->unsigned();
            $table->unsignedBigInteger('employee_status_id')->unsigned();
            
            $table->foreign('office_id')->references('id')->on('office');
            $table->foreign('employee_status_id')->references('id')->on('employee_status');
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
        Schema::dropIfExists('employee');
    }
}
