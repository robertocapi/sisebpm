<?php

namespace impotlx;

use Illuminate\Database\Eloquent\Model;


class alumnoaGrupo extends Model
{
    //

         protected $table='alumnoaGrupo';
     protected $fillable = ['id_alumno', 'id_periodo', 'id_grupo','observaciones','estatus'];
}
