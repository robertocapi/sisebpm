@extends('layout.principal')
@section('content')





                   <div class="panel">
                                <h3 class="panel-heading">Crear un Nuevo Tipo de Beca</h3>
                                <div class="panel-body">
                                 {!! Form::open(['route' =>'becas.store','method'=>'POST'])!!}
                                        <div class="form-group label-floating">
                                            <label class="control-label">Nivel</label>

                                                 {!!Form::select('nivel_id',$nivelesr)!!}
                                        </div>


                                        <div class="form-group label-floating">
                                        {!!Form::label('Concepto de Pago', 'Concepto de Pago', ['class' => 'control-label']);!!}

                                                      {!!Form::select('conceptosPagos_id',$conceptospagosr)!!}

                                        </div>
                                           <div class="form-group label-floating">
                                        {!!Form::label('Descuento en Porcentaje %', 'Descuento en Porcentaje %', ['class' => 'control-label']);!!}
                                               {{ Form::text('descuento', null, ['class' => 'form-control']) }}
                                        </div>


                                        {!!Form::submit('Guardar',['class'=> 'btn btn-primary btn-outline']);!!}
                             {!! Form::close() !!}
                                </div>
                            </div>









@stop
