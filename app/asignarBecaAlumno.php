<?php

namespace impotlx;

use Illuminate\Database\Eloquent\Model;

class asignarBecaAlumno extends Model
{
    //
     protected $table='asignarBecaAlumno';
     protected $fillable = ['id_alumno', 'id_beca','observaciones','estatus'];
}
