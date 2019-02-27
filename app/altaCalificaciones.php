<?php

namespace impotlx;

use Illuminate\Database\Eloquent\Model;

class altaCalificaciones extends Model
{
    //
             protected $table='altaCalificaciones';
     protected $fillable = ['id_alumno', 'id_materiaabierta', 'id_grupo','calificacion','observaciones','estatus'];

         
}
