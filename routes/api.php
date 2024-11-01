<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\AuthController;

Route::post('/login', AuthController::class, 'login');
Route::post('/logout', AuthController::class, 'logout');

Route::middleware(['auth:sanctum'])->group(function(){
    Route::post('/cadastrar/produtos', [ProdutoController::class, 'criarNovoProduto']);
});