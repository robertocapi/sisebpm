<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Carreras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('carreras', function (Blueprint $table) {
         $table->increments('id');
          $table->string('carrera');
          $table->integer('nivel_id')->unsigned();
          $table->foreign('nivel_id')->references('id')->on('niveles');
                $table->string('abreviatura');
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
