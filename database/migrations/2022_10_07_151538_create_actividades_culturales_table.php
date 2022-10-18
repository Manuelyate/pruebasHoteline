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
        Schema::create('actividades_culturales', function (Blueprint $table) {
            $table->id();
            $table->string('TipoAct');
            $table->date('Fecha');
            $table->datetime('Hora');
            $table->bigInteger('idEventos')->unsigned();
            $table->foreign('idEventos')
                  ->references('id')
                  ->on('eventos');
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
        Schema::dropIfExists('actividades_culturales');
    }
};
