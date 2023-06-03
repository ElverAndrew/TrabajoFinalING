<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Suscrito;

class SuscritoController extends Controller
{
    public function suscribirse(Request $request){
        //Validar los datos

        $data = new Suscrito();

        $data-> email = $request->email;

        $data->save();

        return redirect(route('inicio'));
    }
}
