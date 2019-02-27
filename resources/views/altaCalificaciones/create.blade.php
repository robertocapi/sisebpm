@extends('layout.principal')
@section('content')



                   <div class="panel">
                                <h3 class="panel-heading">Alta de calificaciones</h3>
                                <div class="panel-body">
                                 {!! Form::open(['route' =>'alumnoaGrupo.store','method'=>'POST'])!!}
                      
<div class="form-group label-floating">
                                            <label class="control-label">Alumnos</label>
                                             {!!Form::select('id_alumno',$alumnosr, null, ['placeholder' => 'Elige una Opción...']);!!}
                                             
                                        </div>

                                        <div class="form-group label-floating">
                                            <label class="control-label">Periodo</label>
                                             {!!Form::select('id_periodo',$periodor, null, ['placeholder' => 'Elige una Opción...']);!!}
                                             
                                        </div>

                                        <div class="form-group label-floating">
                                            <label class="control-label">Grupo</label>
                                             {!!Form::select('id_grupo',$gruposr, null, ['placeholder' => 'Elige una Opción...']);!!}
                                             
                                        </div>



     <div class="form-group label-floating">
                                             {!!Form::label('Observaciones', 'Observaciones', ['class' => 'control-label']);!!}
                                              {{ Form::text('observaciones', null, ['class' => 'form-control']) }}
                                        </div>
                                        


                                        
                                     
                                        
                                        {!!Form::submit('Registrar',['class'=> 'btn btn-primary btn-outline']);!!}
                             {!! Form::close() !!}
                                </div>
                            </div>
                   
                






@stop

