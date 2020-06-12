@extends("theme.$theme.layout")
@section('titulo')
    Usuarios
@endsection


@section('styles')
    <link rel="stylesheet" href='{{asset("assets/pages/scripts/admin/usuario/jQuery-Multiple-Select/css/bootstrap-multiselect.css")}}'>
@endsection


@section("scripts")

<script src="{{asset("assets/pages/scripts/admin/usuario/jQuery-Multiple-Select/js/bootstrap-multiselect.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/pages/scripts/admin/usuario/crear.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-10">
        @include('includes.form-error')
        @include('includes.mensaje')
        <hr class="top-rojo">
        <div class="card">
            <div class="card-header with-border">
                <h3 class="card-title">Crear usuario</h3>
                <div class="card-tools pull-right">
                    <a href="{{route('usuario')}}" class="btn btn-block btn-info btn-sm">
                        <i class="fa fa-fw fa-reply-all"></i> Volver al listado
                    </a>
                </div>
            </div>
            <form action="{{route('guardar_usuario')}}" id="form-general" class="form-horizontal" method="POST" autocomplete="off">
                @csrf
                <div class="card-body">
                    @include('admin.usuario.form')
                </div>
                <div class="card-footer">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        @include('includes.boton-form-crear')
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
