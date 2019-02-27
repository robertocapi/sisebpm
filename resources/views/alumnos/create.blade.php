@extends('layout.principal')
@section('content')



            <div class="content">
                <div class="container-fluid">
                    <!--      Wizard container        -->
                    <div class="wizard-container">
                        <div class="card wizard-card" data-color="primary" id="wizardProfile">
                        {!! Form::open(['route' =>'alumnos.store','method'=>'POST'])!!}
                                <!--  You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"   -->
                                <div class="wizard-header">
                                    <h3 class="wizard-title">
                                            Solicitud de inscripción
                                        </h3>
                                    <h5>Su información nos dejará saber más sobre usted.</h5>
                                </div>
                                <div class="wizard-navigation">
                                    <ul>
                                        <li>
                                            <a href="#about" data-toggle="tab">Datos personales</a>
                                        </li>
                                        <li>
                                            <a href="#account" data-toggle="tab">Estudio y Trabajo</a>
                                        </li>
                                        <li>
                                            <a href="#address" data-toggle="tab">Otros</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane" id="about">
                                        <div class="row">
                                            <h4 class="info-text"> Información personal</h4>
                                            <div class="col-md-6 col-sm-offset-1">
                                            
                                            </div>
                                            <div class="col-sm-6">

                                             <div class="input-group">
                                                    <span class="input-group-addon">
                                                            <i class="fa  fa-bookmark"></i>
                                                        </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Carrera que desea Inscribirse
                                                            <small>(required)</small>
                                                        </label>
                                                
                                                           {!!Form::select('id_carrera',$carrerasr, null, ['placeholder' => 'Elige una Opción...']);!!}
                                                    </div>
                                                </div>
                                                  <div class="input-group">
                                                    <span class="input-group-addon">
                                                            <i class="fa  fa-certificate"></i>
                                                        </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Periodo que desea Inscribirse
                                                            <small>(required)</small>
                                                        </label>
                                                            {!!Form::select('periodo',$periodosr, null, ['placeholder' => 'Elige una Opción...']);!!}
                                                    </div>
                                                </div>


   <div class="input-group">
      <span class="input-group-addon">
                                                            <i class="fa address-card"></i>
                                                        </span>
    <div class="form-group">
                                                <label class="control-label mb-10">Nombre Completo</label>
                                           
                                                  <div class="row">
  
  
                                            
                                            <div class="col-sm-10">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group label-floating is-empty">
                                                            <label class="control-label"></label>
                                                          
                        {!! Form::text('nombre', null,  array('required','class'=>'form-control', 'placeholder'=>'Nombre(s)')) !!}
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group label-floating is-empty">
                                                            <label class="control-label"></label>
                                                             {{ Form::text('ap_paterno', null, array('required','class'=>'form-control', 'placeholder'=>'Paterno')) }}
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-group label-floating is-empty">
                                                            <label class="control-label"></label>
                                                              {{ Form::text('ap_materno', null, array('required','class'=>'form-control', 'placeholder'=>'Materno')) }}
                                                        </div>
                                                                         </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>

     </div>






   <div class="input-group">
      <span class="input-group-addon">
                                                            <i class="fa fa-calendar"></i>
                                                        </span>
    <div class="form-group">
                                                <label class="control-label mb-10">Fecha de nacimiento</label>
                                           
                                                   {{ Form::date('date_birthday', null, ['class' => 'form-control']) }}
                                                <span class="help-block">dd/mm/yyyy</span>
                                            </div>

     </div>
  <div class="input-group">
      <span class="input-group-addon">
                                                            <i class="fa  fa-circle-o-notch"></i>
                                                        </span>
    <div class="form-group">
                                                <label class="control-label mb-10">Estado Civil</label>
                                           
                                                    {!!Form::select('estado_civil', ['Solter(a)' => 'Solter(a)', 'Casad(a)' => 'Casad(a)','Union libre' => 'Union libre','Divorciad(a)' => 'Divorciad(a)'], null, ['placeholder' => 'Elige una Opción...']);!!}
                                              
                                            </div>

     </div>

     <div class="input-group">
                                                    <span class="input-group-addon">
                                                            <i class="fa  fa-book"></i>
                                                        </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">CURP
                                                            <small>(required)</small>
                                                        </label>
                                                      
                                                        {{ Form::text('CURP', null, ['class' => 'form-control']) }}
                                                    </div>
                                                </div>
  <div class="input-group">
                                                    <span class="input-group-addon">
                                                            <i class="fa  fa-flag-o"></i>
                                                        </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Lugar de Nacimiento
                                                            <small>(required)</small>
                                                        </label>
                                                         {{ Form::text('lugarnacimiento', null, ['class' => 'form-control']) }}
                                            
                                                    </div>
                                                </div>


                                                  <div class="input-group">
                                                    <span class="input-group-addon">
                                                            <i class="fa  fa-flag"></i>
                                                        </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Nacionalidad
                                                            <small>(required)</small>
                                                        </label>
                                                      
                                                         {{ Form::text('nacionalidad', null, ['class' => 'form-control']) }}
                                                    </div>
                                                </div>


                                                    <div class="input-group">
                                                    <span class="input-group-addon">
                                                            <i class="fa fa-envelope-o"></i>
                                                        </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Sexo
                                                            <small>(required)</small>
                                                        </label>
                                                      
                                                          {!!Form::select('sexo', ['Masculino' => 'Masculino', 'Femenino' => 'Femenino'], null, ['placeholder' => 'Elige una Opción...']);!!}
                                                    </div>
                                                </div>


                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                            <i class="fa  fa-phone"></i>
                                                        </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Telefono de Casa
                                                        </label>
                                                         {{ Form::text('phone_house',null, ['class' => 'form-control','id'=>'phone']) }}
                                                    </div>
                                                </div>
  <div class="input-group">
                                                    <span class="input-group-addon">
                                                            <i class="fa   fa-mobile"></i>
                                                        </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Telefono de Celular
                                                        </label>
                                                         {{ Form::text('phone_movil', null, ['class' => 'form-control','id'=>'phone']) }}
                                                    </div>
                                                </div>

     <div class="input-group">
                                                    <span class="input-group-addon">
                                                            <i class="fa fa-envelope-o"></i>
                                                        </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Email
                                                            <small>(required)</small>
                                                        </label>
                                                      
                                                         {{ Form::email('email', null, ['class' => 'form-control','id'=>'email']) }}
                                                    </div>
                                                </div>

 <div class="input-group">
      <span class="input-group-addon">
                                                            <i class="fa  fa-building"></i>
                                                        </span>
    <div class="form-group">
                                                <label class="control-label mb-10">Domicilio Particular</label>
                                           
                                                  <div class="row">
  
  
                                            
                                            <div class="col-sm-10">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="form-group label-floating is-empty">
                                                            <label class="control-label"></label>
                                                          
                         {{ Form::text('streetNumber', null, array('required','class'=>'form-control', 'placeholder'=>'Calle y Numero')) }}

                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group label-floating is-empty">
                                                            <label class="control-label"></label>
                                                             {{ Form::text('colonia', null, array('required','class'=>'form-control', 'placeholder'=>'Colonia')) }}
                                                              


                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-group label-floating is-empty">
                                                            <label class="control-label"></label>
                                                              {{ Form::text('Municipio', null, array('required','class'=>'form-control', 'placeholder'=>'Municipio')) }}

                                                          
                                                        </div>
                                                                         </div>
                                                                             <div class="col-md-5">
                                                        <div class="form-group label-floating is-empty">
                                                            <label class="control-label"></label>
                                                               
                                                 {!!Form::select('Estado', ['
Aguascalientes' => 'Aguascalientes', 
'Baja California' => 'Baja California',
'Baja California Sur' => 'Baja California Sur',
'Chiapas ' => 'Chiapas ',
'Chihuahua ' => 'Chihuahua ',
'Coahuila' => 'Coahuila ',
'Colima ' => 'Colima ',
'Distrito Federal ' => 'Distrito Federal ',
'Durango ' => 'Durango ',
'Estado de México  ' => 'Estado de México  ',
'Guanajuato ' => 'Guanajuato ',
'Hidalgo  ' => 'Hidalgo  ',
'Jalisco' => 'Jalisco',
'Michoacán ' => 'Michoacán ',
'Morelos ' => 'Morelos',
'Nayarit ' => 'Nayarit ',
'Nuevo León ' => 'Nuevo León',
'Oaxaca ' => 'Oaxaca ',
'Puebla ' => 'Puebla ',
'Querétaro ' => 'Querétaro ',
'Quintana Roo  ' => 'Quintana Roo  ',
'San Luis Potosí ' => 'San Luis Potosí',
'Sinaloa ' => 'Sinaloa ',
'Sonora ' => 'Sonora ',
'Tabasco ' => 'Tabasco ',
'Tamaulipas ' => 'Tamaulipas',
'Tlaxcala ' => 'Tlaxcala ',
'Veracruz ' => 'Veracruz ',
'Yucatán ' => 'Yucatán ',
'Zacatecas ' => 'Zacatecas ',
], null, ['placeholder' => 'Elige una estado...']);!!}

                                                          
                                                        </div>
                                                                         </div>
                                                                              <div class="col-md-5">
                                                        <div class="form-group label-floating is-empty">
                                                            <label class="control-label"></label>
                                                              {{ Form::text('zip_code', null, array('required','class'=>'form-control', 'placeholder'=>'Codigo postal')) }}

                                                          
                                                        </div>
                                                                         </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>

     </div>





                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="account">
                                        <h4 class="info-text"> Datos de escuela y trabajo </h4>
                                        <div class="row">

  <div class="input-group">
                                                    <span class="input-group-addon">
                                                            <i class="fa  fa-flag"></i>
                                                        </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Esculea procedencia
                                                            <small>(required)</small>
                                                        </label>
                                                      
                                                           {{ Form::text('escuelaprocedencia', null, ['class' => 'form-control']) }}
                                                    </div>
                                                </div>

                                                  <div class="input-group">
                                                    <span class="input-group-addon">
                                                            <i class="fa  fa-flag"></i>
                                                        </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Tipo de escuela
                                                            <small>(required)</small>
                                                        </label>
                                                      
                                                           {!!Form::select('tipoescuela', ['privada' => 'Privada', 'Publica' => 'Publica'], null, ['placeholder' => 'Elige una Opción...']);!!}
                                                    </div>
                                                </div>
 <div class="input-group">
                                                    <span class="input-group-addon">
                                                            <i class="fa  fa-flag-o"></i>
                                                        </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Entidad donde se realizaron los estudios
                                                            <small>(required)</small>
                                                        </label>

                                                         {{ Form::text('entidadestudios', null, ['class' => 'form-control']) }}
                                            
                                                    </div>
                                                </div>




   <div class="input-group">
      <span class="input-group-addon">
                                                            <i class="fa address-card"></i>
                                                        </span>
    <div class="form-group">
                                                <label class="control-label mb-10">Empresa que trabajas </label>
                                           
                                                  <div class="row">
  
  
                                            
                                            <div class="col-sm-10">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group label-floating is-empty">
                                                            <label class="control-label"></label>
                                                          
                        {!! Form::text('nombreEmpresa', null,  array('class'=>'form-control', 'placeholder'=>'Nombre de la empresas')) !!}
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group label-floating is-empty">
                                                            <label class="control-label"></label>
                                                             {{ Form::text('dire_oficina', null, array('class'=>'form-control', 'placeholder'=>'Dirrecion empresa')) }}

                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-group label-floating is-empty">
                                                            <label class="control-label"></label>
                                                              {{ Form::text('tel_oficina', null, array('class'=>'form-control', 'placeholder'=>'Telefono oficina')) }}

                                                            
                                                        </div>
                                                                         </div>
                                                                           <div class="col-md-5">
                                                        <div class="form-group label-floating is-empty">
                                                            <label class="control-label"></label>
                                                              {{ Form::text('cargo', null, array('class'=>'form-control', 'placeholder'=>'Cargo o puesto')) }}

                                                            
                                                        </div>
                                                                         </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>

     </div>





                                          
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="address">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4 class="info-text"> Datos de emergencia y mas.? </h4>
                                     
   <div class="input-group">
      <span class="input-group-addon">
                                                            <i class="fa address-card"></i>
                                                        </span>
    <div class="form-group">
                                                <label class="control-label mb-10">En caso de emergencia notificar a:</label>
                                           
                                                  <div class="row">
  
  
                                            
                                            <div class="col-sm-10">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group label-floating is-empty">
                                                            <label class="control-label"></label>
                                                          
                        {!! Form::text('nombre_contacto', null,  array('required','class'=>'form-control', 'placeholder'=>'Notificar a:')) !!}

                   
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group label-floating is-empty">
                                                            <label class="control-label"></label>
                                                             {{ Form::text('numerohome_contacto', null, array('required','class'=>'form-control', 'placeholder'=>'Telefono de casa')) }}

                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-group label-floating is-empty">
                                                            <label class="control-label"></label>
                                                              {{ Form::text('numerocel_contacto', null, array('required','class'=>'form-control', 'placeholder'=>'Celular Contacto')) }}

                                                        </div>
                                                                         </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>

     </div>

     <div class="input-group">
                                                    <span class="input-group-addon">
                                                            <i class="fa  fa-book"></i>
                                                        </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Como se entero de la licenciatura:
                                                            <small>(required)</small>
                                                        </label>
                                                      
                                                        {{ Form::text('comoEnteroL', null, ['class' => 'form-control']) }}
                                                    </div>
                                                </div>
                                                     <div class="input-group">
                                                    <span class="input-group-addon">
                                                            <i class="fa  fa-book"></i>
                                                        </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Por que medio se entero:
                                                            <small>(required)</small>
                                                        </label>
                                                      
                                                     {!!Form::select('comoEntero', ['RADIO' => 'RADIO', 'ESPECTACULAR' => 'ESPECTACULAR','FOLLLETO' => 'FOLLETO','CARTEL' => 'CARTEL','EMAIL' => 'EMAIL','MANTA' => 'MANTA','TELEVISIÓN' => 'TELEVISIÓN','REVISTA' => 'REVISTA','INTERNETE' => 'INTERNET','ANUNCIO FACHADA' => 'ANUNCIO FACHADA'], null, ['placeholder' => 'Elige una Opción...']);!!}
                                                    </div>
                                                </div>
                                                 
 
                                                </div>


                                      

                                        </div>
                                    </div>
                                </div>
                                <div class="wizard-footer">
                                    <div class="pull-right">
                                        <input type='button' class='btn btn-next btn-primary' name='next' value='Next' />
                                       
                                        {!!Form::submit('finish',['class'=> 'btn btn-finish btn-primary']);!!}
                                    </div>
                                    <div class="pull-left">
                                        <input type='button' class='btn btn-previous btn-primary' name='previous' value='Previous' />
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

     
                 
                        </div>
                    </div>
 
                    <!-- wizard container -->
                </div>
{{ Form::hidden ('estatus','1', ['class' => 'form-control']) }}
                <!-- /.content -->
                     {!! Form::close() !!}
            </div>
        </div>




@stop

