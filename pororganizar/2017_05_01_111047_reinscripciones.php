<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Reinscripciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
           Schema::create('reinscripciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_alumnos');
               $table->integer('id_periodo');  
                    $table->string('email');  
             $table->string('tel_cel');  
                  $table->string('cuatrimestre');   
                       $table->string('observaciones'); 
                        $table->date('fecha');         
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
