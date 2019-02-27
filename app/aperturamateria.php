<?php

namespace impotlx;

use Illuminate\Database\Eloquent\Model;

class aperturamateria extends Model
{
    //
     protected $table='aperturaMateria';
     protected $fillable = ['id_materia', 'id_periodo','id_grupo','id_Profesor','observaciones','estatus'];

      
  
}
