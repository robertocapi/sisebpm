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
                                <h3 class="panel-heading">Listado de periodos </h3>

                                <div class="panel-body">

                                    <table class="table table-striped table-responsive table-bordered dataTable" id="example-2">
                                    <a href="periodo/create">   <button class="btn btn-info btn-outline btn-icon"><span>Crear nuevo grupo</span><i class="fa fa-plus"></i></button></a>
                                        <thead>
                                            <tr>
                                             <th>ID</th>
                                                 <th>Nombre</th>
                                                 <th>Carrera</th>
                                                            <th>periodo</th>
                                                               
                                                           
                                            </tr>
                                        </thead>
                                          
                                        <tbody>
                                         @foreach($gruposr as $grup)
                              
                                            <tr>

                                              <td>{{$grup->id}}</td>
                                                  <td>{{$grup->nombre}}</td>
                                             <td>{{$grup->carrera}}  </td>   
                                               <td>{{$grup->periodo}}</td>
                                       
                                            </tr>
                         @endforeach 
                                        </tbody>
                                             
                                        <tfoot>
                                            <tr>
                                               <th>ID</th>
                                                      <th>Nombre</th>
                                                 <th>Carrera</th>
                                                            <th>periodo</th>
                                                        
                                            </tr>
                                        </tfoot>
                                    </table>
                                     
                            </div>
                        </div>
              


@stop