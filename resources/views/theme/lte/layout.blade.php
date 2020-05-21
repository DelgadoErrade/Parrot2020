<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titulo', 'Parrot System') | Menu </title>
    <!--  AGREGAR ICONO EN LA PESTAÑA DEL NAVEGADOR         -->
    <link href='{{asset("assets/$theme/img/favicon.ico")}}' rel='shortcut icon' type='image/x-icon'>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href='{{asset("assets/$theme/plugins/fontawesome-free/css/all.min.css")}}'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href='{{asset("assets/$theme/css/adminlte.min.css")}}'>

    @yield('styles')

    <link rel="stylesheet" href='{{asset("assets/css/custom.css")}}'>
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-boxed">
    <div class="wrapper">
        <!-- Inicio Header  -->
        @include("theme/$theme/header")
        <!-- Fin Header     -->
        <!-- Inicio Aside   -->
        @include("theme/$theme/aside")
        <!-- Fin Aside      -->
        <!-- Inicio  Contenido  -->
        <div class="content-wrapper">
            <section class="content">
                    <!-- Contenido  -->
                    @yield("contenido")
                    <!-- Fin de Contenido  -->
            </section>
        </div>
        <!-- Fin Contenido      -->
        <!-- Inicio  Pie de pagina  -->
        @include("theme/$theme/footer")
        <!-- Fin Pie de pagina      -->
    </div>
    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{{asset("assets/$theme/plugins/jquery/jquery.min.js")}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset("assets/$theme/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
    <!-- FastClick -->
    <script src="{{asset("assets/$theme/plugins/fastclick/fastclick.js")}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset("assets/$theme/js/adminlte.min.js")}}"></script>
    <!-- Validación en el cliente -->
    @yield('scriptsPlugins')
    <script src="{{asset("assets/js/jquery-validation/jquery.validate.min.js")}}"></script>
    <script src="{{asset("assets/js/jquery-validation/localization/messages_es.min.js")}}"></script>
    <script src="{{asset("assets/js/funciones.js")}}"></script>
    @yield('scripts')
</body>
</html>
