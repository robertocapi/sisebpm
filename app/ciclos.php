<?php

namespace impotlx;

use Illuminate\Database\Eloquent\Model;

class ciclos extends Model
{
    //
     protected $table='ciclos';
     protected $fillable = ['ciclos', 'fecha_inicio', 'fecha_fin','estatus'];



}
