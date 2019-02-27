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
                                <h3 class="panel-heading">Listado  de convenios</h3>

                                <div class="panel-body">

                                    <table class="table table-striped table-responsive table-bordered dataTable" id="example-2">
                                    <a href="institucionesBecas/create">   <button class="btn btn-info btn-outline btn-icon"><span>Alta nueva Institucion</span><i class="fa fa-plus"></i></button></a>
                                        <thead>
                                            <tr>
                                             <th>ID</th>
                                                 <th>Nombre</th>
                                                 <th>Nombre Contacto</th>
                                                 <th>Numero Contacto</th>
                                                      <th>Aciones</th>
                                                 </tr>
                                        </thead>

                                        <tbody>
                                  @foreach($institucionesBecasr as $institub)

                                            <tr>
                                              <td>{{$institub->id}}</td>
                                               <td>{{$institub->nombre}}</td>
                                                  <td>{{$institub->nombre_contacto}}</td>
                                             <td> {{$institub->numero_contacto}} </td>
                                             <td class="text-nowrap">
                                                               <div class="tools modify-tools">
                                         <a href="/institucionesBecas/{{$institub->id}}/edit"><i class="fa fa-edit"></i></a>


                                                               </div>
                                                           </td>

                                            </tr>

                                        @endforeach
                                        </tbody>

                                        <tfoot>
                                            <tr>
                                              <th>ID</th>
                                                  <th>Nombre</th>
                                                 <th>Nombre Contacto</th>
                                                 <th>Numero Contacto</th>
                                                      <th>Aciones</th>


                                            </tr>
                                        </tfoot>
                                    </table>

                            </div>
                        </div>



@stop
