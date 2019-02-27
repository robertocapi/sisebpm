@extends('layout.principal')

@section('content')
<?php $message=Session::get('message')?>
@if($message =='store')
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
Aalta calificacion realizada  existosamente
</div>
@endif





                        <!-- Striped table -->
                        <div class="col-md-12">
                            <div class="panel">
                                <h3 class="panel-heading">Alta de calificaciones por alumno</h3>

                                <div class="panel-body">

                                                   <table class="table table-striped table-responsive table-bordered dataTable" id="example-2">
                                  
                                        <thead>
                                            <tr>
                                             <th>ID</th>
                                                 <th>Nombre</th>
                                                 <th>Día</th>
                                                            <th>Turnoss</th>
                                                 <th>Carrera</th>
                                                  
                                                            <th>periodo</th>
                                                             <th>Acciones</th>
                                            </tr>
                                        </thead>
                                          
                                        <tbody>
                                         @foreach($gruposr2 as $grup)
                              
                                            <tr>

                                              <td>{{$grup->id}}</td>
                                                  <td>{{$grup->nombre}}</td>
                                                   <td>{{$grup->dia}}  </td> 
                                               <td>{{$grup->turno}}  </td> 


                                           <td>{{$bar->getNameCarrera($grup->id_carrerra)}}</td>
                                                      <td>{{$bar->getNamePeriodo($grup->periodo)}}</td>
                                                       <td>
                                                  <div class="tools modify-tools">
                                                                    <a href="edit"><i class="fa fa-edit"></i></a>
                                                                    <a href=""><i class="fa fa-eye"></i></a>
                                                                </div>
                                             </td>
                    
                                       
                                            </tr>
                         @endforeach 
                                        </tbody>
                                             
                                        <tfoot>
                                            <tr>
                                              <th>ID</th>
                                                 <th>Nombre</th>
                                                 <th>Día</th>
                                                            <th>Turno</th>
                                                 <th>Carrera</th>
                                                  
                                                            <th>periodo</th>
                                                             <th>Acciones</th>
                                                        
                                            </tr>
                                        </tfoot>
                                    </table>
                            </div>
                        </div>
              


@stop