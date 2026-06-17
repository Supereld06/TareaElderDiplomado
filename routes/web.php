<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;

Route::get('/', function () {
    return redirect('/productos');
});

Route::get('/productos', [ProductoController::class, 'index']);
Route::get('/productos/create', [ProductoController::class, 'create']);
Route::post('/productos/store', [ProductoController::class, 'store']);
Route::get('/productos/show/{id}', [ProductoController::class, 'show']);
Route::get('/productos/edit/{id}', [ProductoController::class, 'edit']);
Route::put('/productos/update/{id}', [ProductoController::class, 'update']);
Route::delete('/productos/delete/{id}', [ProductoController::class, 'destroy']);
Route::post('/categorias/store', [CategoriaController::class, 'store']);