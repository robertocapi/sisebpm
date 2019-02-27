@extends('layout.principal')

@section('content')
<?php $message=Session::get('message')?>

@if($message =='store')

<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 Inscripcion existosa
</div>
@endif





                        <!-- Striped table -->
                        <div class="col-md-12">
                            <div class="panel">
                                <h3 class="panel-heading">Listado de Inscritos </h3>

                                <div class="panel-body">

                                    <table class="table table-striped table-responsive table-bordered dataTable" id="example-2">
                                    <a href="alumnos/create">   <button class="btn btn-info btn-outline btn-icon"><span>Inscribir nuevo alumno</span><i class="fa fa-plus"></i></button></a>
                                        <thead>
                                            <tr>
                                                  <th>id</th>
                                          <th>Matricula</th>
                                                 <th>Nombre Completo</th>
                                                                <th>Carrera</th>

                                                                         <th>Aciones</th>

                                            </tr>
                                        </thead>

                                        <tbody>


                                  @foreach($alumnosr as $alumr )
                                            <tr>
                                               <td>{{$alumr->id}}</td>
                                             <td>{{$alumr->matricula}}</td>

                                                       <td>{{$alumr->nombre}} {{$alumr->ap_paterno}} {{$alumr->ap_materno}}</td>


                                           <td>{{$bar->getNameCarrera($alumr->id_carrera)}}</td>


                                            <td>
                                                  <div class="tools modify-tools">
                                                                    <a href="/alumnos/{{$alumr->id}}/edit"><i class="fa fa-edit"></i></a>
                                                                    <a href="{{$alumr->id}}"><i class="fa fa-eye"></i></a>
                                                                </div>
                                             </td>

                                            </tr>

                                        @endforeach
                                        </tbody>

                                        <tfoot>
                                            <tr>
                                                             <th>Matricula</th>
                                                 <th>Nombre Completo</th>
                                                                <th>Carrera</th>

                                                                         <th>Aciones</th>
                                            </tr>
                                        </tfoot>
                                    </table>

                            </div>
                        </div>



@stop
