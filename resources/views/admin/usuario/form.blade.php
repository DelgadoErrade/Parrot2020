<div class="form-group">
    <div class="row">
        <div class="col-lg-3 text-right">
            <label for="nombre" class="control-label requerido">Nombre</label>
        </div>
        <div class="col-lg-8">
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{old('nombre', $data->nombre ?? '')}}" required/>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-lg-3 text-right">
            <label for="usuario" class="control-label requerido">Usuario</label>
        </div>
        <div class="col-lg-8">
            <input type="text" name="usuario" id="usuario" class="form-control" value="{{old('usuario', $data->usuario ?? '')}}" required/>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-lg-3 text-right">
            <label for="email" class="control-label requerido">E-Mail</label>
        </div>
        <div class="col-lg-8">
            <input type="email" name="email" id="email" class="form-control" value="{{old('email', $data->email ?? '')}}" required/>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-lg-3 text-right">
            <label for="password" class="control-label {{!isset($data) ? 'requerido' : ''}}">Contraseña</label>
        </div>
        <div class="col-lg-8">
            <input type="password" name="password" id="password" class="form-control" value="" {{!isset($data) ? 'required' : ''}} minlength="5"/>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-lg-3 text-right">
            <label for="re_password" class="control-label {{!isset($data) ? 'requerido' : ''}}">Repita Contraseña</label>
        </div>
        <div class="col-lg-8">
            <input type="password" name="re_password" id="re_password" class="form-control" value="" {{!isset($data) ? 'required' : ''}} minlength="5"/>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-lg-3 text-right">
            <label for="rol_id" class="control-label requerido">Rol</label>
        </div>
        <div class="col-lg-8">
            <select name="rol_id[]" id="rol_id" required  multiple="multiple" width="100%">
                {{-- <option value="">Seleccione el rol</option> --}}
                @foreach($rols as $id => $nombre)
                    <option
                    value="{{$id}}"
                    {{is_array(old('rol_id')) ? (in_array($id, old('rol_id')) ? 'selected' : '')  : (isset($data) ? ($data->roles->firstWhere('id', $id) ? 'selected' : '') : '')}}
                    >
                    {{$nombre}}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
</div>
