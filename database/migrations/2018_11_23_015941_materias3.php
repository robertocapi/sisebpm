<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Materias3 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('materias', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('carrera_id')->unsigned();
          $table->foreign('carrera_id')->references('id')->on('carreras');
          $table->string('nombre');
             $table->string('abreviatura');
          $table->string('clave');
            $table->string('horas_docentes');
            $table->string('horas_independientes');
          $table->string('creditos');
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
        Schema::dropIfExists('materias');
    }
}
