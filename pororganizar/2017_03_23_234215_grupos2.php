<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Grupos2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('grupos', function(Blueprint $table)
        {
            $table->engine = 'InnoDB';
           $table->increments('id');
            $table->string('nombre');
                 $table->string('dia');
                    $table->string('turno');
              $table->integer('id_carrerra');
              $table->integer('periodo');
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
