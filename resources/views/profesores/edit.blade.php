@extends('layout.principal')
@section('content')






                   <div class="panel">


                                <div class="panel-body">
                                    <h3>Editando Materia: {{$profesoresr->nombre}}</h3>
    {!! Form::model($profesoresr, ['action' =>['profesoresController@update',$profesoresr->id],'method'=>'PATCH'])!!}
                              <div class="form-group label-floating">
                                  <label class="control-label">Nombre materias</label>
                                              {{ Form::text('nombre', null, ['class' => 'form-control']) }}
                                        </div>

                                        <div class="form-group label-floating">
                                            <label class="control-label">Apellido paterno</label>
  {{ Form::text('ap_paterno', null, ['class' => 'form-control']) }}

                                                  </div>

                                        <div class="form-group label-floating">

                                  <label class="control-label">Apellido materno</label>
                                              {{ Form::text('ap_materno', null, ['class' => 'form-control']) }}
                                        </div>

                                        <div class="form-group label-floating">

                                  <label class="control-label">Titulo</label>
                                         {!!Form::select('titulo', ['Licenciatura' => 'Licenciatura', 'Maestria' => 'Maestria','Doctorado' => 'Doctorado'], null, ['placeholder' => 'Elige una Opción...']);!!}
                                        </div>
                                        <div class="form-group label-floating">

                                  <label class="control-label">Telefono</label>
                                              {{ Form::text('telefono', null, ['class' => 'form-control']) }}
                                        </div>

                                        <div class="form-group label-floating">
  <label class="control-label">Email</label>
                                              {{ Form::text('email', null, ['class' => 'form-control']) }}
                                        </div>

                                        <div class="form-group label-floating">
  <label class="control-label">Facebook</label>
                                              {{ Form::text('facebook', null, ['class' => 'form-control']) }}
                                        </div>


                                        <div class="form-group label-floating">
                                  <label class="control-label">Costo hora</label>
                                              {{ Form::text('costo_hora', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group label-floating">
                                  <label class="control-label">viaticos</label>
                                              {{ Form::text('viaticos', null, ['class' => 'form-control']) }}
                                        </div>

                                        {!!Form::submit('Modificar',['class'=> 'btn btn-primary btn-outline']);!!}
                             {!! Form::close() !!}



                                </div>
                            </div>

@stop
