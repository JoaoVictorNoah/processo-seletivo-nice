<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
// Na classe abaixo ela é a responsável para controlar o usuário.
class UsuarioController extends Controller
{
    //Aqui a função store é onde cadastra o usuário no banco de dados.
public function store(Request $request)
{
    $request->validate([
        'nomeUsuario' => 'required|string',
        'senhaUsuario' => 'required|string',
    ]);

    $user = new User();
    $user->nomeUsuario = $request->input('nomeUsuario');
    $user->senhaUsuario = Hash::make($request->input('senhaUsuario'));
    $user->save();

    return response()->json($user, 201);
}
}
?>