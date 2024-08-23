@extends('layouts.plantillabase');

@section('contenido')
<h2>CREAR ARTICULO</h2>

<form action="/articulos" method="POST">    
    @csrf
       
    <div class="mb-3">
        <label for="" class="form-label">Codigo</label>
        <input id="codigo" name="codigo" type="text" class="form-control" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nombre del articulo</label>
        <input id="nombreArticulo" name="nombreArticulo" type="text" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Descripcion</label>
        <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Ubicacion</label>
        <input id="ubicacion" name="ubicacion" type="text" class="form-control" tabindex="5">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Candidad</label>
        <input id="cantidad" name="cantidad" type="number" class="form-control" tabindex="6">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Fecha de Fabricacion</label>
        <input id="Fabricacion" name="Fabricacion" type="date" class="form-control" tabindex="7">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Fecha de Vencimiento</label>
        <input id="Vencimiento" name="Vencimiento" type="date" class="form-control" tabindex="8">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nombre de Fabricante</label>
        <input id="fabricante" name="fabricante" type="text" class="form-control" tabindex="9">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Precio de compra</label>
        <input id="precioCompra" name="precioCompra" type="number" step="any" value="0.00" class="form-control" tabindex="10">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Precio de venta</label>
        <input id="precioVenta" name="precioVenta" type="number" step="any" value="0.00" class="form-control" tabindex="11">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Descuento</label>
        <input id="descuento" name="descuento" type="number" step="any" value="0.00" class="form-control" tabindex="12">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Stock minimo</label>
        <input id="stock" name="stock" type="number" class="form-control" tabindex="13">
    </div>
    <a href="\articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>

</form>

@endsection 