<?php

namespace App\Http\Controllers;

use App\Models\Historico;
use Illuminate\Http\Request;

class HistoricoController extends Controller
{
    public function index()
    {
        $historico = Historico::all();
        return response()->json($historico, 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'idrole'=>'required',
            'idpagina' => 'required',
            'description' => 'required',
            'hora'=> 'required',
            'usuariocreate' => 'required',
            'usuariomodification' => 'required']);

        try {
            $dados = $request->only(['idrole','idpagina','hora','description','usuariocreate','usuariomodification']);
            $historico = Historico::create($dados);

            return response()->json($historico, 201);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Erro ao criar o registro.'], 500);
        }
    }

    public function show(string $id)
    {
        $historico = Historico::find($id);
        return response()->json($historico, 200);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
        'idrole'=> 'required',
        'idpagina' => 'required',
        'description' => 'required',
        'hora'=> 'required',
        'usuariocreate' => 'required',
        'usuariomodification' => 'required']);

        $historico = Historico::find($id);
        if (!$historico) {
            return response()->json(['message' => 'Historico not found'], 404);
        }

        $dadosUp = $request->only(['idrole','idpagina','description','hora','usuariocreate','usuariomodification']);
        $historico->update($dadosUp);

        return response()->json($historico);
    }

    public function destroy(string $id)
    {
        $historico = Historico::find($id);
        $historico->delete();
    }
}


