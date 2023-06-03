<?php

namespace App\Http\Controllers;
use \App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['productos'] = Product::paginate(100);
        return view('administracion.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administracion.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosProducto = request()->except('_token');

        Product::insert($datosProducto);

        // return view('administracion.index');

        return response()->json($datosProducto);

        // if($request->hasFile('imagen')){
        //     $datosProducto['imagen'] = $request->file('imagen')->store('uploads', 'public');
        // }
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

        $producto = Product::findOrFail($id);
        return view('administracion.edit', compact('producto'));
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
        //
        $datosProducto = request()->except(['_token', '_method']);
        Product::where('id', '=', $id)->update($datosProducto);

        $producto = Product::findOrFail($id);
        return view('administracion.edit', compact('producto'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        Product::destroy($id);
        return redirect('administracion');
    }
}
