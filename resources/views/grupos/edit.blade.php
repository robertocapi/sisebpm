@extends('layout.principal')
@section('content')






                   <div class="panel">

                                <h1>Editando el Grupo: {{$gruposr->nombre}}</h1>
                                <div class="panel-body">
    {!! Form::model($gruposr, ['action' =>['gruposController@update',$gruposr->id],'method'=>'PATCH'])!!}
                              <div class="form-group label-floating">
                                  <label class="control-label">Nombre materias</label>
                                              {{ Form::text('nombre', null, ['class' => 'form-control']) }}
                                        </div>

                                        <div class="form-group label-floating">
                                            <label class="control-label">Carrera</label>

                                                           {!!Form::select('carrera_id',$carrerasr)!!}
                                                  </div>

                                                  <div class="form-group label-floating">
                                                      <label class="control-label">ciclo_id</label>

                                                                     {!!Form::select('ciclo_id',$carrerasr)!!}
                                                            </div>

                                        <div class="form-group label-floating">

                                  <label class="control-label">dia</label>
                                  {!!Form::select('dia', ['Lunes' => 'Lunes', 'Martes' => 'Martes','Miercoles' => 'Miercoles','Jueves' => 'Jueves','Viernes' => 'Viernes','Sabado' => 'Sabado','Domingo' => 'Domingo'], null, ['placeholder' => 'Elige una Opción...']);!!}

                                        </div>
                                        <div class="form-group label-floating">
                                          <label class="control-label"> Turno</label>
                                           {!!Form::select('turno', ['Matutino' => 'Matutino', 'Vespertino' => 'Vespertino'], null, ['placeholder' => 'Elige una Opción...']);!!}
                                      </div>




                                        {!!Form::submit('Modificar',['class'=> 'btn btn-primary btn-outline']);!!}
                             {!! Form::close() !!}



                                </div>
                            </div>

@stop
