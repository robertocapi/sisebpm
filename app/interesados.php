<?php

namespace impotlx;

use Illuminate\Database\Eloquent\Model;

class interesados extends Model
{
    //
      protected $table='interesados';
       protected $fillable = ['nombre', 'ap_paterno', 'ap_materno','date_birthday','phone_house','phone_movil','email','sexo','estatus','id_carrera'];
}
