    <div class="form-group" >
        <div class="row">
            <div class="col-lg-3 text-right">
                <label for="nombre" class="col-form-label requerido ">Nombre</label>
            </div>
            <div class="col-lg-8">
                <input type="text" name="nombre" id="nombre" class="form-control" value="{{old('nombre', $data->nombre ?? '')}}"  placeholder="Nombre" required >
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="url" class="col-lg-3 col-form-label requerido text-right">Url</label>
        <div class="col-lg-8">
        <input type="text" name="url" id="url" class="form-control" value="{{old('url', $data->url ?? '')}}" placeholder="Url" required/>
        </div>
    </div>
    <div class="form-group row">
        <label for="icono" class="col-lg-3 col-form-label text-right">Icono</label>
        <div class="col-lg-8">
            <input type="text" name="icono" id="icono" class="form-control" value="{{old('icono', $data->icono ?? '')}}" placeholder="Icono"/>
        </div>
        <div class="col-lg-1">
            <i id="mostrar-icono" class="icon {{old('icono', $data->icono ?? '')}}"></i>
        </div>
    </div>
