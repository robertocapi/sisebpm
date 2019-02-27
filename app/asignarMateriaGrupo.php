<?php

namespace impotlx;

use Illuminate\Database\Eloquent\Model;

class asignarMateriaGrupo extends Model
{
    //
    protected $table='asignarMateriaGrupo';
     protected $fillable = ['id_grupo', 'id_materiaabierta','observaciones','estatus'];
}
