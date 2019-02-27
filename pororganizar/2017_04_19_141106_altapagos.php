<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Altapagos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
          Schema::create('altapagos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_alumnos');
            $table->integer('id_conceptopago');
               $table->integer('id_periodo');    
             $table->string('monto');          
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
