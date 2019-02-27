<!DOCTYPE html>
<html>
<?php $message=Session::get('message')?>
@if($message =='store')
@endif
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IMPO-Tlaxcala</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    {!! Html::style('plugins/css/bootstrap.min.css') !!}
        {!! Html::style('plugins/css/font-awesome.min.css') !!}
            {!! Html::style('plugins/css/animate.css') !!}
                {!! Html::style('plugins/css/ripples.min.css') !!}
                     {!! Html::style('plugins/css/jquery-jvectormap-2.0.2.css') !!}
                          {!! Html::style('plugins/css/jquery-jvectormap-2.0.2.css') !!}
                           {!! Html::style('css/outlay.css') !!}
                            {!! Html::style('css/colors/cyan.css') !!}
                            {!! Html::style('plugins/datatables/dataTables.bootstrap.min.css') !!}
                            {!! Html::style('plugins/datatables/responsive.bootstrap.min.css') !!}
                             {!! Html::style('plugins/css/select2.min.css') !!}



</head>

<body class="hold-transition sidebar-mini">
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>
    <div class="wrapper">
        <!-- Main Header -->
        <header class="main-header">
            <!-- Logo -->
            <a href="/" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>2018</b></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>SISES BPM</b> by leaxh</span>
            </a>
            <!-- Header Navbar -->
            <nav class="navbar navbar-fixed-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle waves-effect" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav" data-dropdown-in="flipInY" data-dropdown-out="fadeOut">
                        <!-- Control Sidebar Toggle Button -->
                        <li>
                            <a href="javascript:void(0);" class="waves-effect" data-toggle="collapse" data-target="#site_navbar_search">
                                <i class="fa fa-search top-nav-icon"></i>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link toggle-fullscreen" href="#">
                                <i class="fa fa-arrows-alt"></i>
                            </a>
                        </li>

                        <!-- User Account Menu -->
                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle waves-effect" data-toggle="dropdown">
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class="hidden-xs">{!!Auth::user()->name!!}</span>
                                <!-- The user image in the navbar-->

                                <img src="{{asset('img/avatars/avatar4.png')}}"class="user-image" >
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox <span class="label label-danger">3</span></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="collapse navbar-search-overlap" id="site_navbar_search">
                    <form role="search">
                        <div class="form-group">
                            <div class="input-search">
                                <div class="input-group">
                                    <input type="text" id="overlay_search" name="overlay-search" class="form-control" placeholder="Search">
                                    <span class="input-group-addon">
                                    <a  href="javascript:void(0)" class="close-input-overlay waves-effect" data-target="#site_navbar_search" data-toggle="collapse" aria-label="Close" aria-expanded="true"><i class="fa fa-times"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar sidebar-light">
            <!-- sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel">
                    <div class="image waves-effect">
                        <img src="img/avatars/avatar4.png" class="img-circle img-responsive " alt="User Image">
                    </div>
                    <div class="text-center info">
                        <strong>IMPO </strong>
                        <i>PLANTEL TLAXCALA</i>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <ul class="sidebar-menu">


                  <li class="treeview">
                      <a href="#"><i class="fa fa-sliders"></i> <span>1. Catalogos</span> <i class="fa fa-angle-right pull-right"></i></a>
                      <ul class="treeview-menu">
                                    <li><a href='/ciclos'>1.1Ciclos</a></li>
                                    <li><a href='/carreras'>1.2Carreras o Cursos</a></li>
                                     <li><a href='/materias'>1.3Materias</a></li>
                                       <li><a href='/profesores'>1.4Profesores</a></li>
                                     <li><a href='/grupos'>1.5Grupos</a></li>
                                       <li><a href='/conceptoPago'>1.6Conceptos pagos</a></li>
                                          <li><a href='/institucionesBecas'>1.7convenios de Becas</a></li>
                                               <li><a href='/becas'>1.8 Becas</a></li>
                      </ul>
                  </li>


<li class="treeview">
                        <a href="#"><i class="fa fa-sliders"></i> <span>2. Inicio de Ciclo</span> <i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="treeview-menu">
                                      <li><a href='/alumnos'>2.1Inscripción</a></li>
                                       <li><a href='/facturacion'>2.1.1Facturacion</a></li>
                                          <li><a href='/alumnoaGrupo'>2.2 Asignar alumno a grupo</a></li>
                                    <li><a href='/aperturamateria'>2.3Aperturar Materias</a></li>
                                  <li><a href='/reinscripcion'>2.4 Reinscripción</a></li>

                        </ul>
                    </li>
                    <li class="treeview">
                                            <a href="#"><i class="fa fa-sliders"></i> <span> 3.Durante el ciclo </span> <i class="fa fa-angle-right pull-right"></i></a>
                                            <ul class="treeview-menu">
                                                      <li><a href='/asignarBecaAlumno'>3.1 Asignar beca Alumno</a></li>
                                                      <li><a href='/pagos'>3.2Alta Pagos</a></li>
                                                <li><a href='/altaCalificaciones'>3.3 Alta Califaciones</a></li>

                                            </ul>
                                        </li>







                      <li><a href='/interesados'>4. Interesados</a></li>

 <li class="treeview">
                        <a href="#"><i class="fa fa-sliders"></i> <span>Admin</span> <i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="treeview-menu">
                                <li><a href='/usuario'>listado Usuarios</a></li>

                        </ul>
                    </li>




                </ul>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->

            <!-- Main content -->
            <div class="content">
                <!-- Your Page Content Here -->
                @yield('content')
                <!-- header widgets -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="pull-right hidden-xs">
                Developed for  IMPO PLANTEL TLAXCALA.
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2018 <a href="#">GRUPO LEAXH</a>.</strong> All rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->
    <!-- REQUIRED JS SCRIPTS -->
    <!-- jQuery 2.1.4 -->








     {!! Html::script('plugins/js/jquery-3.1.1.min.js') !!}
          {!! Html::script('plugins/js/bootstrap.js') !!}
               {!! Html::script('plugins/js/jquery.sparkline.min.js') !!}
                    {!! Html::script('plugins/js/countUp.min.js') !!}
                      {!! Html::script('plugins/js/raphael.min.js') !!}
                      {!! Html::script('plugins/js/morris.min.js') !!}
                        {!! Html::script('plugins/js/jquery-jvectormap-2.0.2.min.js') !!}     {!! Html::script('plugins/js/jquery-jvectormap-world-mill-en.js') !!}
                          {!! Html::script('plugins/js/ripples.min.js') !!}
                            {!! Html::script('plugins/rendro-easy-pie-chart/dist/jquery.easypiechart.min.js') !!}
                     {!! Html::script('plugins/js/Chart.bundle.min.js') !!}
                      {!! Html::script('plugins/js/jquery.slimscroll.min.js') !!}
                        {!! Html::script('js/dashboard.js') !!}
                     {!! Html::script('js/widgets.js') !!}
                              {!! Html::script('js/form.js') !!}
                      {!! Html::script('js/app.js') !!}

                           {!! Html::script('plugins/js/material.min.js') !!}
          {!! Html::script('plugins/js/jquery.validate.min.js') !!}
              {!! Html::script('plugins/js/jquery.inputmask.bundle.min.js') !!}
                  {!! Html::script('plugins/js/bootstrap-tagsinput.min.js') !!}
                      {!! Html::script('plugins/js/select2.full.min.js') !!}
                          {!! Html::script('plugins/js/bootstrap-colorpicker.min.js') !!}
                              {!! Html::script('plugins/js/moment.min.js') !!}
                               {!! Html::script('plugins/js/jquery.bootstrap-wizard.js') !!}
                                   {!! Html::script('plugins/js/bootstrap-datetimepicker.min.js') !!}
                                       {!! Html::script('plugins/js/markdown.js') !!}
                                         {!! Html::script('plugins/js/to-markdown.js') !!}
                                           {!! Html::script('plugins/js/bootstrap-markdown.js') !!}
                                             {!! Html::script('plugins/js/jquery.bootstrap-wizard.js') !!}
                                               {!! Html::script('plugins/summernote/summernote.min.js') !!}
                                                 {!! Html::script('plugins/tinymce/tinymce.min.js') !!}



 {!! Html::script('plugins/datatables/jquery.dataTables.min.js') !!}
                             {!! Html::script('plugins/datatables/dataTables.responsive.min.js') !!}
 {!! Html::script('plugins/datatables/dataTables.bootstrap.min.js') !!}
          {!! Html::script('plugins/datatables/dataTables.buttons.min.js') !!}
  {!! Html::script('plugins/datatables/jszip.min.js') !!}
                                 {!! Html::script('plugins/datatables/pdfmake.min.js') !!}
                         {!! Html::script('plugins/datatables/vfs_fonts.js') !!}
                     {!! Html::script('plugins/datatables/buttons.html5.min.js') !!}
                         {!! Html::script('plugins/datatables/buttons.print.min.js') !!}
                            {!! Html::script('plugins/datatables/buttons.colVis.min.js') !!}
                            {!! Html::script('js/datatables.js') !!}




</body>

</html>
