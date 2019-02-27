@extends('layout.principal')
@section('content')

                      



                   <div class="panel">
                                <h3 class="panel-heading">Crear nuevo Periodo</h3>
                                <div class="panel-body">
                                 {!! Form::open(['route' =>'periodo.store','method'=>'POST'])!!}
                                        <div class="form-group label-floating">
                                            <label class="control-label">Nombre Periodo</label>
                                              {{ Form::text('periodo', null, ['class' => 'form-control']) }}
                                        </div>
                                        {!!Form::label('fecha_inicio', 'Fecha Inicio', ['class' => 'control-label']);!!}
                                        <div class="form-group label-floating">
                                               {!!Form::date('fecha_inicio','null',['class'=>'form-control']);!!}
                                        </div>
                                         {!!Form::label('fecha_fin', 'Fecha Fin', ['class' => 'control-label']);!!}
                                        <div class="form-group label-floating">
                                            {!!Form::date('fecha_fin',null,['class'=>'form-control']);!!}
                                        </div>
  {{ Form::hidden ('estatus','1', ['class' => 'form-control']) }}
                                     
                                        
                                        {!!Form::submit('Registrar',['class'=> 'btn btn-primary btn-outline']);!!}
                             {!! Form::close() !!}
                                </div>
                            </div>
                   
                






@stop

