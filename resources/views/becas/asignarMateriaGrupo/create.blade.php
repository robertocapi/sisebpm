@extends('layout.principal')
@section('content')



                   <div class="panel">
                                <h3 class="panel-heading">A
                                signar profesor a materia</h3>
                                <div class="panel-body">
                                 {!! Form::open(['route' =>'asignarmateriagrupo.store','method'=>'POST'])!!}
                      
<div class="form-group label-floating">
                                            <label class="control-label">Grupo</label>
                                             {!!Form::select('id_grupo',$gruposr, null, ['placeholder' => 'Elige una Opción...']);!!}
                                             
                                        </div>

                                        <div class="form-group label-floating">
                                            <label class="control-label">Materias abierta</label>
                                             {!!Form::select('id_materiaabierta',$materiasabir, null, ['placeholder' => 'Elige una Opción...']);!!}
                                             
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

