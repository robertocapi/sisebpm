@extends('layout.principal')
@section('content')

<div class="row">
                    <div class="col-lg-12 col-md-12">
                       <div class="tab-container tab-left widget">
                                <ul class="nav nav-tabs flat-tabs">
                                    <li class="active"><a href="#tab3-1" data-toggle="tab"><i class="fa fa-tasks"></i>&nbsp;Por hacer</a></li>
                                    <li><a href="#tab3-2" data-toggle="tab"><i class="fa  fa-check">&nbsp;Realizadas</i></a></li>
                                    <li><a href="#tab3-3" data-toggle="tab"><i class="fa  fa-cogs"></i>&nbsp;Casos</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active fade in" id="tab3-1">
                                        <h3 class="hthin">Pendientes</h3>
                                      <div class="panel">
                                <h3 class="panel-heading">Lista de tareas </h3>
                                <div class="panel-body">
                                    <p class="text-muted">En esta lista puede ver las tareas pendientes. </p>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nombre de tarea</th>
                                                <th>id del caso</th>
                                                <th>Última actualización</th>
                                                <th>Fecha de vencimiento</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="active">
                                                <th scope="row">1</th>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                            </tr>
                                            <tr class="success">
                                                <th scope="row">3</th>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                            </tr>
                                            <tr class="info">
                                                <th scope="row">5</th>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">6</th>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                            </tr>
                                            <tr class="warning">
                                                <th scope="row">7</th>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">8</th>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                            </tr>
                                            <tr class="danger">
                                                <th scope="row">9</th>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab3-2">
                                        <h2>Realizadas</h2>
                                      <div class="col-md-12">
                            <div class="panel">
                                <div class="panel-heading">
                                    <div class="pull-left">
                                        <h6 class="panel-title txt-dark">Realizadas</h6>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="panel-wrapper ">
                                    <div class="panel-body">
                                        <p class="text-muted">En esta lista puede ver las tareas hechas.</p>
                                        <div class="table-wrap">
                                            <div class="table-responsive">
                                                <table class="table mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Nombre tarea</th>
                                                            <th>id del caso</th>
                                                            <th>Nombre de proceso</th>
                                                            <th>Realizada</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Jens</td>
                                                            <td>Brincker</td>
                                                            <td>Brincker123</td>
                                                            <td><span class="label label-danger">admin</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Mark</td>
                                                            <td>Hay</td>
                                                            <td>Hay123</td>
                                                            <td><span class="label label-info">member</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>Anthony</td>
                                                            <td>Davie</td>
                                                            <td>Davie123</td>
                                                            <td><span class="label label-warning">developer</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>David</td>
                                                            <td>Perry</td>
                                                            <td>Perry123</td>
                                                            <td><span class="label label-success">subscriber</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>5</td>
                                                            <td>Anthony</td>
                                                            <td>Davie</td>
                                                            <td>Davie123</td>
                                                            <td><span class="label label-info">member</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>6</td>
                                                            <td>Alan</td>
                                                            <td>Gilchrist</td>
                                                            <td>Gilchrist123</td>
                                                            <td><span class="label label-success">subscriber</span> </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab3-3">
                                        <h2 class="hthin">Casos</h2>
                                     <div class="col-md-12">
                            <div class="panel">
                                <div class="panel-heading">
                                    <div class="pull-left">
                                        <h6 class="panel-title txt-dark">Caso abierto y Archivados</h6>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="panel-wrapper ">
                                    <div class="panel-body">
                                        <p class="text-muted"></p>
                                        <div class="table-wrap">
                                            <div class="table-responsive">
                                                <table class="table mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Nombre proceso</th>
                                                            <th>Version</th>
                                                            <th>Fecha de inicio</th>
                                                            <th>Iniciada por</th>
                                                                <th>Fecha terminada</th>
                                                                   <th>Historial</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Jens</td>
                                                            <td>Brincker</td>
                                                            <td>Brincker123</td><td>Hay</td>
                                                            <td>Hay123</td>
                                                            <td><span class="label label-danger">admin</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Mark</td>
                                                            <td>Hay</td>
                                                            <td>Hay123</td><td>Hay</td>
                                                            <td>Hay123</td>
                                                            <td><span class="label label-info">member</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>Anthony</td>
                                                            <td>Davie</td>
                                                            <td>Davie123</td><td>Hay</td>
                                                            <td>Hay123</td>
                                                            <td><span class="label label-warning">developer</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>David</td>
                                                            <td>Perry</td>
                                                            <td>Perry123</td><td>Hay</td>
                                                            <td>Hay123</td>
                                                            <td><span class="label label-success">subscriber</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>5</td>
                                                            <td>Anthony</td>
                                                            <td>Davie</td>
                                                            <td>Davie123</td><td>Hay</td>
                                                            <td>Hay123</td>
                                                            <td><span class="label label-info">member</span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>6</td>
                                                            <td>Alan</td>
                                                            <td>Gilchrist</td>
                                                            <td>Gilchrist123</td><td>Hay</td>
                                                            <td>Hay123</td>
                                                            <td><span class="label label-success">subscriber</span> </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>


                </div>

                <!-- fourth row -->
                <div class="row">
                         <div class="col-md-12">
                        <div class="panel">
                            <h3 class="panel-heading">User Activity</h3>
                            <div class="panel-body">
                                <div class="streamline">
                                    <div class="outlay-item">
                                        <div class="outlay-avatar avatar avatar-sm avatar-circle">
                                            <img class="img-responsive img-circle" src="img/avatars/avatar.png" alt="avatar" />
                                        </div>
                                        <div class="outlay-content">
                                            <a href="javascript:void(0)" class="text-block">Marc Evans</a>
                                            <span class="text-block font-14">Today</span>
                                            <p class="text-gray">Created New Application</p>
                                        </div>
                                    </div>
                                    <div class="outlay-item">
                                        <div class="outlay-avatar avatar avatar-sm avatar-circle">
                                            <img class="img-responsive img-circle" src="img/avatars/avatar2.png" alt="avatar" />
                                        </div>
                                        <div class="outlay-content">
                                            <a href="javascript:void(0)" class="text-block">Marcia Castro</a>
                                            <span class="text-block font-14">Yesterday</span>
                                            <p class="text-gray">Added New User to Project</p>
                                        </div>
                                    </div>
                                    <div class="outlay-item">
                                        <div class="outlay-avatar avatar avatar-sm avatar-circle">
                                            <img class="img-responsive img-circle" src="img/avatars/avatar3.png" alt="avatar" />
                                        </div>
                                        <div class="outlay-content">
                                            <a href="javascript:void(0)" class="text-block">Abigail Phillips</a>
                                            <span class="text-block font-14">4 days ago</span>
                                            <p class="text-gray">Removed database from cpanel</p>
                                        </div>
                                    </div>
                                    <div class="outlay-item">
                                        <div class="outlay-avatar avatar avatar-sm avatar-circle">
                                            <img class="img-responsive img-circle" src="img/avatars/avatar4.png" alt="avatar" />
                                        </div>
                                        <div class="outlay-content">
                                            <a href="javascript:void(0)" class="text-block">Susan Harris</a>
                                            <span class="text-block font-14">3 Jan</span>
                                            <p class="text-gray">Started The Startup</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Todo -->

                    <!-- end todo -->
                    <!-- signin form -->

                    <!-- end signin form -->
                </div>
                <!-- end fourth row  -->
                <!-- Fifth row   -->
                <div class="row">
                    <!-- User Activity -->

                    <!-- End User Activity -->
                    <!-- User lists -->


                </div>
                <!-- end Fifth row -->
                <!-- sixth row -->
                <div class="row">
                    <!-- Status Row -->
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-3 col-xs-6">
                                <div class="widget widget-tile">
                                    <span id="pie_chart_1" class="easypiechart skill-circle" data-percent="84">
                                                <span class="percent head-font">84</span>
                                    </span>
                                    <span class="skill-head">Completada Tareas</span>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="widget widget-tile">
                                    <span id="pie_chart_2" class="easypiechart skill-circle" data-percent="65">
                                            <span class="percent head-font">35</span>
                                    </span>
                                    <span class="skill-head">Falidos</span>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="widget widget-tile">
                                    <span id="pie_chart_3" class="easypiechart skill-circle" data-percent="57">
                                                <span class="percent head-font">87</span>
                                    </span>
                                    <span class="skill-head">En Progreso</span>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="widget widget-tile">
                                    <span id="pie_chart_4" class="easypiechart skill-circle" data-percent="90">
                                                <span class="percent head-font">90</span>
                                    </span>
                                    <span class="skill-head">Completado Caso</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Status Row -->
                </div>


                @stop
