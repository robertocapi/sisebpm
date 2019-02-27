<?php

namespace impotlx;

use Illuminate\Database\Eloquent\Model;

class materias extends Model
{
    //
     protected $table='materias';
     protected $fillable = ['carrera_id', 'abreviatura','nombre', 'clave','horas_docentes','horas_independientes','creditos'];



}
