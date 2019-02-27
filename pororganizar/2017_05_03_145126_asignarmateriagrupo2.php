<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Asignarmateriagrupo2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        schema::create('AsignarMateriaGrupo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_grupo');
               $table->integer('id_materiaabierta');  
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
