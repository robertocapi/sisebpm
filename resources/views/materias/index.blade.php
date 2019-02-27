@extends('layout.principal')

@section('content')
<?php $message=Session::get('message')?>

@if($message =='store')

<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
Creado existosamente
</div>
@endif


                        <!-- Striped table -->
                        <div class="col-md-12">
                            <div class="panel">
                                <h3 class="panel-heading">Listado de Materias </h3>

                                <div class="panel-body">

                                    <table class="table table-striped table-responsive table-bordered dataTable" id="example-2">
                                    <a href="materias/create">   <button class="btn btn-info btn-outline btn-icon"><span>Crear nueva materia</span><i class="fa fa-plus"></i></button></a>
                                        <thead>
                                            <tr>
                                             <th>ID</th>
                                                 <th>Carrera</th>
                                                 <th>nombre</th>
                                                  <th>Clave</th>
                                                        <th>Abreviatura</th>
                                                 <th>Horas docentes</th>
                                                  <th>Horas independientes</th>
                                                 <th>Creditos</th>
                                                            <th>Acciones</th>
                                                 </tr>
                                        </thead>

                                        <tbody>
                                  @foreach($materiasr as $mater)

                                            <tr>
                                              <td>{{$mater->id}}</td>
                                                    <td>{{$bar->getNameCarrera($mater->carrera_id)}}</td>
                                             <td> {{$mater->nombre}} </td>
                                               <td> {{$mater->clave}} </td>
                                                <td> {{$mater->abreviatura}} </td>
                                                   <td> {{$mater->horas_docentes}} </td>
                                                       <td> {{$mater->horas_independientes}} </td>
                                                        <td> {{$mater->creditos}} </td>
                                                           <td class="text-nowrap">
                                                                <div class="tools modify-tools">
                                                                    <a href="/materias/{{$mater->id}}/edit"><i class="fa fa-edit"></i></a>


                                                                </div>
                                                            </td>
                                            </tr>
                                        @endforeach
                                        </tbody>

                                        <tfoot>
                                            <tr>
                                               <th>ID</th>
                                                 <th>Carrera</th>
                                                 <th>nombre</th>
                                                  <th>Clave</th>
                                                      <th>Abreviatura</th>
                                                 <th>Horas docentes</th>
                                                  <th>Horas independientes</th>
                                                 <th>Creditos</th>
                                                           <th>Acciones</th>


                                            </tr>
                                        </tfoot>
                                    </table>

                            </div>
                        </div>



@stop
