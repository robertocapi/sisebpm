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
                                <h3 class="panel-heading">Listado de profesores </h3>

                                <div class="panel-body">

                                    <table class="table table-striped table-responsive table-bordered dataTable" id="example-2">
                                    <a href="profesores/create">   <button class="btn btn-info btn-outline btn-icon"><span>Alta profesor</span><i class="fa fa-plus"></i></button></a>
                                        <thead>
                                            <tr>
                                             <th>ID</th>
                                                 <th>Nombre</th>
                                                 <th>Paterno</th>
                                                  <th>Materno</th>
                                                     <th>Titulo</th>
                                                           <th>Telefono</th>
                                                            <th>Email</th>
                                                                <th>Costo Hora</th>
                                                                   <th>Viaticos</th>
       <th>Acciones</th>
                                                 </tr>
                                        </thead>

                                        <tbody>
                                          @foreach($profesores as $prof)
                                            <tr>
                                              <td>{{$prof->id}}</td>
                                                <td>{{$prof->nombre}}</td>
                                                  <td>{{$prof->ap_paterno}}</td>
                                             <td>{{$prof->ap_materno}} </td>
                                                <td>{{$prof->titulo}} </td>
                                                   <td>{{$prof->telefono}} </td>
                                                      <td>{{$prof->email}} </td>

                                                            <td>$ {{$prof->costo_hora}} </td>
                                                                <td>$ {{$prof->viaticos}} </td>
                                                                <td class="text-nowrap">
                                                                     <div class="tools modify-tools">
                                                                         <a href="/profesores/{{$prof->id}}/edit"><i class="fa fa-edit"></i></a>


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
                                                     <th>Titulo</th>
                                                           <th>Telefono</th>
                                                            <th>Email</th>
                                                                <th>Costo Hora</th>
                                                                   <th>Viaticos</th>

       <th>Acciones</th>

                                            </tr>
                                        </tfoot>
                                    </table>

                            </div>
                        </div>



@stop
