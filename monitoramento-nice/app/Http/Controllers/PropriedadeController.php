<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propriedade;
// Na classe abaixo ela é a responsável para controlar a propriedade.
class PropriedadeController extends Controller
{
    //Aqui a função store é onde cadastra a propriedade no banco de dados.
    public function store(Request $request)
    {
        $request->validate([
            'nomePropriedade' => 'required|string',
            'cadastroRural' => 'required|string',
        ]);

        $propriedade = new Propriedade();
        $propriedade->nomePropriedade = $request->input('nomePropriedade');
        $propriedade->cadastroRural = $request->input('cadastroRural');
        $propriedade->save();

        return response()->json($propriedade, 201);
    }
    // E na função show é onde o usuário vai informar o id do produtor e vai retornar os dados dele, caso não exista vai retornar 'Propriedade não encontrado'.
    public function show($idPropriedade)
{
    $produtor = Propriedade::where('idPropriedade', $idPropriedade)->first();

    if (!$produtor) {
        return response()->json(['error' => 'Propriedade não encontrado']);
    }

    return response()->json($produtor);
}

}
?>