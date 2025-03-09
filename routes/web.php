<?php

use App\Http\Controllers\EstudianteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/formulario', [EstudianteController::class, 'create']);
//Route::post('/formulario', [EstudianteController::class, 'store']);
//Route::get('/vista_tabla', [EstudianteController::class, 'index']);

Route::resource('estudiantes', EstudianteController::class);
