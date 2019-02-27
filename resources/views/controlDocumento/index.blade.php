@extends('layout.principal')

@section('content')
<?php $message=Session::get('message')?>

@if($message =='store')
  <div class="alert alert-success alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>
              <h4 class="alert-heading">Success!</h4>
             Categoria Creado existosamente </div>
@endif



                        <!-- Striped table -->
                        <div class="col-md-12">
                            <div class="panel">
                                <h3 class="panel-heading">Listado de periodos </h3>

                                <div class="panel-body">

                                    <table class="table table-striped table-responsive table-bordered dataTable" id="example-2">
                                    <a href="periodo/create">   <button class="btn btn-info btn-outline btn-icon"><span>Apertura nuevo periodo</span><i class="fa fa-plus"></i></button></a>
                                        <thead>
                                            <tr>
                                             <th>ID</th>
                                                 <th>Nombre</th>
                                                 <th>Fecha Inicio</th>
                                                            <th>Fecha Fin</th>
                                                                <th>Estatus</th>
                                                           
                                            </tr>
                                        </thead>
                                          
                                        <tbody>
                                         @foreach($periodosr as $per)
                              
                                            <tr>

                                              <td>{{$per->id}}</td>
                                                  <td>{{$per->periodo}}</td>
                                             <td>{{$per->fecha_inicio}}  </td>   
                                               <td>{{$per->fecha_fin}}</td>
                                                  <td>{{$bar->getNameEstatus($per->estatus)}}</td>
                                      
                                       
                                            </tr>
                         @endforeach 
                                        </tbody>
                                             
                                        <tfoot>
                                            <tr>
                                               <th>ID</th>
                                                 <th>Nombre</th>
                                                 <th>Fecha Inicio</th>
                                                            <th>Fecha Fin</th>
                                                        <th>Estatus</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                     
                            </div>
                        </div>
              


@stop