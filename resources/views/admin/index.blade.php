<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('titulo','Parrot System') | Menu </title>
    <!--  AGREGAR ICONO EN LA PESTAÑA DEL NAVEGADOR         -->
    <link href='{{asset("assets/$theme/img/favicon.ico")}}' rel='shortcut icon' type='image/x-icon'>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href='{{asset("assets/$theme/plugins/fontawesome-free/css/all.min.css")}}'>
    <link rel="stylesheet" href='{{asset("assets/$theme/plugins/fontawesome-free/css/fontawesome.min.css")}}'>
    <link rel="stylesheet" href='{{asset("assets/$theme/plugins/toastr/toastr.min.css")}}'>
    <!-- overlayScrollbars -->
  <link rel="stylesheet" href='{{asset("assets/$theme/plugins/overlayScrollbars/css/OverlayScrollbars.min.css")}}'>
    <!-- Theme style -->
    <link rel="stylesheet" href='{{asset("assets/$theme/plugins/lte/css/adminlte.min.css")}}'>
    <!--@yield('styles')-->

    <link rel="stylesheet" href='{{asset("assets/$theme/css/custom.css")}}'>
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed" style="height: auto;">
    <div class="wrapper">
        <!-- Inicio Header  -->

        @include("theme/$theme/header")

        <!-- Fin Header     -->
        <!-- Inicio Aside   -->
        @include("theme/$theme/aside")


        <!-- Fin Aside      -->
        <!-- Inicio  Contenido  -->
        <div class="content-wrapper">
            <hr class="top-rojo">
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
    <script src='{{asset("assets/$theme/plugins/jquery/jquery.min.js")}}'></script>
    <!-- Bootstrap 4 -->
    <script src='{{asset("assets/$theme/plugins/bootstrap/js/bootstrap.bundle.js")}}'></script>
    <!-- FastClick -->
    <script src='{{asset("assets/$theme/plugins/fastclick/fastclick.js")}}'></script>
    <!-- overlayScrollbars -->
<script src='{{asset("assets/$theme/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js")}}'></script>
    <!-- AdminLTE App -->
    <script src='{{asset("assets/$theme/plugins/lte/js/adminlte.min.js")}}'></script>
    <!-- Validación en el cliente -->
    @yield('scriptsPlugins')
    <script src='{{asset("assets/$theme/plugins/jquery-validation/jquery.validate.min.js")}}'></script>
    <script src='{{asset("assets/$theme/plugins/jquery-validation/localization/messages_es.min.js")}}'></script>

    <script src='{{asset("assets/$theme/plugins/sweetalert/sweetalert2.min.js")}}'></script>

    <script src='{{asset("assets/$theme/plugins/toastr/toastr.js")}}'></script>

    <script src='{{asset("assets/js/scripts.js")}}'></script>
    <script src='{{asset("assets/js/funciones.js")}}'></script>
    @yield('scripts')
</body>
</html>
