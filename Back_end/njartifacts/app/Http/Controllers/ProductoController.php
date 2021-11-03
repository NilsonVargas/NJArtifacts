<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::all();
        return $productos;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $variable_registros->campo=$request->campo
        $productos = new Producto();
        $productos->valor=$request->valor;
        $productos->nombre=$request->nombre;
        $productos->descripcion=$request->descripcion;
        $productos->images_list=$request->images_list;
        $productos->categoria=$request->categoria;
        $productos->cantidad=$request->cantidad;

        $productos->fecha_Insercion=$request->fecha_Insercion;

        $productos->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $productos = Producto::findOrFail($request->id);
        $productos->valor=$request->valor;
        $productos->nombre=$request->nombre;
        $productos->descripcion=$request->descripcion;
        $productos->images_list=$request->images_list;
        $productos->categoria=$request->categoria;
        $productos->cantidad=$request->cantidad;

        $productos->fecha_Insercion=$request->fecha_Insercion;
        $productos->save();

        return $productos;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $productos = Producto::destroy($request->id);
        
        return $productos;
    }
}