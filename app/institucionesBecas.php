<?php

namespace impotlx;

use Illuminate\Database\Eloquent\Model;

class institucionesBecas extends Model
{
    //
      protected $table='institucionesBecas';
     protected $fillable = ['nombre', 'nombre_contacto','numero_contacto'];
}
