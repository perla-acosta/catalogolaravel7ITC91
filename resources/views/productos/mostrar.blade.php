@extends('layouts.app')
@section('content')

    <table class="table table-dark">
        <thead>
            <tr>
                <th>#</th>
                <th>Producto</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Imagen</th>
                <th>Acciones

                </th>
            </tr>

        </thead>
        <tbody>
            @foreach ($datos as $item)


            <tr>
                <td>{{$loop->iteration }}</td>
                <td>{{$item->Producto}}</td>
                <td>{{$item->Descripcion}}</td>
                <td>{{$item->precio}}</td>
                <td><img class="img-fluid" src="{{ asset('storage').'/'.$item->imagen}}" alt="foto" style="width: 80px"></td>>
                <td><a class="btn btn-light" href="{{ url('/productos/'.$item->id.'/edit')}}">Editar</a> <form action="{{url('/productos/'.$item->id)}}" method="post">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button class="btn btn-danger" type="submit" onclick="return confirm('borrar');" style="margin-top: 10%">Borrar</button>
            </form>  </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $datos->links() }}
@endsection
