<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProdutorController;
use App\Http\Controllers\PropriedadeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application.
| These routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//No código abaixo só vai entrar quando o usuário estiver autenticado.
Route::middleware('auth:sanctum')->group(function () {
    //Rotas para criar o produtor, propriedade e buscar pelo ID.
    Route::post('/produtores', [ProdutorController::class, 'store']);
    Route::post('/propriedades', [PropriedadeController::class, 'store']);
    Route::get('/produtores/{idProdutor}', [ProdutorController::class, 'show']);
    Route::get('/propriedades/{idPropriedade}', [PropriedadeController::class, 'show']);
});

// Rota para autenticar o usuário.
Route::post('/login', [AuthController::class, 'login']);

// Rota para criar usuário no banco de dados, essa classe foi porque eu preciso de um usuário para fazer o restante do processo.
Route::post('/usuarios', [UsuarioController::class, 'store']);
