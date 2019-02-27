<?php

namespace impotlx;

use Illuminate\Database\Eloquent\Model;

class reinscripcion extends Model
{
    //  
                             protected $table='reinscripciones';
     protected $fillable = ['id_alumnos', 'id_periodo','id_carrera','email','tel_cel','cuatrimestre','observaciones','fecha'];

}
