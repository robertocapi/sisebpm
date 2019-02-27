@extends('layout.principal')
@section('content')

                      



                   <div class="panel">
                                <h3 class="panel-heading">Alta nuevo profesor</h3>
                                <div class="panel-body">
                                 {!! Form::open(['route' =>'profesores.store','method'=>'POST'])!!}
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
                                         {!!Form::label('Titulo', 'Titulo', ['class' => 'control-label']);!!}
                                               {!!Form::select('titulo', ['Licenciatura' => 'Licenciatura', 'Maestria' => 'Maestria','Doctorado' => 'Doctorado'], null, ['placeholder' => 'Elige una Opción...']);!!}
                                        </div>
                                          <div class="form-group label-floating">
                                         {!!Form::label('Telefono', 'Telefono', ['class' => 'control-label']);!!}
                                         {{ Form::text('telefono', null, ['class' => 'form-control','id'=>'phone']) }}
                                      
                                        </div>
                                           <div class="form-group label-floating">
                                         {!!Form::label('facebook', 'Facebook', ['class' => 'control-label']);!!}
                                         {{ Form::text('facebook', null, ['class' => 'form-control']) }}
                                      
                                        </div>
                                         <div class="form-group label-floating">
                                         {!!Form::label('email', 'E-mail', ['class' => 'control-label']);!!}
                                         {{ Form::email('email', null, ['class' => 'form-control']) }}
                                      
                                        </div>
                                         <div class="form-group label-floating">
                                         {!!Form::label('costo_hora', 'Costo por hora', ['class' => 'control-label']);!!}
                                         {{ Form::text('costo_hora', null, ['class' => 'form-control']) }}
                                        </div>
                                          <div class="form-group label-floating">
                                         {!!Form::label('viaticos', 'viaticos', ['class' => 'control-label']);!!}
                                         {{ Form::text('viaticos', null, ['class' => 'form-control']) }}
                                        </div>


                                        {!!Form::submit('Guardar',['class'=> 'btn btn-primary btn-outline']);!!}
                             {!! Form::close() !!}
                                </div>
                            </div>
                   
                


@stop

         
             