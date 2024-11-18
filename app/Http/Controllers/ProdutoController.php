<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produtos;

class ProdutoController extends Controller
{
    // Método para listar produtos
    public function index()
    {
        // Aqui você pode buscar produtos do banco de dados e retorná-los
        return response()->json(['mensagem' => 'Lista de produtos']);
    }

    public function criarProduto(Request $request)
    {
        dd($request);
        try {
         $dadosProduto = $request-> all();
         $produto = Produtos::create($dadosProduto);
            return response()->json(['mensagem' => 'Produto criado com sucesso'], 201);
        } catch (\Exception $e) {
            return response()->json(['mensagem' => 'Erro ao criar produto'], 500);
        }
    }
}
