<?php

namespace impotlx;

use Illuminate\Database\Eloquent\Model;

class profesores extends Model
{
    //
    protected $table='profesores';
     protected $fillable = ['nombre', 'ap_paterno', 'ap_materno','titulo','telefono','email','facebook','costo_hora','viaticos'];

}
