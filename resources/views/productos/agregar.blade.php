@extends('layouts.app')
@section('content')
        <div class="container">
            <h1 style="margin-top: 3%">Agregar Producto:</h1>
<form method="post" action="{{url('/productos')}}" enctype="multipart/form-data" style="margin-top: 2%">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="Producto">{{'Producto'}}</label>
        <input class="form-control" type="text" name="Producto" id="Producto">
    </div>
    <div class="form-group">
        <label for="Descripcion">{{'Descripcion'}}</label>
        <input class="form-control" type="text" name="Descripcion" id="Descripcion">
    </div>
    <div class="form-group">
        <label for="precio">{{'Precio'}}</label>
        <input class="form-control" type="text" name="precio" id="precio">
    </div>
    <div class="form-group">
        <label for="imagen">{{'Imagen'}}</label>
        <input class="form-control" type="file" name="imagen" id="imagen">
    </div>

<input type="submit" value="          Agregar          " class="btn btn-dark" style="margin-top: 5%">
</form>
        </div>

@endsection
