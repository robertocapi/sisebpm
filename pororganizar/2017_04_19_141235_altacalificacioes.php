<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Altacalificacioes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('altacalificaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_materia');
            $table->integer('id_periodo');
               $table->integer('id_profesor');
             $table->integer('id_grupo'); 
              $table->integer('id_alumno');       
             $table->string('calificacion');  
             $table->string('observaciones');         
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
