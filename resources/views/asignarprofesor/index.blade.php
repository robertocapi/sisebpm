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
                                <h3 class="panel-heading">Listado de asignacion a profesores</h3>

                                <div class="panel-body">

                                    <table class="table table-striped table-responsive table-bordered dataTable" id="example-2">
                                    <a href="asignarprofesor/create">   <button class="btn btn-info btn-outline btn-icon"><span>Asignar profesor a materia</span><i class="fa fa-plus"></i></button></a>
                                        <thead>
                                            <tr>
                                             <th>ID</th>
                                                 <th>Nombre Profesor</th>
                                                               
                                                                    <th>Materia</th>
                                                                     <th>Grupo</th>
                                                                         <th>Observaciones</th>
                                                                           <th>Estatus</th>
                                                                          <th>Acciones</th>

                                                           
                                            </tr>
                                        </thead>
                                          
                                        <tbody>
                            
                                  @foreach($asignarprofesorr  as $asignaprr )
                                            <tr>
                                            <td>{{$asignaprr->id}}</td>
                                                    
                                                  <td>{{$bar->getFullnameProfesor($asignaprr->id_profesor)}}</td>
                                                    <td>{{$asignaprr->id_materia}}</td>
                                         <td>{{$asignaprr->observaciones}}</td>
                                           <td>{{$asignaprr->estatus}}</td>
                                            <td>
                                                  <div class="tools modify-tools">
                                                                    <a href="/alumnos/{{$asignaprr->id}}/edit"><i class="fa fa-edit"></i></a>
                                                                    <a href="{{$asignaprr->id}}"><i class="fa fa-eye"></i></a>
                                                                </div>
                                             </td>
                                                  
                                            </tr>
                                              
                                        @endforeach 
                                        </tbody>
                                             
                                        <tfoot>
                                            <tr>
                                           <th>ID</th>
                                                 <th>Nombre Profesor</th>
                                                               
                                                                    <th>Materia</th>
                                                                     <th>Grupo</th>
                                                                         <th>Observaciones</th>
                                                                           <th>Estatus</th>
                                                                          <th>Acciones</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                     
                            </div>
                        </div>
              


@stop