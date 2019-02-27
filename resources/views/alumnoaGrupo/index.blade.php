@extends('layout.principal')

@section('content')
<?php $message=Session::get('message')?>

@if($message =='store')

<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
Asignación exitosa realizada  existosamente
</div>
@endif





                        <!-- Striped table -->
                        <div class="col-md-12">
                            <div class="panel">
                                <h3 class="panel-heading">Listado de asignacion de Alumnos a grupos</h3>

                                <div class="panel-body">

                                    <table class="table table-striped table-responsive table-bordered dataTable" id="example-2">
                                    <a href="alumnoaGrupo/create">   <button class="btn btn-info btn-outline btn-icon"><span>Asignar alumno a grupo</span><i class="fa fa-plus"></i></button></a>
                                        <thead>
                                            <tr>
                                             <th>ID</th>
                                               
                                                                <th>Alumno</th>
                                                                 <th>periodo</th>
                                                                    <th>grupo</th>
                                                                     <th>Estatus</th>
                                                                         <th>Observaciones</th>
                                                                          
                                                                          <th>Acciones</th>

                                                           
                                            </tr>
                                        </thead>
                                          
                                        <tbody>
                            
                                  @foreach($alumnoaGrupor  as $alumnoaGrr )
                                            <tr>
                                            <td>{{$alumnoaGrr->id}}</td>


                                                    <td>{{$bar->getFullname($alumnoaGrr->id_alumno)}}</td>
                                                            <td>{{$bar->getNamePeriodo($alumnoaGrr->id_periodo)}}</td>
                                                      <td>{{$bar->getNameGrupo($alumnoaGrr->id_grupo)}}</td>
                                                         <td>{{$bar-> getNameEstatus($alumnoaGrr->estatus)}}</td>
                                                 
                                         <td>{{$alumnoaGrr->observaciones}}</td>
                             
                                            <td>
                                                  <div class="tools modify-tools">
                                                                    <a href="/alumnos/{{$alumnoaGrr->id}}/edit"><i class="fa fa-edit"></i></a>
                                                                    <a href="{{$alumnoaGrr->id}}"><i class="fa fa-eye"></i></a>
                                                                </div>
                                             </td>
                                                  
                                            </tr>
                                              
                                        @endforeach 
                                        </tbody>
                                             
                                        <tfoot>
                                            <tr>
                                <th>ID</th>
                                               
                                                                <th>Alumno</th>
                                                                 <th>periodo</th>
                                                                    <th>grupo</th>
                                                                     <th>Estatus</th>
                                                                         <th>Observaciones</th>
                                                                          
                                                                          <th>Acciones</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                     
                            </div>
                        </div>
              


@stop