<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CategoriaController;
use App\Http\Controllers\Api\ArticuloController;

/**
 * Ruta pública
 */
Route::post('/login', [AuthController::class, 'login']);

/**
 * Rutas protegidas
 */
Route::middleware('auth:sanctum')->group(function () {

/**
* Categorías
*/
Route::get('/categorias', [CategoriaController::class, 'index']);
Route::post('/categorias', [CategoriaController::class, 'store']);
Route::get('/categorias/{id}', [CategoriaController::class, 'show']);
Route::put('/categorias/{id}', [CategoriaController::class, 'update']);
Route::delete('/categorias/{id}', [CategoriaController::class, 'destroy']);

/**
 * Artículos
 */
Route::get('/articulos', [ArticuloController::class, 'index']);
Route::post('/articulos', [ArticuloController::class, 'store']);
Route::get('/articulos/{id}', [ArticuloController::class, 'show']);
Route::put('/articulos/{id}', [ArticuloController::class, 'update']);
Route::delete('/articulos/{id}', [ArticuloController::class, 'destroy']);

});