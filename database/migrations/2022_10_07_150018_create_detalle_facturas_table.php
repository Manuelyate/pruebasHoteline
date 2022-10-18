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
        Schema::create('detalle_facturas', function (Blueprint $table) {
            $table->id();
            $table->string('FechaServicio');
            $table->string('TipoServicio');
            $table->bigInteger('idPago')->unsigned();
            $table->foreign('idPago')
                  ->references('id')
                  ->on('pagos');
            $table->bigInteger('idFactura')->unsigned();
            $table->foreign('idFactura')
                  ->references('id')
                  ->on('facturas');
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
        Schema::dropIfExists('detalle_facturas');
    }
};
