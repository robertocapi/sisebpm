@extends('layout.principal')
@section('content')

                      



                   <div class="panel">
                                <h3 class="panel-heading">Basic Form</h3>
                                <div class="panel-body">
                               {!! Form::open(['route' =>'usuario.store','method'=>'POST'])!!}
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
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="optionsCheckboxes"> Acepto los terminos
                                            </label>
                                        </div>
                                        {!!Form::submit('Registrar',['class'=> 'btn btn-primary btn-outline']);!!}
                             {!! Form::close() !!}
                                </div>
                            </div>