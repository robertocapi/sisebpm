@extends('layout.principal')

@section('content')
<?php $message=Session::get('message')?>

@if($message =='store')

<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
Beca dada de alta con exito
</div>
@endif


                        <!-- Striped table -->
                        <div class="col-md-12">
                            <div class="panel">
                                <h3 class="panel-heading">Listado de becas </h3>

                                <div class="panel-body">

                                    <table class="table table-striped table-responsive table-bordered dataTable" id="example-2">
                                    <a href="becas/create">   <button class="btn btn-info btn-outline btn-icon"><span>Crear nueva Beca</span><i class="fa fa-plus"></i></button></a>
                                        <thead>
                                            <tr>
                                             <th>ID</th>
                                                 <th>Institución</th>
                                                      <th>Concepto Pago</th> 
                                                 <th>Descuento</th> 
                                                  <th>action</th> 
                                                 </tr>
                                        </thead>
                                          
                                        <tbody>
                                  @foreach($becasr as $becs)
                              
                                            <tr>
                                              <td>{{$becs->id}}</td>
                                                <td>{{$bar->getNameInstitucion($becs->institucion)}}</td>

                                               
                                                    <td>{{$bar->getNameConceptoPago($becs->conceptoPago)}}</td>
         

                                              
                                            
                                               <td> {{$becs->descuento}}%</td>  
                                                <td class="text-nowrap">
                                                                <div class="tools modify-tools">
                                                                    <a href="#"><i class="fa fa-edit"></i></a>
                                                                    <a href="#"><i class="fa fa-trash-o"></i></a>
                                                                    <a href="/interesados/show"><i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </td> 
                                                  
                                            </tr>
                                        @endforeach 
                                        </tbody>
                                             
                                        <tfoot>
                                            <tr>
                                              <th>ID</th>
                                                 <th>Institución</th>
                                                 <th>Concepto Pago</th> 
                                                 <th>Descuento</th> 
                                                      <th>action</th> 
    
                                                        
                                            </tr>
                                        </tfoot>
                                    </table>
                                     
                            </div>
                        </div>
              


@stop