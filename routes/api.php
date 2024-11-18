<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::put('/atualizar/{id}', [AuthController::class, 'atualizar']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);

    //Produtos
    Route::post('/produtos/criar', [ProdutoController::class, 'criarProduto']);
});
