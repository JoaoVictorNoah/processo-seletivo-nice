<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

// Nesssa classe abaixo é a responsável para autenticar o login do usuário e gerar o Token.
class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'nomeUsuario' => 'required',
            'senhaUsuario' => 'required',
        ]);
    
        $user = User::where('nomeUsuario', $request->input('nomeUsuario'))->first();
    
        if (!$user || !Hash::check($request->input('senhaUsuario'), $user->senhaUsuario)) {
            return response()->json('Credenciais inválidas', 401);
        }
    
        $token = $user->createToken('authToken')->plainTextToken;
    
        return response()->json(['token' => $token], 200);
    }
    
    
}
?>