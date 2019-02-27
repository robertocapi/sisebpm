<?php

namespace impotlx;

use Illuminate\Database\Eloquent\Model;

class consecutivos extends Model
{
    //
    protected $table='consecutivos';
     protected $fillable = ['nombre', 'id_consecutivo','consecutivo'];
}
