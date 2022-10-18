<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\TipoDocumentoController;

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

Route::get('/', function () {
    return view('inicio/index');
});

Route::get('/usuarios', function(){
    return view('usuarios/index');
});

Route::get('/menuprincipal', function(){
    return view('menuprincipal/index');
});

Route::get('/servicios', function(){
    return view('servicios/index');
});

Route::resource('cliente', ClienteController::class);
Route::resource('tipoDocumento', TipoDocumentoController::class);