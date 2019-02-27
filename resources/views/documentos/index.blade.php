@extends('layout.principal')

@section('content')
<?php $message=Session::get('message')?>

@if($message =='store')

<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 Documento creado existosamente
</div>
@endif



                        <!-- Striped table -->
                        <div class="col-md-12">
                            <div class="panel">
                                <h3 class="panel-heading">Listado de Documentos</h3>

                                <div class="panel-body">

                                    <table class="table table-striped table-responsive table-bordered dataTable" id="example-2">
                                    <a href="documentos/create">   <button class="btn btn-info btn-outline btn-icon"><span>Nuevo Documento</span><i class="fa fa-plus"></i></button></a>
                                        <thead>
                                            <tr>
                                             <th>ID</th>
                                                 <th>Documento</th>
                                                 <th>Programa academico</th>
                                                            <th>Tipo de documento</th>
                                                                 <th>Estatus</th>
                                                           
                                            </tr>
                                        </thead>
                                          
                                        <tbody>
                                         @foreach($documentosr  as $docur)
                              
                                            <tr>

                                              <td>{{$docur->id}}</td>
                                                  <td>{{$docur->documento}}</td>
                                             <td>{{$docur->programa_academico}}  </td>   
                                               <td>{{$docur->tipo_documento}}</td>
                                                  <td>{{$bar->getNameEstatus($docur->estatus)}}</td>
                                      
                                       
                                            </tr>
                         @endforeach 
                                        </tbody>
                                             
                                        <tfoot>
                                            <tr>
                                             <th>ID</th>
                                                 <th>Documento</th>
                                                 <th>Programa academico</th>
                                                            <th>Tipo de documento</th>
                                                               <th>Estatus</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                     
                            </div>
                        </div>
              


@stop