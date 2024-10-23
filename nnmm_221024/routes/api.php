<?php

use App\Http\Controllers\DepartamentoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Nombre de endpoint        Clase de controlador            Nombre del método en el controlador
Route::get('/departamentos',[DepartamentoController::class,'obtenerDepartamentos']);
Route::get('/departamentoporzona/{idzona}',[DepartamentoController::class,'obtenerDepartamentosPorZona']);
Route::get('/depto/{iddepto}',[DepartamentoController::class,'obtenerDepartamento']);
Route::post('/crearDepto', [DepartamentoController::class, 'nuevoDepto']);