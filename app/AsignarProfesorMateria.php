<?php

namespace impotlx;

use Illuminate\Database\Eloquent\Model;

class AsignarProfesorMateria extends Model
{
    //
       protected $table='AsignarProfesorMateria';
     protected $fillable = ['id_grupo', 'id_materiaabierta','observaciones','estatus'];
}
