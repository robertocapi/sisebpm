
<!DOCTYPE html>
<html lang="en">
@include('alerts.errors')
@include('alerts.request')
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IMPO-PLantel Tlaxcala</title>
<link href="https://fonts.googleapis.com/css?family=Assistant" rel="stylesheet">
    <link rel="icon" href="img/favicon.ico">
    <link rel="stylesheet" href="plugins/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/css/font-awesome.min.css">
    <link rel="stylesheet" href="plugins/css/animate.css">
    <link rel="stylesheet" href="plugins/css/ripples.min.css">
    <link rel="stylesheet" href="css/outlay.css">
          {!! Html::style('css/colors/cyan.css') !!}
</head>

<body class="outlay-login-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                <div class="panel login-panel">
                    <div class="panel-heading text-center">
                        <h3>IMPO Plantel Tlaxcala</h3>
                    </div>
                    <div class="user-card-social text-center">
                        <ul>

      <li><a href="#" class=""><img src="img/avatars/avatar4.png" class="img-70" alt="..."></a></li>
                        </ul>
                    </div>

{!! Form::open(['route' =>'singin.store','method'=>'POST','class'=>'form-horizontal'])!!}

  <div class="form-group ">
                                <label for="inputEmail3" class="col-sm-2 control-label">
                                    <i class="fa fa-user-o"></i>
                                </label>
                                <div class="col-sm-10">
      {!!Form::email('email',null,['class'=>'form-control','placeholder'=>'Email']);!!}
                                </div>
                            </div>

<div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">
                                    <i class="fa fa-lock"></i>
                                </label>
                                <div class="col-sm-10">

    {!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa tu password']);!!}
                                </div>
                            </div>



    <div class="form-group">

          {!!Form::submit('Ingresar',['class'=> 'btn btn-primary btn-block']);!!}   </div>

{!! Form::close() !!}



                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- REQUIRED JS SCRIPTS -->
    <script src="plugins/js/jquery-3.1.1.min.js"></script>
    <script src="plugins/js/bootstrap.js"></script>
    <script src="plugins/js/material.min.js"></script>
    <script src="plugins/js/ripples.min.js"></script>
    <script src="js/app.js"></script>
</body>

</html>
