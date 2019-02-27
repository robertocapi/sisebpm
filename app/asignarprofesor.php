<?php

namespace impotlx;

use Illuminate\Database\Eloquent\Model;

class asignarprofesor extends Model
{
    //
         protected $table='asignaprofesor';
     protected $fillable = ['id_profesor', 'id_materia','observaciones','estatus'];
}
