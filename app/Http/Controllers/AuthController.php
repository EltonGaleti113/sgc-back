<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthController extends Controller
{
    /**
     * Create new AuthContrller Instance
     * 
     * @return void
     **/
    public function __construct()
    {
        $this->middleware('auth:api', ['except'=>['login']]);
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        try {
            if (!$token=JWTAuth::attempt($credentials)) {
                return response->json(['error'=>'Credenciais Inválidas'], 401);
            }
        } catch (JWTException $e) {
            return response()->json(['error'=>'Erro ao criar token'], 500);
        }
        return response()->json(compact('token'));
    }

    public function logout()
    {
        try{
            JWTAuth::invalidate(JWTAuth::getToken());
            return response()->json(['mensagem'=>'desconectado com sucesso']);
        }catch(JWTException $e){
            return response()->json(['error'=>'falha ao desconectar'], 500);
        }
    }
}
