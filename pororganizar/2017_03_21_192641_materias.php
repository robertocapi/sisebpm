<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Materias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('materias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('carrera');
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
        //
    }
}
