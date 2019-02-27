@extends('layout.principal')
@section('content')





                   <div class="panel">
                      <h3>Editando: {{$becasr->id}}</h3>
                                <div class="panel-body">
    {!! Form::model($becasr, ['action' =>['becasController@update',$becasr->id],'method'=>'PATCH'])!!}


                                        <div class="form-group label-floating">

                                  <label class="control-label">Nivel</label>
                                          {!!Form::select('nivel_id',$nivelesr)!!}
                                        </div>

                                        <div class="form-group label-floating">

                                  <label class="control-label">Concepto de Pago</label>
                                          {!!Form::select('conceptosPagos_id',$conceptospagosr)!!}
                                        </div>


                                        <label class="control-label">Descuentos</label>
                                                    {{ Form::text('descuento', null, ['class' => 'form-control']) }}
                                              </div>


                                        {!!Form::submit('Modificar',['class'=> 'btn btn-primary btn-outline']);!!}
                             {!! Form::close() !!}



                                </div>
                            </div>

@stop
