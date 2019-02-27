<?php

namespace impotlx;

use Illuminate\Database\Eloquent\Model;

class facturacion extends Model
{
    //
        protected $table='facturacion';
     protected $fillable = ['razonsocialfac', 'regimen', 'dire_factura','rfc_factu','id_alumno','estatus'];

}
