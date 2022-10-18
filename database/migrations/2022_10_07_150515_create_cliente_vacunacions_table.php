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
        Schema::create('cliente_vacunacions', function (Blueprint $table) {
            $table->id();
            $table->date('FechaVacunacion');
            $table->integer('NumDosis');
            $table->bigInteger('idCliente')->unsigned();
            $table->foreign('idCliente')
                  ->references('id')
                  ->on('clientes');
            $table->bigInteger('idVacunacion')->unsigned();
            $table->foreign('idVacunacion')
                  ->references('id')
                  ->on('vacunacions');

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
        Schema::dropIfExists('cliente_vacunacions');
    }
};
