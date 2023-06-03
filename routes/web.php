<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SuscritoController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\VistaController;
use App\Http\Controllers\PagosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/inicio', function () {
    return view('welcome');
})->name('inicio');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('/productos', function () {
    return view('productos');
})->name('productos');

//Carrito de compras
// Route::get('/carrito', function () {
//     return view('pago');
// });

// Route::get('/administracion_prod', function () {
//     return view('admin_prod');
// })->name('administracion_prod');

Route::get('/administracion_catg', function () {
    return view('admin_catg');
})->name('administracion_catg');

Route::get('/editar_prod', function () {
    return view('editar_prod');
});

Route::post('/validar-registro',[UserController::class, 'register'])->name('validar-registro');

Route::post('/inicia-sesion',[UserController::class, 'login'])->name('inicia-sesion');

Route::get('/logout',[UserController::class, 'logout'])->name('logout');

// Contacto

Route::post('/contactanos', [ContactController::class, 'enviar'])->name('contactanos');

//Suscribirses de

Route::post('/suscrito', [SuscritoController::class, 'suscribirse'])->name('suscrito');

//Productos
Route::resource('/administracion', ProductController::class);

//Categorias
Route::resource('/categorias', CategoryController::class);

//Devolver Productos
Route::resource('/productos', VistaController::class);

Route::resource('/carrito', PagosController::class);



