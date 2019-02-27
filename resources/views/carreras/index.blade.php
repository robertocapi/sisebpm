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
                                <h3 class="panel-heading">Listado de carreras y Cursos </h3>

                                <div class="panel-body">

                                    <table class="table table-striped table-responsive table-bordered dataTable" id="example-2">
                                    <a href="carreras/create">   <button class="btn btn-info btn-outline btn-icon"><span>Crear nueva Carrera o Curso</span><i class="fa fa-plus"></i></button></a>
                                        <thead>
                                            <tr>
                                             <th>ID</th>
                                                 <th>Nombre</th>
                                                 <th>Tipo</th>
                                                  <th>Abreviatura</th>
                                                       <th>Aciones</th>
                                                 </tr>
                                        </thead>

                                        <tbody>
                                  @foreach($carrerasr as $carre)

                                            <tr>
                                              <td>{{$carre->id}}</td>
                                                  <td>{{$carre->carrera}}</td>

                                                        <td>{{$bar->getNameNivel($carre->nivel_id)}}</td>
                                          
                                             <td> {{$carre->abreviatura}} </td>
                                              <td class="text-nowrap">
                                                                <div class="tools modify-tools">
                                                                  <a href="/carreras/{{$carre->id}}/edit"><i class="fa fa-edit"></i></a>


                                                                </div>
                                                            </td>
                                            </tr>
                                        @endforeach
                                        </tbody>

                                        <tfoot>
                                            <tr>
                                              <th>ID</th>
                                                 <th>Nombre</th>
                                                 <th>Nivel</th>
                                                            <th>Abreviatura</th>
                                                       <th>Aciones</th>

                                            </tr>
                                        </tfoot>
                                    </table>

                            </div>
                        </div>



@stop
