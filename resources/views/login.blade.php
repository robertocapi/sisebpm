<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IMPO-Plantel Tlaxcala</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
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
                            <li><a href="#" class="btn btn-just-icon btn-simple btn-facebook"><i class="fa fa-facebook"></i><div class="ripple-container"></div></a></li>
                            <li><a href="#" class="btn btn-just-icon btn-simple btn-twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="btn btn-just-icon btn-simple btn-linkedin"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" action="index.html">
                            <div class="form-group ">
                                <label for="inputEmail3" class="col-sm-2 control-label">
                                    <i class="fa fa-user-o"></i>
                                </label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">
                                    <i class="fa fa-lock"></i>
                                </label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group remember-label">
                                <div class="col-sm-12">
                                    <div class="checkbox">
                                        <label class="control-label">
                                            <input type="checkbox"> Remember me
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                            </div>
                        </form>
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
