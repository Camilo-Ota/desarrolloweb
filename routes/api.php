<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PedidoController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

use App\Http\Controllers\ProductoController;

Route::get('/productos', [ProductoController::class, 'index']);

// Ruta para listar todos los pedidos
Route::get('/pedidos', [PedidoController::class, 'index']);

// Ruta para crear un nuevo pedido
Route::post('/pedidos', [PedidoController::class, 'store']);

// Ruta para obtener un pedido específico
Route::get('/pedidos/{id}', [PedidoController::class, 'show']);

// Ruta para actualizar un pedido
Route::put('/pedidos/{id}', [PedidoController::class, 'update']);

// Ruta para eliminar un pedido
Route::delete('/pedidos/{id}', [PedidoController::class, 'destroy']);

use App\Http\Controllers\AuthController;

// Ruta para el login
Route::post('/login', [AuthController::class, 'login']);

