@extends('layout.principal')

@section('content')
<?php $message=Session::get('message')?>

@if($message =='store')

<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
pago realizado existosamente
</div>
@endif




                        <!-- Striped table -->
                        <div class="col-md-12">
                            <div class="panel">
                                <h3 class="panel-heading">Listado pagos realizados</h3>

                                <div class="panel-body">



                                    <table class="table table-striped table-responsive table-bordered dataTable" id="example-2">
                                    <a href="pagos/create">   <button class="btn btn-info btn-outline btn-icon"><span>Realizar un pago</span><i class="fa fa-plus"></i></button></a>
                                        <thead>
                                            <tr>
                                             <th>Folio pago</th>
                                                 <th>Alumno</th>
                                                 <th>Concepto</th>
                                                    <th>Monto Pagado</th>
                                                     <th>Periodo</th>
                                                     <th>Fecha</th>
                                                    
                              <th>Acciones</th>

                                                           
                                            </tr>
                                        </thead>
                                          
                                        <tbody>
                 
                                  @foreach($pagosr  as $pagrs )
                                            <tr>
                                            <td>{{$pagrs->id}}</td>

                                           
                                       
                                                <td>{{$bar->getFullname($pagrs->id_alumno)}}</td>
                                 <td>{{$bar->getNameConceptoPago($pagrs->id_conceptopago)}}</td>
                                                  

                                                    <td>${{$pagrs->montoaPagar}}</td>
 <td>{{$bar->getNamePeriodo($pagrs->id_periodo)}}</td>
                                                      
                                         <td>{{$pagrs->fecha}}</td>
                                            <td>
                                                  <div class="tools modify-tools">
                                                                    <a href="/alumnos/{{$pagrs->id}}/edit"><i class="fa fa-edit"></i></a>
                                                                    <a href="{{$pagrs->id}}"><i class="fa fa-eye"></i></a>
                                                                </div>
                                             </td>
                                                  
                                            </tr>
                                              
                                        @endforeach 
                                        </tbody>
                                             
                                        <tfoot>
                                            <tr>
                                              <th>ID</th>
                                                 <th>Alumno</th>
                                                 <th>Concepto</th>
                                                    <th>Monto Pagado</th>
                                                       <th>Periodo</th>
                                                     <th>Fecha</th>
                                                    
                              <th>Acciones</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                     
                            </div>
                        </div>
              


@stop