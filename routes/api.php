<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PaqueteController;
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

Route::get('/clientes', [ClienteController::class, 'index']);
Route::get('/clientes/{id}', [ClienteController::class, 'show']);
Route::post('/clientes', [ClienteController::class, 'store']);
Route::put('/clientes/{id}', [ClienteController::class, 'update']);
Route::delete('/clientes/{id}', [ClienteController::class, 'destroy']);



Route::get('/paquetes', [PaqueteController::class, 'index']);
Route::get('/paquetes/{id}', [PaqueteController::class, 'show']);
Route::post('/paquetes', [PaqueteController::class, 'store']);
Route::put('/paquetes/{id}', [PaqueteController::class, 'update']);
Route::delete('/paquetes/{id}', [PaqueteController::class, 'destroy']);
Route::get('/paquetes/cliente/{id}', [PaqueteController::class, 'findByCliente']);
