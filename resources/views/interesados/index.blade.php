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
                                <h3 class="panel-heading">Interesados</h3>

                                <div class="panel-body">

                                    <table class="table table-striped table-responsive table-bordered dataTable" id="example-2">
                                    <a href="/interesados/create">   <button class="btn btn-info btn-outline btn-icon"><span>Alta interesado</span><i class="fa fa-plus"></i></button></a>
                                        <thead>
                                            <tr>
                                             <th>ID</th>
                                                 <th>Nombre</th>
                                                 <th>Paterno</th>
                                                  <th>Materno</th>
                                                              <th>Estatus</th>
                                                               <th>Interesado en</th>
                                                                  <th>Aciones</th>



                                                 </tr>
                                        </thead>

                                        <tbody>
                                          @foreach($interesadosr as $intersa)
                                            <tr>
                                              <td>{{$intersa->id}}</td>
                                               <td>{{$intersa->nombre}}</td>
                                                  <td>{{$intersa->ap_paterno}}</td>
                                             <td>{{$intersa->ap_materno}} </td>
                                             <td>{{$intersa->estatus}} </td>
                                              <td>{{$intersa->id_carrera}} </td>
                                                <td class="text-nowrap">
                                                                <div class="tools modify-tools">
                                                                    <a href="#"><i class="fa fa-edit"></i></a>
                                                                    <a href="#"><i class="fa fa-trash-o"></i></a>
                                                                    <a href="/interesados/show"><i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </td>
                                            </tr>
                                            @endforeach
                                        </tbody>

                                        <tfoot>
                                              <tr>
                                             <th>ID</th>
                                                 <th>Nombre</th>
                                                 <th>Paterno</th>
                                                  <th>Materno</th>
                                                              <th>Estatus</th>
                                                                 <th>Interesado en</th>
                                                                     <th>Aciones</th>



                                                 </tr>
                                        </tfoot>
                                    </table>

                            </div>
                        </div>



@stop
