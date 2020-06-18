@extends("theme.$theme.layout")
@section('titulo')
    Editar Empleado
@endsection

@section("scripts")
<script src="{{asset('assets/pages/scripts/admin/crear.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/calendario/scw.js')}}" type="text/javascript"></script>
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
                <h3 class="card-title">Editar Empleado</h3>
                <div class="card-tools pull-right">
                    <a href="{{route('empleado')}}" class="btn btn-block btn-info btn-sm">
                        <i class="fa fa-fw fa-reply-all"></i> Volver al listado
                    </a>
                </div>
            </div>
            <form action="{{route('actualizar_empleado', ['id' => $data->id])}}" id="form-general" class="form-horizontal" method="POST" autocomplete="off">
                @csrf @method("put")
                <div class="card-body">
                    @include('empleado.form')
                </div>
                <div class="card-footer">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        @include('includes.boton-form-editar')
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
