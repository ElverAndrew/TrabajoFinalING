<?php

namespace App\Http\Controllers;
use \App\Models\Product;

use Illuminate\Http\Request;

class VistaController extends Controller
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
        return view('productos', $datos);
    }
}
