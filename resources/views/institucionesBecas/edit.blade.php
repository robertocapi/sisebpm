@extends('layout.principal')
@section('content')





                   <div class="panel">
                      <h3>Editando: {{$institucionesBecasr->institucionesBecas}}</h3>
                                <div class="panel-body">
    {!! Form::model($institucionesBecasr, ['action' =>['institucionesBecasController@update',$institucionesBecasr->id],'method'=>'PATCH'])!!}
                              <div class="form-group label-floating">

                                  <label class="control-label">Nombre institucionesBecas</label>
                                              {{ Form::text('nombre', null, ['class' => 'form-control']) }}
                                        </div>

                                        <div class="form-group label-floating">

                                            <label class="control-label">Nombre contacto</label>
                                                        {{ Form::text('nombre_contacto', null, ['class' => 'form-control']) }}
                                                  </div>


                                        <label class="control-label">Numero contacto</label>
                                                    {{ Form::text('numero_contacto', null, ['class' => 'form-control']) }}
                                              </div>


                                        {!!Form::submit('Modificar',['class'=> 'btn btn-primary btn-outline']);!!}
                             {!! Form::close() !!}



                                </div>
                            </div>

@stop
