<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;


class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articulos = Articulo::all();
        return view('articulo.index')->with('articulos',$articulos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articulo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $articulos = new Articulo();
        $articulos->codigo = $request->get('codigo');
        $articulos->nombreArticulo = $request->get('nombreArticulo');
        $articulos->descripcion = $request->get('descripcion');
        $articulos->ubicacion = $request->get('ubicacion');
        $articulos->cantidad = $request->get('cantidad');
        $articulos->Fabricacion = $request->get('Fabricacion');
        $articulos->Vencimiento = $request->get('Vencimiento');
        $articulos->fabricante = $request->get('fabricante');
        $articulos->precioCompra = $request->get('precioCompra');
        $articulos->precioVenta = $request->get('precioVenta');
        $articulos->descuento = $request->get('descuento');
        $articulos->stock = $request->get('stock');    
        
        $articulos->save();
        
        return redirect('/articulos');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $articulo = Articulo::find($id);
        return view ('articulo.edit')->with('articulo',$articulo);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $articulo = Articulo::find($id);

        $articulo->codigo = $request->get('codigo');
        $articulo->nombreArticulo = $request->get('nombreArticulo');
        $articulo->descripcion = $request->get('descripcion');
        $articulo->ubicacion = $request->get('ubicacion');
        $articulo->cantidad = $request->get('cantidad');
        $articulo->Fabricacion = $request->get('Fabricacion');
        $articulo->Vencimiento = $request->get('Vencimiento');
        $articulo->fabricante = $request->get('fabricante');
        $articulo->precioCompra = $request->get('precioCompra');
        $articulo->precioVenta = $request->get('precioVenta');
        $articulo->descuento = $request->get('descuento');
        $articulo->stock = $request->get('stock');    
        
        $articulo->save();
        
        return redirect('/articulos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $articulo = Articulo::find($id);
        $articulo->delete();
        return redirect('/articulos');
    }
}
