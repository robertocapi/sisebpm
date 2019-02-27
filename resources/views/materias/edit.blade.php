@extends('layout.principal')
@section('content')





                   <div class="panel">

                                <h1>Editando Materia: {{$materiasr->nombre}}</h1>
                                <div class="panel-body">
    {!! Form::model($materiasr, ['action' =>['materiasController@update',$materiasr->id],'method'=>'PATCH'])!!}
                              <div class="form-group label-floating">
                                  <label class="control-label">Nombre materias</label>
                                              {{ Form::text('nombre', null, ['class' => 'form-control']) }}
                                        </div>

                                        <div class="form-group label-floating">
                                            <label class="control-label">Carrera</label>

                                                           {!!Form::select('carrera_id',$carrerasr)!!}
                                                  </div>

                                        <div class="form-group label-floating">

                                  <label class="control-label">clave</label>
                                              {{ Form::text('clave', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group label-floating">

                                  <label class="control-label">Horas docentes</label>
                                              {{ Form::text('horas_docentes', null, ['class' => 'form-control']) }}
                                        </div>

                                        <div class="form-group label-floating">
  <label class="control-label">horas_independientes</label>
                                              {{ Form::text('Horas independientes', null, ['class' => 'form-control']) }}
                                        </div>

                                        <div class="form-group label-floating">
  <label class="control-label">creditos</label>
                                              {{ Form::text('creditos', null, ['class' => 'form-control']) }}
                                        </div>




                                        {!!Form::submit('Modificar',['class'=> 'btn btn-primary btn-outline']);!!}
                             {!! Form::close() !!}



                                </div>
                            </div>

@stop
