@extends('layout.principal')
@section('content')




                   <div class="panel">
                                <h3 class="panel-heading">Capturar Pago</h3>
                                <div class="panel-body">
                                 {!! Form::open(['route' =>'pagos.store','method'=>'POST'])!!}
                      
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
                                            <label class="control-label">Concepto de pago</label>
                                             {!!Form::select('id_conceptopago',$conceptopagor, null, ['placeholder' => 'Elige una Opción...']);!!}
                                             
                                        </div>
                                            <div class="form-group label-floating">
                                            <label class="control-label">Periodo</label>
                                             {!!Form::select('periodo',$periodosr, null, ['placeholder' => 'Elige una Opción...']);!!} 
                                        </div>


                                       
  

     <div class="form-group label-floating">
                                             {!!Form::label('Observaciones', 'Observaciones', ['class' => 'control-label']);!!}
                                              {{ Form::text('observaciones', null, ['class' => 'form-control']) }}
                                        </div>

                                     
                               
     {{ Form::hidden ('realizadopor',Auth::user()->id, ['class' => 'form-control']) }}

                                        
                                     
                                        
                                        {!!Form::submit('Registrar',['class'=> 'btn btn-primary btn-outline']);!!}
                             {!! Form::close() !!}
                                </div>
                            </div>
                   
                






@stop

