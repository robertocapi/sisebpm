@extends('layout.principal')
@section('content')





                   <div class="panel">
                                <h3 class="panel-heading">Crear nuevo Grupo</h3>
                                <div class="panel-body">
                                 {!! Form::open(['route' =>'grupos.store','method'=>'POST'])!!}
                                        <div class="form-group label-floating">
                                            <label class="control-label"> Nombre</label>
                                              {{ Form::text('nombre', null, ['class' => 'form-control']) }}
                                        </div>


                                          <div class="form-group label-floating">
                                       <label class="control-label"> Día</label>
                                               {!!Form::select('dia', ['Lunes' => 'Lunes', 'Martes' => 'Martes','Miercoles' => 'Miercoles','Jueves' => 'Jueves','Viernes' => 'Viernes','Sabado' => 'Sabado','Domingo' => 'Domingo'], null, ['placeholder' => 'Elige una Opción...']);!!}
                                        </div>

                                          <div class="form-group label-floating">
                                            <label class="control-label"> Turno</label>
                                             {!!Form::select('turno', ['Matutino' => 'Matutino', 'Vespertino' => 'Vespertino'], null, ['placeholder' => 'Elige una Opción...']);!!}
                                        </div>

                                          <div class="form-group label-floating">
                                            <label class="control-label"> Carrera</label>

                                                {!!Form::select('carrera_id',$carrerasr, null, ['placeholder' => 'Elige una Opción...'])!!}
                                        </div>
                                         <div class="form-group label-floating">
                                            <label class="control-label"> ciclos</label>
                                             {!!Form::select('ciclo_id',$ciclosr, null, ['placeholder' => 'Elige una Opción...'])!!}
                                        </div>




                                        {!!Form::submit('Guardar',['class'=> 'btn btn-primary btn-outline']);!!}
                             {!! Form::close() !!}
                                </div>
                            </div>








@stop
