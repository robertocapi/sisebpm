@extends('layout.principal')
@section('content')

                      



                   <div class="panel">
                                <h3 class="panel-heading">Alta datos de facturación</h3>
                                <div class="panel-body">
                                 {!! Form::open(['route' =>'facturacion.store','method'=>'POST'])!!}
                                 <div class="form-group label-floating">
         <label class="control-label">Alumno</label>
              
        <select class="form-control select2" name="id_alumno">
              <option>Elige una opción..</option>

                  @foreach($alumnosr as $alumrs)

            <option value="{{$alumrs->id}}">{{$alumrs->nombre}} {{$alumrs->ap_paterno}} {{$alumrs->ap_materno}}</option>
                                      @endforeach
                                       </select>
                                             
                 </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Razon social</label>
                                              {{ Form::text('razonsocialfac', null, ['class' => 'form-control']) }}
                                        </div>
                                        {!!Form::label('regimen', 'Regimen', ['class' => 'control-label']);!!}
                                        <div class="form-group label-floating">
                                 {!!Form::select('regimen', ['Persona Fisica' => 'Persona Fisica', 'Persona Moral' => 'Persona Moral'], null, ['placeholder' => 'Elige una Opción...']);!!}
                                        </div>


                                          <div class="form-group label-floating">
                                            <label class="control-label">RFC</label>
                                           {{ Form::text('rfc_factu', null, ['class' => 'form-control']) }}
                                        </div>
                                         <div class="form-group label-floating">
                                            <label class="control-label">Dirreción</label>
                                                 {{ Form::text('dire_factura', null, ['class' => 'form-control']) }}
                                        </div>
                                        
                                        
  {{ Form::hidden ('estatus','1', ['class' => 'form-control']) }}
                                     
                                        
                                        {!!Form::submit('Registrar',['class'=> 'btn btn-primary btn-outline']);!!}
                             {!! Form::close() !!}
                                </div>
                            </div>
                   
                






@stop

