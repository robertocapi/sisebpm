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
                                <h3 class="panel-heading">Planes de estudios </h3>

                                <div class="panel-body">

                                    <table class="table table-striped table-responsive table-bordered dataTable" id="example-2">
                                    <a href="usuario/create">   <button class="btn btn-info btn-outline btn-icon"><span>Crear Usuario</span><i class="fa fa-plus"></i></button></a>
                                        <thead>
                                            <tr>
                                                 <th>Nombre</th>
                                                            <th>Correo</th>
                                                           
                                            </tr>
                                        </thead>
                                          
                                        <tbody>
                                    
                                            <tr>
                                              <td></td>
                                             <td>  </td>        
                                            </tr>
                                  
                                        </tbody>
                                             
                                        <tfoot>
                                            <tr>
                                               <th>Nombre</th>
                                                            <th>Correo</th>
                                                        
                                            </tr>
                                        </tfoot>
                                    </table>
                                     
                            </div>
                        </div>
              


@stop