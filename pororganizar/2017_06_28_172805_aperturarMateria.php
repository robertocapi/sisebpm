<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AperturarMateria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('aperturaMateria', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_materia');
               $table->integer('id_periodo');  
                    $table->integer('id_grupo');  
                        $table->integer('id_Profesor');  
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
