<div class="form-group">
    <div class="row">
        <div class="col-lg-3 text-right">
            <label for="cedula" class="control-label requerido">Cédula</label>
        </div>
        <div class="col-lg-8">
            <input type="text" name="cedula" id="cedula" class="form-control" value="{{old('cedula', $data->cedula ?? '')}}" required/>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-lg-3 text-right">
            <label for="apellidos" class="control-label requerido">Apellidos</label>
        </div>
        <div class="col-lg-8">
            <input type="text" name="apellidos" id="apellidos" class="form-control" value="{{old('apellidos', $data->apellidos ?? '')}}" required/>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-lg-3 text-right">
            <label for="nombre" class="control-label requerido">Nombres</label>
        </div>
        <div class="col-lg-8">
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{old('nombre', $data->nombre ?? '')}}" required/>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-lg-3 text-right">
            <label for="fecha_nacimiento" class="control-label requerido">Fecha de Nacimiento</label>
        </div>
        <div class="col-lg-8">
            <input type="text" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" value="{{old('fecha_nacimiento', $data->fecha_nacimiento ?? '')}}" required onclick='scwShow(this,event);'/>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-lg-3 text-right">
            <label for="fecha_ingreso" class="control-label requerido">Fecha de Ingreso</label>
        </div>
        <div class="col-lg-8">
            <input type="text" name="fecha_ingreso" id="fecha_ingreso" class="form-control" value="{{old('fecha_ingreso', $data->fecha_ingreso ?? '')}}" required onclick='scwShow(this,event);'/>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-lg-3 text-right">
            <label for="telefono" class="control-label requerido">Número de teléfono</label>
        </div>
        <div class="col-lg-8">
            <input type="text" name="telefono" id="telefono" class="form-control" value="{{old('telefono', $data->telefono ?? '')}}" required/>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-lg-3 text-right">
            <label for="email" class="control-label requerido">E-Mail</label>
        </div>
        <div class="col-lg-8">
            <input type="text" name="email" id="email" class="form-control" value="{{old('email', $data->email ?? '')}}" required/>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-lg-3 text-right">
            <label for="direccion" class="control-label requerido">Dirección</label>
        </div>
        <div class="col-lg-8">
            <input type="text" name="direccion" id="direccion" class="form-control" value="{{old('direccion', $data->direccion ?? '')}}" required/>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-lg-3 text-right">
            <label for="ciudad" class="control-label requerido">Ciudad</label>
        </div>
        <div class="col-lg-8">
            <input type="text" name="ciudad" id="ciudad" class="form-control" value="{{old('ciudad', $data->ciudad ?? '')}}" required/>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-lg-3 text-right">
            <label for="zona_postal" class="control-label requerido">Zona Postal</label>
        </div>
        <div class="col-lg-8">
            <input type="text" name="zona_postal" id="zona_postal" class="form-control" value="{{old('zona_postal', $data->zona_postal ?? '')}}" required/>
        </div>
    </div>
</div>
