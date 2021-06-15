<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSquadTribe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('squad_tribe', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('squad_id')->unsigned();
            $table->unsignedBigInteger('tribe_id')->unsigned();
            
            $table->foreign('squad_id')->references('id')->on('squad');
            $table->foreign('tribe_id')->references('id')->on('tribe');
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
        Schema::dropIfExists('squad_tribe');
    }
}
