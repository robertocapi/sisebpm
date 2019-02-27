@extends('layout.principal')
@section('content')



                   <div class="panel">
                                <h3 class="panel-heading">Asignar Beca alumnos</h3>
                                <div class="panel-body">
                                 {!! Form::open(['route' =>'asignarBecaAlumno.store','method'=>'POST'])!!}
                      
<div class="form-group label-floating">
                                            <label class="control-label">Alumno</label>
                                         

    <select class="form-control select2" name="id_alumno">

                                          <option>Elige una opción..</option>

                                      @foreach($alumnosr as $almrs)

     <option value="{{$almrs->id}}">{{$almrs->nombre}} {{$almrs->ap_paterno}}  {{$almrs->ap_materno}}</option>
                                      @endforeach
        </select>



                                             
                                        </div>

                                        <div class="form-group label-floating">
                                            <label class="control-label">Tipo de beca</label>
                                             {!!Form::select('id_beca',$institucionr, null, ['placeholder' => 'Elige una Opción...']);!!}
                                             
                                        </div>



     <div class="form-group label-floating">
                                             {!!Form::label('Observaciones', 'Observaciones', ['class' => 'control-label']);!!}
                                              {{ Form::text('observaciones', null, ['class' => 'form-control']) }}
                                        </div>
                                        


                                        
                                     
                                        
                                        {!!Form::submit('Registrar',['class'=> 'btn btn-primary btn-outline']);!!}
                             {!! Form::close() !!}
                                </div>
                            </div>
                   
                






@stop

