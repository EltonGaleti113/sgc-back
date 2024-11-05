<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    // Método para listar produtos
    public function index()
    {
        // Aqui você pode buscar produtos do banco de dados e retorná-los
        return response()->json(['mensagem' => 'Lista de produtos']);
    }

    // Método para mostrar um produto específico
    public function show($id)
    {
        // Aqui você pode buscar um produto específico pelo ID
        return response()->json(['mensagem' => "Produto com ID: $id"]);
    }

    // Método para criar um novo produto
    public function store(Request $request)
    {
        // Aqui você pode validar os dados e salvar um novo produto
        return response()->json(['mensagem' => 'Produto criado com sucesso']);
    }

    // Método para atualizar um produto existente
    public function update(Request $request, $id)
    {
        // Aqui você pode validar os dados e atualizar um produto existente
        return response()->json(['mensagem' => "Produto com ID: $id atualizado com sucesso"]);
    }

    // Método para deletar um produto
    public function destroy($id)
    {
        // Aqui você pode deletar um produto pelo ID
        return response()->json(['mensagem' => "Produto com ID: $id deletado com sucesso"]);
    }
}
