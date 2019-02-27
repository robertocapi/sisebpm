<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Becas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('becas', function (Blueprint $table) {
          $table->increments('id');

          $table->integer('institucion_id')->unsigned();
          $table->foreign('institucion_id')->references('id')->on('institucionesBecas');
          $table->integer('conceptosPagos_id')->unsigned();
          $table->foreign('conceptosPagos_id')->references('id')->on('conceptosPagos');
          $table->double('descuento');
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
        //
    }
}
