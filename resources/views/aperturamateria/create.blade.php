@extends('layout.principal')
@section('content')



                   <div class="panel">
                                <h3 class="panel-heading">Aperturar  una nueva materia</h3>
                                <div class="panel-body">
       {!! Form::open(['route' =>'aperturamateria.store','method'=>'POST'])!!}

   <div class="form-group mb-0">
                                            <label class="control-label mb-10">Elige la materia</label>


                                    <select class="form-control select2" name="id_materia">

                                          <option>Elige una opción..</option>

                                      @foreach($materiasr as $mtrs)

                                           <option value="{{$mtrs->id}}">{{$mtrs->clave}}-{{$mtrs->nombre}}</option>
                                      @endforeach
        </select>

                                        </div>






                                           <div class="form-group label-floating">
                                            <label class="control-label">Periodo</label>
                                             {!!Form::select('id_periodo',$periodosr, null, ['placeholder' => 'Elige una Opción...']);!!}

                                        </div>

                            <div class="form-group label-floating">
                                            <label class="control-label">Grupo</label>
                                             {!!Form::select('id_grupo',$gruposr, null, ['placeholder' => 'Elige una Opción...']);!!}

                                        </div>

                                      <div class="form-group label-floating">
                                            <label class="control-label">Profesor</label>
           

                                             <select class="form-control select2" name="id_Profesor">

                                                   <option>Elige una opción..</option>

                                               @foreach($profesorr as $pfrs)
                                                <option value="{{$pfrs->id}}">{{$pfrs->nombre}} {{$pfrs->ap_paterno}} {{$pfrs->ap_materno}}</option>
                                
                                               @endforeach
                             </select>




                                        </div>



     <div class="form-group label-floating">
                                             {!!Form::label('Observaciones', 'Observaciones', ['class' => 'control-label']);!!}
                                              {{ Form::text('observaciones', null, ['class' => 'form-control']) }}
                                        </div>


                                        {{ Form::hidden ('estatus','1', ['class' => 'form-control']) }}






                                        {!!Form::submit('Registrar',['class'=> 'btn btn-primary btn-outline']);!!}
                             {!! Form::close() !!}
                                </div>
                            </div>








@stop
