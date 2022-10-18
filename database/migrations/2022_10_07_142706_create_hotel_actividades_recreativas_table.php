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
        Schema::create('hotel_actividades_recreativas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idHotel')->unsigned();
            $table->foreign('idHotel')
                  ->references('id')
                  ->on('hotels');
            $table->bigInteger('idActRecre')->unsigned();
            $table->foreign('idActRecre')
                    ->references('id')
                    ->on('actividades_recreativas');
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
        Schema::dropIfExists('hotel_actividades_recreativas');
    }
};
