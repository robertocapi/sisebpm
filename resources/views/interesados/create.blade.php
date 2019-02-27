@extends('layout.principal')
@section('content')

                      

         
          
                    


                   <div class="panel">
                                <h3 class="panel-heading">Alta nuevo estatus</h3>
                                <div class="panel-body">
                                 {!! Form::open(['route' =>'interesados.store','method'=>'POST'])!!}
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
                                         {!!Form::label('sexo', 'Municipio', ['class' => 'control-label']);!!}
                                         {{ Form::text('Municipio', null, ['class' => 'form-control']) }}
                                        </div>

                                         <div class="form-group label-floating">
                                         {!!Form::label('interesado en:', 'interesado en:', ['class' => 'control-label']);!!}
                                       {!!Form::select('id_carrera',$carrerasr, null, ['placeholder' => 'Elige una Opción...'])!!}

                                        </div>

                                              {{ Form::hidden ('estatus','1', ['class' => 'form-control']) }}

                                        {!!Form::submit('Guardar',['class'=> 'btn btn-primary btn-outline']);!!}
                             {!! Form::close() !!}
                                </div>
                            </div>
                   
                


@stop

         
             