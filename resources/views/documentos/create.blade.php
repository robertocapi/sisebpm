@extends('layout.principal')
@section('content')

                      



                   <div class="panel">
                                <h3 class="panel-heading">Crear nuevo Documento</h3>
                                <div class="panel-body">
                                 {!! Form::open(['route' =>'documentos.store','method'=>'POST'])!!}
                                        <div class="form-group label-floating">
                                            <label class="control-label">Nombre documento</label>
                                              {{ Form::text('documento', null, ['class' => 'form-control']) }}
                                        </div>

                                              <div class="form-group label-floating">
                                          {!!Form::label('Programa academico', 'Programa academico', ['class' => 'control-label']);!!}
                                               {!!Form::select('programa_academico', ['Licenciatura' => 'Licenciatura', 'Maestria' => 'Maestria','Diplomado' => 'Diplomado','Cursos' => 'Cursos'], null, ['placeholder' => 'Elige una Opción...']);!!}
                                        </div>
                                      
                                           <div class="form-group label-floating">
                                          {!!Form::label('tipo documento', 'tipo documento', ['class' => 'control-label']);!!}
                                               {!!Form::select('tipo_documento', ['Original' => 'Original', 'Copia' => 'Copia'], null, ['placeholder' => 'Elige una Opción...']);!!}
                                        </div>




  {{ Form::hidden ('estatus','1', ['class' => 'form-control']) }}
                                     
                                        
                                        {!!Form::submit('Registrar',['class'=> 'btn btn-primary btn-outline']);!!}
                             {!! Form::close() !!}
                                </div>
                            </div>
                   
                






@stop

