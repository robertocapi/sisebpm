<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Facturacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('facturacion', function (Blueprint $table) {
            $table->increments('id');
          $table->string('razonsocialfac'); 
           $table->string('regimen'); 
           $table->string('dire_factura'); 
            $table->string('rfc_factu'); 
                          $table->integer('id_alumno'); 
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
