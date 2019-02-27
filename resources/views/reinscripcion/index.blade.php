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
                                <h3 class="panel-heading">Listado de reinscripciones </h3>

                                <div class="panel-body">

                                    <table class="table table-striped table-responsive table-bordered dataTable" id="example-2">
                                    <a href="reinscripcion/create">   <button class="btn btn-info btn-outline btn-icon"><span>Reinscribir</span><i class="fa fa-plus"></i></button></a>
                                        <thead>
                                            <tr>
                                             <th>ID</th>
                                                 <th>Nombre alumnos</th>
                                                                <th>carrera</th>
                                                                    <th>cuatrimestre</th>
                                                                         <th>Aciones</th>
                                                           
                                            </tr>
                                        </thead>
                                          
                                        <tbody>
                            
                                  @foreach($reinscripcionr as $reinscipr )
                                            <tr>
                                            <td>{{$reinscipr->id}}</td>
                                            
 
                            <td>{{$bar->getFullname($reinscipr->id_alumnos)}}</td>

                                              

                    <td>{{$bar->getNameCarrera($reinscipr->id_carrera)}}</td>


                                                      <td>{{$reinscipr->cuatrimestre}}</td>
                                            <td>
                                                  <div class="tools modify-tools">
                                                                    <a href="/alumnos/{{$reinscipr->id}}/edit"><i class="fa fa-edit"></i></a>
                                                                    <a href="{{$reinscipr->id}}"><i class="fa fa-eye"></i></a>
                                                                </div>
                                             </td>
                                                  
                                            </tr>
                                              
                                        @endforeach 
                                        </tbody>
                                             
                                        <tfoot>
                                            <tr>
                                               <th>ID</th>
                                                 <th>Nombre Completo</th>
                                                                <th>id_carrera</th>
                                                                    <th>matricula</th>
                                                                         <th>Aciones</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                     
                            </div>
                        </div>
              


@stop