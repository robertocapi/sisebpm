<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pagos3 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         schema::create('pagos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_alumno');
               $table->integer('id_conceptopago'); 
                 $table->integer('id_tipodeBecas'); 
                   $table->double('descuentoObtenido'); 
                       $table->double('montoconcepto');   
                     $table->double('montoaPagar');  
                 $table->date('fecha');  
                 $table->string('realizadopor');
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
