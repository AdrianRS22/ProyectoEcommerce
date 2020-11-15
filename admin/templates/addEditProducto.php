<div class="form-group row">
    <div class="col-4 col-sm-3">
        <label for="nombre">Nombre: </label>
    </div>
    <div class="col-8 col-sm-9">
        <input type="text" class="form-control" name="nombre" id="nombreProducto" />
    </div>
</div>

<div class="form-group row">
    <div class="col-4 col-sm-3">
        <label for="descripcion">Descripción: </label>
    </div>
    <div class="col-8 col-sm-9">
    <textarea name="descripcion" id="descripcionProducto" class="form-control"></textarea>
    </div>
</div>

<div class="form-group row">
    <div class="col-4 col-sm-3">
        <label for="precio">Precio: </label>
    </div>
    <div class="col-8 col-sm-9">
        <input type="number" class="form-control" name="precio" id="precioProducto" />
    </div>
</div>

<div class="form-group row">
    <div class="col-4 col-sm-3">
        <label for="categoria">Categoría: </label>
    </div>
    <div class="col-8 col-sm-9">
        <select name="categoria" class="form-control" id="categoriaProducto"></select>
    </div>
</div>

<div class="form-group row">
    <div class="col-4 col-sm-3">
        <label for="subcategoria">Sub categoría: </label>
    </div>
    <div class="col-8 col-sm-9">
        <select name="subcategoria" class="form-control" id="subcategoriaProducto"></select>
    </div>
</div>

<div class="form-group">
    <label for="imagen">Imagen: </label>
    <input type="file" name="imagen" class="form-control-file" id="imagenProducto" accept="image/*"/>
</div>