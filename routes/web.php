<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('/usuario', function () {
    return view('usuario.index');
});
Route:: get('/usuario/create',[UsuarioController::class,'create']);
*/
Route::resource('usuario', UsuarioController::class);