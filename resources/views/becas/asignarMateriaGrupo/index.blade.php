@extends('layout.principal')

@section('content')
<?php $message=Session::get('message')?>

@if($message =='store')

<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
asignación realizada  existosamente
</div>
@endif





                        <!-- Striped table -->
                        <div class="col-md-12">
                            <div class="panel">
                                <h3 class="panel-heading">Listado de asignacion de materias a grupo</h3>

                                <div class="panel-body">

                                    <table class="table table-striped table-responsive table-bordered dataTable" id="example-2">
                                    <a href="asignarmateriagrupo/create">   <button class="btn btn-info btn-outline btn-icon"><span>Asignar materia a grupo</span><i class="fa fa-plus"></i></button></a>
                                        <thead>
                                            <tr>
                                             <th>ID</th>
                                                 <th>Grupo</th>
                                                                <th>grupo</th>
                                                                    <th>Materias</th>
                                                                         <th>Observaciones</th>
                                                                           <th>Estatus</th>
                                                                          <th>Acciones</th>

                                                           
                                            </tr>
                                        </thead>
                                          
                                        <tbody>
                            
                                  @foreach($asignarMateriaGrupor  as $asignamaterr )
                                            <tr>
                                            <td>{{$asignamaterr->id}}</td>
                                                       <td>{{$asignamaterr->id_grupo}}</td>
                                                  
                                                    <td>{{$asignamaterr->id_materiaabierta}}</td>
                                         <td>{{$asignamaterr->observaciones}}</td>
                                           <td>{{$asignamaterr->estatus}}</td>
                                            <td>
                                                  <div class="tools modify-tools">
                                                                    <a href="/alumnos/{{$asignamaterr->id}}/edit"><i class="fa fa-edit"></i></a>
                                                                    <a href="{{$asignamaterr->id}}"><i class="fa fa-eye"></i></a>
                                                                </div>
                                             </td>
                                                  
                                            </tr>
                                              
                                        @endforeach 
                                        </tbody>
                                             
                                        <tfoot>
                                            <tr>
                                          <th>ID</th>
                                                 <th>Grupo</th>
                                                                <th>grupo</th>
                                                                    <th>Materias</th>
                                                                         <th>Observaciones</th>
                                                                           <th>Estatus</th>
                                                                          <th>Acciones</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                     
                            </div>
                        </div>
              


@stop