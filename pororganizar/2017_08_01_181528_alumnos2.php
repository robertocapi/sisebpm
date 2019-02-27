<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Alumnos2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
      public function up()
    {
        //
         Schema::create('alumnos', function (Blueprint $table) {
            $table->increments('id');
              $table->string('nombre');
            $table->string('ap_paterno');
             $table->string('ap_materno');     
             $table->date('date_birthday');
             $table->string('phone_house');    
              $table->string('phone_movil'); 
               $table->string('email');  
                    $table->string('sexo');   
            $table->string('nombre_contacto');
                  $table->string('matricula'); 
                       $table->string('CURP');
                       $table->string('periodo'); 
                          $table->string('streetNumber');  
                         $table->string('colonia'); 
                              $table->string('Municipio');  
                                $table->string('Estado'); 
                                  $table->string('zip_code');  
                                        $table->string('estado_civil');
 $table->string('numerohome_contacto'); 
              $table->string('numerocel_contacto'); 
                $table->string('nombreEmpresa'); 
                  $table->string('tel_oficina'); 
                  $table->string('dire_oficina'); 
                        $table->string('cargo'); 
                             $table->integer('estatus'); 
                          $table->string('comoEntero'); 
                          $table->integer('id_carrera'); 
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
