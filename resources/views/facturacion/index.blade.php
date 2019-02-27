@extends('layout.principal')

@section('content')
<?php $message=Session::get('message')?>

@if($message =='store')

<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  Usuario Creado existosamente
</div>
@endif



                        <!-- Striped table -->
                        <div class="col-md-12">
                            <div class="panel">
                                <h3 class="panel-heading">Listado de datos para factura </h3>

                                <div class="panel-body">

                                    <table class="table table-striped table-responsive table-bordered dataTable" id="example-2">
                                    <a href="facturacion/create">   <button class="btn btn-info btn-outline btn-icon"><span>Agregar datos facturación</span><i class="fa fa-plus"></i></button></a>
                                        <thead>
                                            <tr>
                                             <th>ID</th>
                                                 <th>Alumno</th>
                                                 <th>Razon social</th>
                                                            <th>RFC</th>
                                                             
                                                           
                                            </tr>
                                        </thead>
                                          
                                        <tbody>
                                         @foreach($facturacionr as $factr)
                              
                                            <tr>

                                              <td>{{$factr->id}}</td>
                                            
  <td>{{$bar->getFullname($factr->id_alumno)}}</td>

                                             <td>{{$factr->razonsocialfac}}  </td>   
                                               <td>{{$factr->rfc_factu}}</td>
                                            </tr>
                         @endforeach 
                                        </tbody>
                                             
                                        <tfoot>
                                            <tr>
                                                   <th>ID</th>
                                                 <th>Alumno</th>
                                                 <th>Razon social</th>
                                                            <th>RFC</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                     
                            </div>
                        </div>
              


@stop