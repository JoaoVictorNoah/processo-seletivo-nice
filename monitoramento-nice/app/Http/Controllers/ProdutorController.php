<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produtor;
// Na classe abaixo ela é a responsável para controlar o produtor.
class ProdutorController extends Controller
{
    //Aqui a função store é onde cadastra o produtor no banco de dados.
    public function store(Request $request)
    {
        $request->validate([
            'nomeProdutor' => 'required|string',
            'cpfProdutor' => 'required|string',
        ]);

        $produtor = new Produtor();
        $produtor->nomeProdutor = $request->input('nomeProdutor');
        $produtor->cpfProdutor = $request->input('cpfProdutor');
        $produtor->save();

        return response()->json($produtor, 201);
    }
    // E na função show é onde o usuário vai informar o id do produtor e vai retornar os dados dele, caso ele não exista vai retornar 'Propriedade não encontrado'.
    public function show($idProdutor)
    {
        $produtor = Produtor::where('idProdutor', $idProdutor)->first();
    
        if (!$produtor) {
            return response()->json(['error' => 'Produtor não encontrado']);
        }
    
        return response()->json($produtor);
    }
    
}
?>