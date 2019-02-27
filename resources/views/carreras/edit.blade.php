@extends('layout.principal')
@section('content')





                   <div class="panel">
                      <h3>Editando: {{$carrerasr->carrera}}</h3>
                                <div class="panel-body">
    {!! Form::model($carrerasr, ['action' =>['carreracontroller@update',$carrerasr->id],'method'=>'PATCH'])!!}
                              <div class="form-group label-floating">

                                  <label class="control-label">Nombre carreras</label>
                                              {{ Form::text('carrera', null, ['class' => 'form-control']) }}
                                        </div>

                                        <div class="form-group label-floating">

                                  <label class="control-label"Tipo</label>
                                       {!!Form::select('tipo', ['Licenciatura' => 'Licenciatura', 'Maestria' => 'Maestria','Diplomado' => 'Diplomado','Cursos' => 'Cursos'], null, ['placeholder' => 'Elige una Opción...']);!!}
                                        </div>
                                        <label class="control-label">Abreviatura</label>
                                                    {{ Form::text('abreviatura', null, ['class' => 'form-control']) }}
                                              </div>


                                        {!!Form::submit('Modificar',['class'=> 'btn btn-primary btn-outline']);!!}
                             {!! Form::close() !!}



                                </div>
                            </div>

@stop
