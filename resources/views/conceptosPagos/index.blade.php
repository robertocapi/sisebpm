@extends('layout.principal')

@section('content')
<?php $message=Session::get('message')?>

@if($message =='store')

<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  Concepto de pago creado existosamente
</div>
@endif


                        <!-- Striped table -->
                        <div class="col-md-12">
                            <div class="panel">
                                <h3 class="panel-heading">Listado de conceptos de pagos </h3>

                                <div class="panel-body">

                                    <table class="table table-striped table-responsive table-bordered dataTable" id="example-2">
                                    <a href="conceptoPago/create">   <button class="btn btn-info btn-outline btn-icon"><span>Crear un nuevo concepto</span><i class="fa fa-plus"></i></button></a>
                                        <thead>
                                            <tr>
                                             <th>ID</th>

                                                 <th>Concepto</th>
                                                 <th>Monto</th>
                                                 <th>Programa Academico</th>
                                                   <th>Acciones</th>
                                                 </tr>
                                        </thead>

                                        <tbody>
                                  @foreach($conceptospagosr as $concept)

                                            <tr>
                                              <td>{{$concept->id}}</td>

                                                  <td>{{$concept->concepto}}</td>
                                             <td>$ {{$concept->monto}} </td>

                                                     <td> {{$concept->nivel}} </td>
                                                   <td class="text-nowrap">
                                                                <div class="tools modify-tools">
                                                                  <a href="/conceptoPago/{{$concept->id}}/edit"><i class="fa fa-edit"></i></a>


                                                                </div>
                                                            </td>
                                            </tr>
                                        @endforeach
                                        </tbody>

                                        <tfoot>
                                            <tr>
                                                  <th>ID</th>

                                                 <th>Concepto</th>
                                                 <th>Monto</th>
                                            <th>Programa Academico</th>

                                                     <th>Acciones</th>


                                            </tr>
                                        </tfoot>
                                    </table>

                            </div>
                        </div>



@stop
