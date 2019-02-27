@extends('layout.principal')

@section('content')
<?php $message=Session::get('message')?>

@if($message =='store')

<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  Apertura de materia existosamente
</div>
@endif





                        <!-- Striped table -->
                        <div class="col-md-12">
                            <div class="panel">
                                <h3 class="panel-heading">Listado de Materias abiertas </h3>

                                <div class="panel-body">

                                    <table class="table table-striped table-responsive table-bordered dataTable" id="example-2">
                                    <a href="aperturamateria/create">   <button class="btn btn-info btn-outline btn-icon"><span>Apertura nueva materia</span><i class="fa fa-plus"></i></button></a>
                                        <thead>
                                            <tr>
                                             <th>ID</th>

                                                 <th>Materia</th>
                                                                <th>Periodo</th>
                                                                 <th>Grupo</th>
                                                                    <th>Profesor</th>
                                                                    <th>Observaciones</th>
                                                                     <th>Estatus</th>
                                                                         <th>Aciones</th>
                                                           
                                            </tr>
                                        </thead>
                                          
                                        <tbody>
                            
                                  @foreach($aperturamateriar as $apermar )
                                            <tr>
                                            <td>{{$apermar->id}}</td>
                                                
                                   
                     <td>{{$bar->getNameMateria($apermar->id_materia)}}</td>
                                           
  <td>{{$bar->getNamePeriodo($apermar->id_periodo)}}</td>

      <td>{{$bar->getNameGrupo($apermar->id_grupo)}}</td>


            <td>{{$bar->getFullnameProfesor($apermar->id_Profesor)}}</td>

                                             
                 <td>{{$apermar->observaciones}}</td>
            <td>{{$apermar->estatus}}</td>
                                            <td>
                                                  <div class="tools modify-tools">
                                                                    <a href="/aperturamateria/{{$apermar->id}}/edit"><i class="fa fa-edit"></i></a>
                                                                    <a href="{{$apermar->id}}"><i class="fa fa-eye"></i></a>
                                                                </div>
                                             </td>
                                                  
                                            </tr>
                                              
                                        @endforeach 
                                        </tbody>
                                             
                                        <tfoot>
                                            <tr>
                                                  <th>ID</th>

                                                 <th>Materia</th>
                                                                <th>Periodo</th>
                                                                 <th>Grupo</th>
                                                                    <th>Profesor</th>
                                                                    <th>Observaciones</th>
                                                                     <th>Estatus</th>
                                                                         <th>Aciones</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                     
                            </div>
                        </div>
              


@stop