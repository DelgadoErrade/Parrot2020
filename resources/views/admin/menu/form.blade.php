    <div class="form-group row">
        <label for="nombre" class="col-lg-3 col-form-label requerido text-right">Nombre</label>
        <div class="col-lg-8">
        <input type="text" name="nombre" id="nombre" class="form-control" value="{{old('nombre')}}"  placeholder="Nombre"/>
        </div>
    </div>
    <div class="form-group row">
        <label for="url" class="col-lg-3 col-form-label requerido text-right">Url</label>
        <div class="col-lg-8">
        <input type="text" name="url" id="url" class="form-control" value="{{old('url')}}"   placeholder="Url"/>
        </div>
    </div>
    <div class="form-group row">
        <label for="icono" class="col-lg-3 col-form-label text-right">Icono</label>
        <div class="col-lg-8">
            <input type="text" name="icono" id="icono" class="form-control" value="{{old('icono')}}" placeholder="Icono"/>
        </div>
        <div class="col-lg-1">
            <span id="mostrar-icono" class="fa fa-fw {{old("icono")}}"></span>
        </div>
    </div>
