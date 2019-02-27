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
                                <h3 class="panel-heading">Listado de usuarios </h3>

                                <div class="panel-body">

                                    <table class="table table-striped table-responsive table-bordered dataTable" id="example-2">
                                    <a href="usuario/create">   <button class="btn btn-info btn-outline btn-icon"><span>Crear Usuario</span><i class="fa fa-plus"></i></button></a>
                                        <thead>
                                            <tr>
                                                 <th>ID</th>
                                                 <th>Nombre</th>
                                                  <th>Correo</th>
                                                  <th>Acciones</th>

                                            </tr>
                                        </thead>

                                        <tbody>
                                         @foreach($users as $user)
                                            <tr>
                                             <td>{{$user->id}}</td>
                                              <td>{{$user->name}}</td>
                                             <td> {{$user->email}} </td>
                                             <td>
                                                  <div class="tools modify-tools">
                                                              
                                                                    <a href="{{$user->id}}"><i class="fa fa-eye"></i></a>
                                                                </div>
                                             </td>


                                            </tr>
                                             @endforeach
                                        </tbody>

                                        <tfoot>
                                            <tr>
                                               <th>ID</th>
                                               <th>Nombre</th>
                                                            <th>Correo</th>
                                                                 <th>Acciones</th>

                                            </tr>
                                        </tfoot>
                                    </table>

                            </div>
                        </div>



@stop
