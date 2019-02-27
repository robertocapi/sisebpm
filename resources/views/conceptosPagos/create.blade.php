@extends('layout.principal')
@section('content')

                      



                   <div class="panel">
                                <h3 class="panel-heading">Crear nuevo Concepto</h3>
                                <div class="panel-body">
                                 {!! Form::open(['route' =>'conceptoPago.store','method'=>'POST'])!!}
                                        <div class="form-group label-floating">
                                               {!!Form::label('concepto', 'concepto', ['class' => 'control-label']);!!}
                                              {{ Form::text('concepto', null, ['class' => 'form-control']) }}
                                        </div>
                                        
                                      
                                        <div class="form-group label-floating">
                                          {!!Form::label('Programa academico', 'Programa academico', ['class' => 'control-label']);!!}
                                               {!!Form::select('nivel', ['Licenciatura' => 'Licenciatura', 'Maestria' => 'Maestria','Diplomado' => 'Diplomado','Cursos' => 'Cursos'], null, ['placeholder' => 'Elige una Opción...']);!!}
                                        </div>
                                     
                                        
                                        <div class="form-group label-floating">
                                         {!!Form::label('monto', 'monto', ['class' => 'control-label']);!!}
 {{ Form::text('monto', null, ['class' => 'form-control']) }}
                                        </div>

                                        
                                         
                                        {!!Form::submit('Guardar',['class'=> 'btn btn-primary btn-outline']);!!}
                             {!! Form::close() !!}
                                </div>
                            </div>
                   
                






@stop

