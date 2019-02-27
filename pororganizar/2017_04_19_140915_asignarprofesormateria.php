<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Asignarprofesormateria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Asignarprofesormateria', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_profesor');
            $table->integer('id_materia');
             $table->integer('id_grupo');     
             $table->string('dia');
             $table->string('hora');          
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
