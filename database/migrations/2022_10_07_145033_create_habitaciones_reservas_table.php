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
        Schema::create('habitaciones_reservas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idReserva')->unsigned();
            $table->foreign('idReserva')
                  ->references('id')
                  ->on('reservas');
            $table->bigInteger('idHabitaciones')->unsigned();
            $table->foreign('idHabitaciones')
                  ->references('id')
                  ->on('habitaciones');
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
        Schema::dropIfExists('habitaciones_reservas');
    }
};
