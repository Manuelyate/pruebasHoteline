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
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->date('FechaIng');
            $table->date('FechaTer');
            $table->bigInteger('idHotel')->unsigned();
            $table->foreign('idHotel')
                  ->references('id')
                  ->on('hotels');
            $table->bigInteger('idRegistroCliente')->unsigned();
            $table->foreign('idRegistroCliente')
                  ->references('id')
                  ->on('registro_clientes');
            $table->bigInteger('idFactura')->unsigned();
            $table->foreign('idFactura')
                  ->references('id')
                  ->on('facturas');
            $table->bigInteger('idCliente')->unsigned();
            $table->foreign('idCliente')
                  ->references('id')
                  ->on('clientes'); 
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
        Schema::dropIfExists('reservas');
    }
};
