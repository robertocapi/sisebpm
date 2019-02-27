<?php

namespace impotlx;

use Illuminate\Database\Eloquent\Model;

class becas extends Model
{
    //

        protected $table='becas';
     protected $fillable = ['nivel_id', 'conceptosPagos_id', 'descuento'];



}
