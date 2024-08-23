@extends('layouts.plantillabase');

@section('contenido')
<a href="articulos/create" class="btn btn-primary">CREAR</a>
<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Codigo</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Ubicacion</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Fecha de fabricacion</th>
            <th scope="col">Fecha de vencimiento</th>
            <th scope="col">Fabricante</th>
            <th scope="col">Precio de compra</th>
            <th scope="col">Precio de venta</th>
            <th scope="col">Descuento</th>
            <th scope="col">Stock</th>
            <th scope="col">Accion</th>          
        </tr>
    </thead>
    <body>
        @foreach($articulos as $articulo)
        <tr>
            <td>{{$articulo->id}}</td>
            <td>{{$articulo->codigo}}</td>
            <td>{{$articulo->nombreArticulo}}</td>
            <td>{{$articulo->descripcion}}</td>
            <td>{{$articulo->ubicacion}}</td>
            <td>{{$articulo->cantidad}}</td>
            <td>{{$articulo->Fabricacion}}</td>
            <td>{{$articulo->Vencimiento}}</td>
            <td>{{$articulo->fabricante}}</td>
            <td>{{$articulo->precioCompra}}</td>
            <td>{{$articulo->precioVenta}}</td>
            <td>{{$articulo->descuento}}</td>
            <td>{{$articulo->stock}}</td>      
            <td>
                <form action="{{route ('articulos.destroy',$articulo->id)}}" method="POST">
                <a href="/articulos/{{$articulo->id}}/edit" class="btn btn-info">Editar</a>                
                @csrf
                @method('DELETE')
                <button tupe="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
                    
        </tr>
        @endforeach
    </body>
</table>
@endsection