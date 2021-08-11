<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoyosPartidaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stroke_models', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('id_hoyo');
            $table->foreign('id_hoyo')->references('id')->on('hoyos');
            $table->unsignedBigInteger('id_partida');
            $table->foreign('id_partida')->references('id')->on('partidas');
            $table->string('golpe'); 

            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_hoyos_partida');
    }
}
