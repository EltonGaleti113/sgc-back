<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::middleware(['sanctum'])->group(function(){
    Route::get('/cadastrar/produtos', ProdutoController::class['criarNovoProduto']);
});