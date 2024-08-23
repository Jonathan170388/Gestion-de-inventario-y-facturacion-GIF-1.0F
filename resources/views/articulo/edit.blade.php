@extends('layouts.plantillabase');

@section('contenido')
<h2>EDITAR ARTICULO</h2>

<form action="/articulos/{{$articulo->id}}" method="POST">    
    @csrf
    @method('PUT')
       
    <div class="mb-3">
        <label for="" class="form-label">Codigo</label>
        <input id="codigo" name="codigo" type="text" class="form-control" value="{{$articulo->codigo}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nombre del articulo</label>
        <input id="nombreArticulo" name="nombreArticulo" type="text" class="form-control" value="{{$articulo->nombreArticulo}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Descripcion</label>
        <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$articulo->descripcion}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Ubicacion</label>
        <input id="ubicacion" name="ubicacion" type="text" class="form-control" value="{{$articulo->ubicacion}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Candidad</label>
        <input id="cantidad" name="cantidad" type="number" class="form-control" value="{{$articulo->cantidad}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Fecha de Fabricacion</label>
        <input id="Fabricacion" name="Fabricacion" type="date" class="form-control" value="{{$articulo->Fabricacion}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Fecha de Vencimiento</label>
        <input id="Vencimiento" name="Vencimiento" type="date" class="form-control" value="{{$articulo->Vencimiento}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nombre de Fabricante</label>
        <input id="fabricante" name="fabricante" type="text" class="form-control" value="{{$articulo->fabricante}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Precio de compra</label>
        <input id="precioCompra" name="precioCompra" type="number" class="form-control" value="{{$articulo->precioCompra}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Precio de venta</label>
        <input id="precioVenta" name="precioVenta" type="number" class="form-control" value="{{$articulo->precioVenta}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Descuento</label>
        <input id="descuento" name="descuento" type="number" class="form-control" value="{{$articulo->descuento}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Stock minimo</label>
        <input id="stock" name="stock" type="number" class="form-control" value="{{$articulo->stock}}">
    </div>
    <a href="\articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>

</form>
@endsection