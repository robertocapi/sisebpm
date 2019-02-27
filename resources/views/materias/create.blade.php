@extends('layout.principal')
@section('content')




                   <div class="panel">
                                <h3 class="panel-heading">Crear nueva materia</h3>
                                <div class="panel-body">
                                 {!! Form::open(['route' =>'materias.store','method'=>'POST'])!!}
                                        <div class="form-group label-floating">
                                            <label class="control-label">Carrera a la que pertenece</label>
                                                     {!!Form::select('carrera_id',$carrerasr)!!}
                                        </div>
                                          <div class="form-group label-floating">
                                            <label class="control-label">nombre de la materia</label>
                                              {{ Form::text('nombre', null, ['class' => 'form-control']) }}
                                        </div>

                                          <div class="form-group label-floating">
                                            <label class="control-label">Clave</label>
                                              {{ Form::text('clave', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group label-floating">
                                          <label class="control-label">Abreviatura</label>
                                            {{ Form::text('abreviatura', null, ['class' => 'form-control']) }}
                                      </div>

                                         <div class="form-group label-floating">
                                            <label class="control-label">Horas Docentes</label>
                                              {{ Form::text('horas_docentes', null, ['class' => 'form-control']) }}
                                        </div>

                                         <div class="form-group label-floating">
                                            <label class="control-label">Horas Independientes</label>
                                              {{ Form::text('horas_independientes', null, ['class' => 'form-control']) }}
                                        </div>
                                         <div class="form-group label-floating">
                                            <label class="control-label">Creditos</label>
                                              {{ Form::text('creditos', null, ['class' => 'form-control']) }}
                                        </div>



                                        {!!Form::submit('Guardar',['class'=> 'btn btn-primary btn-outline']);!!}
                             {!! Form::close() !!}
                                </div>
                            </div>








@stop
