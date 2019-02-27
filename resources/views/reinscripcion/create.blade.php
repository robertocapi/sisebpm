@extends('layout.principal')
@section('content')

 


                   <div class="panel">
                                <h3 class="panel-heading">reinscribir  Alumno</h3>
                                <div class="panel-body">
                                 {!! Form::open(['route' =>'reinscripcion.store','method'=>'POST'])!!}
       <div class="form-group label-floating">
                                            <label class="control-label">Alumno</label>


   <select class="form-control select2" name="id_alumnos">
        <option>Elige una opción..</option>

                  @foreach($alumnosr as $alumrs)

            <option value="{{$alumrs->id}}">{{$alumrs->nombre}} {{$alumrs->ap_paterno}} {{$alumrs->ap_materno}}</option>
                                      @endforeach
                                       </select>

                                               <div class="form-group label-floating">
                                         
                                             
                                        </div>
                                           <div class="form-group label-floating">
                                            <label class="control-label">Periodo</label>
                                             {!!Form::select('id_periodo',$periodosr, null, ['placeholder' => 'Elige una Opción...']);!!}
                                             
                                        </div>

 <div class="form-group label-floating">
                                         {!!Form::label('email', 'E-mail', ['class' => 'control-label']);!!}
                                         {{ Form::email('email', null, ['class' => 'form-control','id'=>'phone']) }}
                                      
                                        </div>
                                          <div class="form-group label-floating">
                                            <label class="control-label">Numero de celular contacto</label>
                                              {{ Form::text('tel_cel', null, ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Cuatrimestre</label>
                                          
                                               {!!Form::select('cuatrimestre', ['1' => '1', '2' => '2','3' => '3','4' => '4'], null, ['placeholder' => 'Elige una Opción...']);!!}
                                        </div>
 
                                          <div class="form-group label-floating">
                                       
                                         {{ Form::date('fecha', null, ['class' => 'form-control']) }}
                                      
                                        </div>

                                         <div class="form-group label-floating">
                                            <label class="control-label">observaciones</label>
                                              {{ Form::text('observaciones', null, ['class' => 'form-control']) }}
                                        </div>

 

  
                                        {{ Form::hidden ('id_carrera','7', ['class' => 'form-control']) }}
                                        
                                     
                                        
                                        {!!Form::submit('Registrar',['class'=> 'btn btn-primary btn-outline']);!!}
                             {!! Form::close() !!}
                                </div>
                            </div>
                   
                






@stop

