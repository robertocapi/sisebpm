<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AsignarbecaAlumno extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
          Schema::create('asignarBecaAlumno', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_alumno');
               $table->integer('id_beca');   
         $table->string('observaciones');  
     $table->string('estatus');        
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
