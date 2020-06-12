<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="nombre" class="control-label requerido">Nombre</label>
        </div>
        <div class="col-lg-8">
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{old('nombre', $data->nombre ?? '')}}" required/>
        </div>
    </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-lg-3">
                <label for="slug" class="control-label requerido">slug</label>
            </div>
            <div class="col-lg-8">
                <input type="text" name="slug" id="slug" class="form-control" value="{{old('slug', $data->slug ?? '')}}" required/>
            </div>
        </div>
    </div>
