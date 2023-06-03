<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\Contact;

class ContactController extends Controller
{
    public function enviar(Request $request){
        //Validar los datos

        $contacto = new Contact();

        $contacto-> nombre = $request->nombre;
        $contacto-> email = $request->email;
        $contacto-> telefono = $request->telefono;
        $contacto-> mensaje = $request->mensaje;

        $contacto->save();

        return view('inicio');
    }

}
