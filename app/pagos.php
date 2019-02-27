<?php

namespace impotlx;

use Illuminate\Database\Eloquent\Model;

class pagos extends Model
{
    //
 
               
    protected $table='pagos';
     protected $fillable = ['id_alumno', 'id_conceptopago','id_periodo','id_tipodeBecas', 'descuentoObtenido','montoconcepto','montoaPagar','fecha','realizadopor','observaciones','estatus'];

   

}
