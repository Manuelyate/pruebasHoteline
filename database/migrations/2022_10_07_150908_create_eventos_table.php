<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->date('FechaEventos');
            $table->datetime('HoraEventos');
            $table->string('LugarEventos');
            $table->string('NombreEventos');
            $table->bigInteger('idHotel')->unsigned();
            $table->foreign('idHotel')
                  ->references('id')
                  ->on('hotels');
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
        Schema::dropIfExists('eventos');
    }
};
