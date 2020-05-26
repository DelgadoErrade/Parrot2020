<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Parrot | Login</title>
     <!--  AGREGAR ICONO EN LA PESTAÑA DEL NAVEGADOR         -->
     <link href='{{asset("assets/$theme/img/favicon.ico")}}' rel='shortcut icon' type='image/x-icon'>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 4-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- Font Awesome -->
       <!-- Font Awesome Icons -->
       <link rel="stylesheet" href='{{asset("assets/$theme/plugins/fontawesome-free/css/all.min.css")}}'>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href='{{asset("assets/$theme/css/adminlte.min.css")}}'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js does not work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page">
    <div class="row align-items-center vh-100">

        <div class="login-card accent-dark">
            <div class="login-logo">
                <a href="{{route('inicio')}}"><h3>Parrot System 2004</h3></a>
            </div>
            <!-- /.login-logo -->
        <div class="login-card-body">
            <p class="login-card-msg text-center back-to-top">Inicio de sesion</p>
            @if ($errors->any())
            <div class="alert alert-danger alert-dismissible" data-auto-dissmiss="3000">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <div class="alert-text">
                        @foreach ($errors->all() as $error)
                        <span>{{$error}}</span>
                        @endforeach
                    </div>
                </div>
                @endif
                <form action="{{route('login_post')}}" method="post" autocomplete="off">
                    @csrf
                    <div class="input-group mb-3">
                    <input type="text" name="usuario" class="form-control"" value="{{old('usuario')}}" placeholder="Usuario">
                        <div class="input-group-append">
                            <div class="input-group-text">
                      <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="password" name= "password" class="form-control" placeholder="clave">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
                <div class="row">

                  <!-- /.col -->
                  <div class="col-12">
                      <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

    <script src="{{asset("assets/$theme/plugins/jquery/jquery.min.js")}}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="{{asset("assets/$theme/plugins/bootstrap/js/bootstrap.min.js")}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset("assets/$theme/js/adminlte.min.js")}}"></script>
    <script src="{{asset("assets/js/jquery-validation/jquery.validate.min.js")}}"></script>
    <script src="{{asset("assets/js/jquery-validation/localization/messages_es.min.js")}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="{{asset("assets/js/scripts.js")}}"></script>
    <script src="{{asset("assets/js/funciones.js")}}"></script>
</div>
</body>

</html>
