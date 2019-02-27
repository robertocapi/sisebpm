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
                                <h3 class="panel-heading">Listado de grupos</h3>

                                <div class="panel-body">

                                    <table class="table table-striped table-responsive table-bordered dataTable" id="example-2">
                                    <a href="grupos/create">   <button class="btn btn-info btn-outline btn-icon"><span>Crear nuevo grupo</span><i class="fa fa-plus"></i></button></a>
                                        <thead>
                                            <tr>
                                             <th>ID</th>
                                                 <th>Nombre</th>
                                                 <th>Día</th>
                                                            <th>Turno</th>
                                                 <th>Carrera</th>

                                                            <th>Ciclo</th>
                                                                        <th>Aciones</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                         @foreach($gruposr as $grup)

                                            <tr>

                                              <td>{{$grup->id}}</td>
                                                  <td>{{$grup->nombre}}</td>
                                                   <td>{{$grup->dia}}  </td>
                                               <td>{{$grup->turno}}  </td>


                                           <td>{{$bar->getNameCarrera($grup->carrera_id)}}</td>
                                                      <td>{{$bar->getNamePeriodo($grup->ciclo_id)}}</td>
                                                      <td class="text-nowrap">
                                                           <div class="tools modify-tools">
                                                               <a href="/grupos/{{$grup->id}}/edit"><i class="fa fa-edit"></i></a>


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

                                                            <th>Ciclo</th>
            <th>Aciones</th>

                                            </tr>
                                        </tfoot>
                                    </table>

                            </div>
                        </div>



@stop
