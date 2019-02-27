@extends('layout.principal')
@section('content')

<h1>Editar usuario: {{$users->name}}</h1>


                   <div class="panel">
                                <h3 class="panel-heading">Basic Form</h3>
                                <div class="panel-body">
                  {!! Form::model($users , ['action' =>['usuariocontrol@update',$users->id],'method'=>'PATCH'])!!}
                                        <div class="form-group label-floating">

                                            <label class="control-label">User Name</label>
                                              {{ Form::text('name', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group label-floating">
                                           
                                              {!!Form::label('email', 'E-Mail Address', ['class' => 'control-label']);!!}
                                               {!!Form::email('email',null,['class'=>'form-control']);!!}
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Password</label>
                                  {!!Form::password('password',['class'=>'form-control']);!!}
                                        </div>
                                   
                                        {!!Form::submit('Modificar',['class'=> 'btn btn-primary btn-outline']);!!}
                             {!! Form::close() !!}


                             
                                </div>
                            </div>

@stop
