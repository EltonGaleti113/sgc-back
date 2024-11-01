<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produtos;

class ProdutoController extends Controller
{
    public function criarNovoProduto(Request $request){
        $produto = new Produtos();
        $produto->create($request->all());
    }
}
