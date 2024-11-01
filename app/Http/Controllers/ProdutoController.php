<?php

namespace App\Http\Controllers;

use App\Http\Requests\CriarProdutoRequest;
use Illuminate\Http\Request;
use App\Models\Produtos;
use Illuminate\Database\QueryException;
use Exception;

class ProdutoController extends Controller
{
    public function __construct(){
        $this->middleware('auth:sanctum');
    }
    public function criarNovoProduto(Request $request){
        try{
            $produto = Produtos::create($request->validated());
        }catch(Exception $e){
            return response(
                "Internal Server Error"
            );
        }
    }
}
