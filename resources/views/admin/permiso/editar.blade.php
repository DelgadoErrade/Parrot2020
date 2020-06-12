@extends("theme.$theme.layout")
@section('titulo')
    Permisos
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/permiso/crear.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-10">
        @include('includes.mensaje')
        <hr class="top-rojo">
        <div class="card">
            <div class="card-header with-border">
                <div class="row">
                    <div class="col-lg-10">
                        <h3 class="card-title">Editar Permiso</h3>
                    </div>
                    <div class="col-lg-2 card-tools pull-right">
                        <a href="{{route('permiso')}}" class="btn btn-info btn-sm pull-right">Listado</a>

                    </div>
                </div>
            </div>
            <form action="{{route('actualizar_permiso', ['id' => $data->id])}}" id="form-general" class="form-horizontal" method="POST" autocomplete="off">
                @csrf @method("put")
                <div class="card-body">
                    @include('admin.permiso.form')
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
