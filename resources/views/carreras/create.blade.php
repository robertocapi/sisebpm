@extends('layout.principal')
@section('content')





                   <div class="panel">
                                <h3 class="panel-heading">Crear nueva carrera o curso</h3>
                                <div class="panel-body">
                                 {!! Form::open(['route' =>'carreras.store','method'=>'POST'])!!}
                                        <div class="form-group label-floating">
                                            <label class="control-label">Nombre Carrera o curso</label>
                                              {{ Form::text('carrera', null, ['class' => 'form-control']) }}
                                        </div>

                                         {!!Form::label('Programa academico', 'Programa academico', ['class' => 'control-label']);!!}
                                        <div class="form-group label-floating">
                                      

                                              {!!Form::select('nivel_id',$nivelesr)!!}

                                        </div>

                                             <div class="form-group label-floating">
                                            <label class="control-label">Abreviatura</label>
                                              {{ Form::text('abreviatura', null, ['class' => 'form-control']) }}
                                        </div>

                                        {!!Form::submit('Guardar',['class'=> 'btn btn-primary btn-outline']);!!}
                             {!! Form::close() !!}
                                </div>
                            </div>








@stop
