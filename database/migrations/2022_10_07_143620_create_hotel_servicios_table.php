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
        Schema::create('hotel_servicios', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idHotel')->unsigned();
            $table->foreign('idHotel')
                  ->references('id')
                  ->on('hotels');
            $table->bigInteger('idServicios')->unsigned();
            $table->foreign('idServicios')
                ->references('id')
                ->on('servicios');
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
        Schema::dropIfExists('hotel_servicios');
    }
};
