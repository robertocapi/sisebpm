<?php

namespace impotlx;

use Illuminate\Database\Eloquent\Model;

class documentos extends Model
{
    //
    protected $table='documentos';
     protected $fillable = ['documento', 'programa_academico','estatus','tipo_documento'];


      
}
