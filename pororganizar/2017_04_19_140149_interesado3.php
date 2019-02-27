<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Interesado3 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        
         Schema::create('interesados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('ap_paterno');
             $table->string('ap_materno');     
             $table->date('date_birthday');
             $table->string('phone_house');    
              $table->string('phone_movil'); 
               $table->string('email');  
                    $table->string('sexo');   
                                  $table->integer('estatus');  
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
