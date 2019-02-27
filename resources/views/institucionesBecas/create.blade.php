@extends('layout.principal')
@section('content')

                      



                   <div class="panel">
                                <h3 class="panel-heading">Crear nueva Institucion</h3>
                                <div class="panel-body">
                                 {!! Form::open(['route' =>'institucionesBecas.store','method'=>'POST'])!!}
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                             {!!Form::label('Nombre Institucion', 'Nombre Institucion', ['class' => 'control-label']);!!}
                                              {{ Form::text('nombre', null, ['class' => 'form-control']) }}
                                        </div>
                                        
                                         
                                        <div class="form-group label-floating">
                                                      {!!Form::label('Nombre contacto', 'Nombre contacto', ['class' => 'control-label']);!!}
                                              {{ Form::text('nombre_contacto', null, ['class' => 'form-control']) }}
                                        </div>
                                             <div class="form-group label-floating">
                                                      {!!Form::label('Numero Contacto', 'Numero Contacto', ['class' => 'control-label']);!!}
                                                 {{ Form::text('numero_contacto', null, ['class' => 'form-control','id'=>'phone']) }}
                                        </div>
                                         
                                        {!!Form::submit('Guardar',['class'=> 'btn btn-primary btn-outline']);!!}
                             {!! Form::close() !!}
                                </div>
                            </div>
                   
                






@stop

