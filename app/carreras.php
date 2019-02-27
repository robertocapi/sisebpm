<?php

namespace impotlx;

use Illuminate\Database\Eloquent\Model;

class carreras extends Model
{
    //
    protected $table='carreras';
     protected $fillable = ['carrera', 'nivel_id','abreviatura'];
}
