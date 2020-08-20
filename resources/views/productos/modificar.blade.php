
@extends('layouts.app')
@section('content')
<div class="container">
    <h1 style="margin-top: 3%">Modificar Producto:</h1>
<form method="post" action="{{url('/productos/'.$datos->id)}}" enctype="multipart/form-data" style="margin-top: 2%">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <div class="form-group">
        <label for="Producto">{{'Producto'}}</label>
        <input class="form-control" type="text" name="Producto" value="{{$datos->Producto}}" id="Producto">
    </div>
    <div class="form-group">
        <label for="Descripcion">{{'Descripcion'}}</label>
        <input class="form-control" type="text" name="Descripcion" value="{{$datos->Descripcion}}" id="Descripcion">
    </div>
    <div class="form-group">
        <label for="precio">{{'Precio'}}</label>
        <input class="form-control" type="text" name="precio" value="{{$datos->precio}}" id="precio">
    </div>
    <div class="form-group">
        <label for="imagen">{{'Imagen'}}</label>
        <img class="img-fluid" src="{{ asset('storage').'/'.$datos->imagen}}" alt="foto" width="10%">
        <input class="form-control" type="file" name="imagen" value="{{$datos->imagen}}" id="imagen" style="margin-top: 1%">
    </div>
<input type="submit" value="            Editar           " class="btn btn-dark" style="margin-top: 5%">
</form>
        </div>

@endsection

