@extends('layout.principal')
@section('content')




                   <div class="panel">
                          <h3>Editando ciclo: {{$ciclosr->ciclos}}</h3>
                                <div class="panel-body">
    {!! Form::model($ciclosr, ['action' =>['ciclosController@update',$ciclosr->id],'method'=>'PATCH'])!!}
                              <div class="form-group label-floating">

                                  <label class="control-label">Nombre ciclos</label>
                                              {{ Form::text('ciclos', null, ['class' => 'form-control']) }}
                                        </div>

                                        <div class="form-group label-floating">

                                  <label class="control-label">Estatus</label>
                                              {{ Form::text('estatus', null, ['class' => 'form-control']) }}
                                        </div>



                                        {!!Form::submit('Modificar',['class'=> 'btn btn-primary btn-outline']);!!}
                             {!! Form::close() !!}



                                </div>
                            </div>

@stop
