<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/personas', [PersonaController::class, 'test']);

Route::delete('/personas/{id}', [PersonaController::class, 'delete']);

Route::put('/personas/{id}', [PersonaController::class, 'editar']);

Route::get('/personas', [PersonaController::class, 'index']);

Route::get('/personas/search/{nombre}', [PersonaController::class, 'buscar']);


