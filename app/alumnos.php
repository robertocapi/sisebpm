<?php

namespace impotlx;

use Illuminate\Database\Eloquent\Model;

class alumnos extends Model
{
    //

 

    protected $table='alumnos';
       protected $fillable = ['nombre', 'ap_paterno', 'ap_materno','date_birthday','phone_house','phone_movil','email','sexo', 'nombre_contacto', 'matricula' ,'CURP','periodo','streetNumber','colonia','Municipio','Estado','zip_code','estado_civil','numerohome_contacto','numerocel_contacto','numerocel_contacto','nombreEmpresa','tel_oficina','dire_oficina','cargo','estatus','comoEntero','id_carrera','nacionalidad','lugarnacimiento','escuelaprocedencia','tipoescuela','entidadestudios','comoEnteroL'];


  

}
