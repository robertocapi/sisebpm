<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Aperturamateria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
            Schema::create('aperturamateria', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_materia');
               $table->integer('id_periodo');  
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
