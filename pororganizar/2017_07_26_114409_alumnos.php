<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Alumnos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('alumnos', function (Blueprint $table) {
            $table->increments('id');
              $table->string('nombre');
            $table->string('ap_paterno');
             $table->string('ap_materno');     
             $table->date('date_birthday');
             $table->string('phone_house');    
              $table->string('phone_movil'); 
               $table->string('email');  
                    $table->string('sexo');   
            $table->string('nombre_contacto');
                  $table->string('matricula'); 
                       $table->string('CURP');
                       $table->string('periodo'); 
                          $table->string('streetNumber');  
                         $table->string('colonia'); 
                              $table->string('Municipio');  
                                $table->string('Estado'); 
                                  $table->string('zip_code');  
                                        $table->string('estado_civil');


                                           $table->string('nacionalidad');
                                             $table->string('lugarnacimiento');
                                               $table->string('escuelaprocedencia');
                                                    $table->string('tipoescuela');
                                             $table->string(' entidadestudios');
                                                $table->string('comoEnteroL'); 
                                                     $table->string('razonsocialfac'); 
                                                          $table->string('dire_factura'); 
                                                               $table->string('rfc_factu'); 
                                                                $table->string('LicactaOriginal'); 
                                                $table->string('LicCertificadoTotalOriginal'); 
                                                          $table->string('Lic6fotografias'); 
                                                            $table->string('LicCurpOriginal');  
                                                          $table->string('LicExposicionMotivos'); 
                                                                $table->string('LicReglamentos'); 
                                                                $table->string('LicSolicitud'); 
                                                        $table->string('LicActanacimientCopia'); 
                                                      $table->string('LicCertificadoTotalCopia'); 
                                                                $table->string('LicINE'); 
                                                             $table->string('LicCurp'); 
                                                        $table->string('LicCartaExposicionCopia');
                                                            $table->string('LicReglamentoCopia'); 
                                                           $table->string('LicsolicitudoCopia'); 
$table->string('MaestActaNacimiento'); 
        $table->string('MaestCertificadoLicenciatura'); 
            $table->string('Maest6fotografia'); 
                $table->string('MaestCurp'); 
                    $table->string('MaestCartaExposicion'); 
                  $table->string('MaestCurriculum'); 
                            $table->string('MaestSolicitudIns'); 
                                $table->string('MaestActaNacimientoCopia'); 
                                    $table->string('MaestCertificadoLicenciaturaCopia'); 
                                        $table->string('MaestTitulocopia'); 
                                            $table->string('MaestCurpCopia'); 
                                                $table->string('MaestCedulaCopia');
                                                 $table->string('MaestINE'); 
                                                  $table->string('MaestSolicitudInsCopia');  



 $table->string('numerohome_contacto'); 
              $table->string('numerocel_contacto'); 
                $table->string('nombreEmpresa'); 
                  $table->string('tel_oficina'); 
                  $table->string('dire_oficina'); 
                        $table->string('cargo'); 
                             $table->integer('estatus'); 
                          $table->string('comoEntero'); 
                          $table->integer('id_carrera'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
