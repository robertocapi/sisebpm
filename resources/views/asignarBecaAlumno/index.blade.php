@extends('layout.principal')

@section('content')
<?php $message=Session::get('message')?>

@if($message =='store')

<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  Beca Asignada existosamente
</div>
@endif





                        <!-- Striped table -->
                        <div class="col-md-12">
                            <div class="panel">
                                <h3 class="panel-heading">Listado de asignacion a de becas</h3>

                                <div class="panel-body">

                                    <table class="table table-striped table-responsive table-bordered dataTable" id="example-2">
                                    <a href="asignarBecaAlumno/create">   <button class="btn btn-info btn-outline btn-icon"><span>Asignar Beca Alumno</span><i class="fa fa-plus"></i></button></a>
                                        <thead>
                                            <tr>
                                             <th>ID</th>
                                                 <th>Nombre Alumno</th>
                                                               
                                                                    <th>Tipo de Beca</th>
                                                                         <th>Observaciones</th>
                                                                           <th>Estatus</th>
                                                                          <th>Acciones</th>

                                                           
                                            </tr>
                                        </thead>
                                          
                                        <tbody>
                            
                                  @foreach($asignarBecaAlumnor  as $asignabecaAlr )
                                            <tr>
                                            <td>{{$asignabecaAlr->id}}</td>
                                                    
                                                  <td>{{$bar->getFullname($asignabecaAlr->id_alumno)}}</td>
                                                        <td>{{$bar->   getNameInstitucion($asignabecaAlr->id_beca)}}</td>
                                                          <td>{{$bar->   getNameEstatus($asignabecaAlr->estatus)}}</td>
                                               
                                           
                                         <td>{{$asignabecaAlr->observaciones}}</td>
                          
                                            <td>
                                                  <div class="tools modify-tools">
                                                                    <a href="/alumnos/{{$asignabecaAlr->id}}/edit"><i class="fa fa-edit"></i></a>
                                                                    <a href="{{$asignabecaAlr->id}}"><i class="fa fa-eye"></i></a>
                                                                </div>
                                             </td>
                                                  
                                            </tr>
                                              
                                        @endforeach 
                                        </tbody>
                                             
                                        <tfoot>
                                            <tr>
                                            <th>ID</th>
                                                 <th>Nombre Alumno</th>
                                                               
                                                                    <th>Tipo de Beca</th>
                                                                         <th>Observaciones</th>
                                                                           <th>Estatus</th>
                                                                          <th>Acciones</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                     
                            </div>
                        </div>
              


@stop