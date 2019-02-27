<?php

namespace impotlx;

use Illuminate\Database\Eloquent\Model;

class grupos extends Model
{
    //
      protected $table='grupos';
     protected $fillable = ['nombre', 'carrera_id', 'dia','turno','ciclo_id'];

}
