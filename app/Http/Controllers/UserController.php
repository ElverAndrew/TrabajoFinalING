<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function register(Request $request){
        //Validar los datos

        $user = new User();

        $user-> nombre = $request->nombres;
        $user-> apellido = $request->apellidos;
        $user-> email = $request->email;
        $user-> password = Hash::make($request->password);

        $user->save();

        Auth::login($user);

        return redirect(route('inicio'));
    }

    public function login(Request $request){

        //Validar datos

        $credentials = [
            "email" => $request->email,
            "password" => $request->password,
        ];

        $remember = ($request->has('remember') ? true : false);

        if(Auth::attempt($credentials,$remember)){
            $request->session()->regenerate();
            return redirect(route('inicio'));
        }else {
            return redirect('login');
        }
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('inicio');

    }
}
