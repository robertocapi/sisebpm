<?php

namespace impotlx;

use Illuminate\Database\Eloquent\Model;

class conceptosPagos extends Model
{
    //
    protected $table='conceptosPagos';
     protected $fillable = ['concepto', 'monto','nivel'];
}
