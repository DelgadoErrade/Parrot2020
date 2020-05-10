@extends("theme.$theme.layout")

@section('titulo')
    Parrot
@endsection

@section('contenido')
<div class="row pt-3" >
    <div class="col-lg-12">
        <div class="card card-cyan ">
            <div class="card-header">
                <h2 class="card-title">Usuarios del sistema</h2>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Usuario</th>
                            <th>Email</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($permisos as $usuario)
                               <tr>
                                   <td>{{$usuario->id}}</td>
                                   <td>{{$usuario->usuario}}</td>
                                   <td>{{$usuario->email}}</td>
                               </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>
<!-- /.card-body -->

<!-- /.card -->

    @endsection


