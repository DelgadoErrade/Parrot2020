@extends("theme.$theme.layout")

@section('titulo')
    Sistema Menús
@endsection

@section("scripts")
<script src="{{asset('assets/pages/scripts/admin/crear.js')}}" type="text/javascript"></script>
@endsection

@section('contenido')

<div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-10">
        @include('includes.form-error')
        @include('includes.mensaje')
        <hr class="top-rojo">
        <div class="card ">
                <div class="card-header with-border bg-info">
                    <h3 class="card-title">Crear Menús</h3>
                    <div class="card-tools pull-right">
                        <a href="{{route('menu')}}" class="btn btn-block btn-info btn-sm">
                            <i class="fa fa-fw fa-reply-all"></i> Volver al listado
                        </a>
                    </div>
                </div>
            <form action="{{route('guardar_menu')}}" id="form-general" class="form-horizontal" method="POST" autocomplete="off">
                @csrf
                <div class="card-body">
                    @include('admin.menu.form')
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            @include('includes.boton-form-crear')
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
