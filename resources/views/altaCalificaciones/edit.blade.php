@extends('layout.principal')
@section('content')

<h3>Editar Alumnos inscrito:  {{$alumnoss->nombre}} {{$alumnoss->ap_paterno}} {{$alumnoss->ap_materno}}</h3>


 <div class="panel">
                                <h3 class="panel-heading">Inscribir nuevo Alumno</h3>
                                
                                  {!! Form::model($alumnoss , ['action' =>['alumnosController@update',$alumnoss->id],'method'=>'PATCH'])!!}
                      
     <div class="form-group label-floating">
                                             {!!Form::label('Nombre(s)', 'Nombre(s)', ['class' => 'control-label']);!!}
                                              {{ Form::text('nombre', null, ['class' => 'form-control']) }}
                                        </div>
                                         <div class="form-group label-floating">
                                             {!!Form::label('Apellido Paterno', 'Apellido Paterno', ['class' => 'control-label']);!!}
                                              {{ Form::text('ap_paterno', null, ['class' => 'form-control']) }}
                                        </div>
                                          <div class="form-group label-floating">
                                             {!!Form::label('Apellido Materno', 'Apellido Materno', ['class' => 'control-label']);!!}
                                              {{ Form::text('ap_materno', null, ['class' => 'form-control']) }}
                                        </div>

 
                                          <div class="form-group label-floating">
                                       
                                         {{ Form::date('date_birthday', null, ['class' => 'form-control']) }}
                                      
                                        </div>

 <div class="form-group label-floating">
                                         {!!Form::label('Telefono Casa', 'Telefono Casa', ['class' => 'control-label']);!!}
                                         {{ Form::text('phone_house',null, ['class' => 'form-control','id'=>'phone']) }}
                                      
                                        </div>
                                        <div class="form-group label-floating">
                                         {!!Form::label('Telefono Celular', 'Telefono Celular', ['class' => 'control-label']);!!}
                                         {{ Form::text('phone_movil', null, ['class' => 'form-control','id'=>'phone']) }}
                                      
                                        </div>

                                        
                                    
                                      
                                  
                                         <div class="form-group label-floating">
                                         {!!Form::label('email', 'E-mail', ['class' => 'control-label']);!!}
                                         {{ Form::email('email', null, ['class' => 'form-control','id'=>'phone']) }}
                                      
                                        </div>
                                             

                                         <div class="form-group label-floating">
                                         {!!Form::label('sexo', 'Sexo', ['class' => 'control-label']);!!}

                                            {!!Form::select('sexo', ['Masculino' => 'Masculino', 'Femenino' => 'Femenino'], null, ['placeholder' => 'Elige una Opción...']);!!}
                                        </div>
                                         


                          

                                          <div class="form-group label-floating">
                                            <label class="control-label">CURP</label>
                                              {{ Form::text('CURP', null, ['class' => 'form-control']) }}
                                        </div>
                                          <div class="form-group label-floating">
                                            <label class="control-label">Calle y numero</label>
                                              {{ Form::text('streetNumber', null, ['class' => 'form-control']) }}
                                        </div>
                                          <div class="form-group label-floating">
                                            <label class="control-label">colonia</label>
                                              {{ Form::text('colonia', null, ['class' => 'form-control']) }}
                                        </div>
                                         <div class="form-group label-floating">
                                            <label class="control-label">Municipio</label>
                                              {{ Form::text('Municipio', null, ['class' => 'form-control']) }}
                                        </div>
                                           <div class="form-group label-floating">
                                            <label class="control-label">Estado</label>
                                            
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
], null, ['placeholder' => 'Elige una Opción...']);!!}





                                        </div>
                                          <div class="form-group label-floating">
                                            <label class="control-label">Codigo postal</label>
                                              {{ Form::text('zip_code', null, ['class' => 'form-control']) }}
                                        </div>
                                         <div class="form-group label-floating">
                                            <label class="control-label">Estado civil</label>
                                          
                                               {!!Form::select('estado_civil', ['Solter(a)' => 'Solter(a)', 'Casad(a)' => 'Casad(a)','Union libre' => 'Union libre','Divorciad(a)' => 'Divorciad(a)'], null, ['placeholder' => 'Elige una Opción...']);!!}
                                        </div>
                                            
   <div class="form-group label-floating">
                                            <label class="control-label">Periodo</label>
                                             {!!Form::select('periodo',$periodosr, null, ['placeholder' => 'Elige una Opción...']);!!}
                                             
                                        </div>




                                        <div class="form-group label-floating">
                                            <label class="control-label">Nombre de contacto</label>
                                              {{ Form::text('nombre_contacto', null, ['class' => 'form-control']) }}
                                        </div>
                                          <div class="form-group label-floating">
                                            <label class="control-label">Numero de casa contacto</label>
                                              {{ Form::text('numerohome_contacto', null, ['class' => 'form-control']) }}
                                        </div>
                                         <div class="form-group label-floating">
                                            <label class="control-label">Numero de celular contacto</label>
                                              {{ Form::text('numerocel_contacto', null, ['class' => 'form-control']) }}
                                        </div>
                                           <div class="form-group label-floating">
                                            <label class="control-label">Nombre de la empresa</label>
                                              {{ Form::text('nombreEmpresa', null, ['class' => 'form-control']) }}
                                        </div>
                                            <div class="form-group label-floating">
                                            <label class="control-label">telefono de oficina</label>
                                              {{ Form::text('tel_oficina', null, ['class' => 'form-control','id'=>'phone']) }}
                                        </div>
                                         <div class="form-group label-floating">
                                            <label class="control-label">dirrecion de oficina</label>
                                              {{ Form::text('dire_oficina', null, ['class' => 'form-control']) }}
                                        </div>
                                           <div class="form-group label-floating">
                                            <label class="control-label">Cargo</label>
                                              {{ Form::text('cargo', null, ['class' => 'form-control']) }}
                                        </div>
                                         <div class="form-group label-floating">
                                            <label class="control-label">Generación</label>
                                              {{ Form::text('generacion', null, ['class' => 'form-control']) }}
                                        </div>
                                            <div class="form-group label-floating">
                                            <label class="control-label">Como se entero</label>
                                              {{ Form::text('', null, ['class' => 'form-control']) }}
    {!!Form::select('comoEntero', ['Facebook' => 'Facebook', 'Recomendacion' => 'Publicidad','Publicidad' => 'Email','Email' => 'Pagina web','Pagina web' => 'Recomendacion'], null, ['placeholder' => 'Elige una Opción...']);!!}













                                        </div>
                                           

   <div class="form-group label-floating">
                                            <label class="control-label">Carrera que desea inscribirse</label>
                                                     {!!Form::select('id_carrera',$carrerasr)!!}
                                        </div>

                                      
                                        {{ Form::hidden ('estatus','1', ['class' => 'form-control']) }}



                                        
                                     
                                        
                                        {!!Form::submit('Modificar',['class'=> 'btn btn-primary btn-outline']);!!}
                             {!! Form::close() !!}
                                </div>
                            </div>
                   





@stop