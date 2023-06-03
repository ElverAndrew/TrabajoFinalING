<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Pago;

class PagosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pago');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pago');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        //Validar los datos

        $datosCliente = request()->except('_token');

        Pago::insert($datosCliente);

        return view('pago');
    }
}
