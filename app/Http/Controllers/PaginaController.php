<?php

namespace App\Http\Controllers;

use App\Models\Pagina;
use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function index()
    {
        $pagina = Pagina::all();
        return response()->json($pagina, 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required',
            'usuariocreate' => 'required',
            'usuariomodification' => 'required',
            'url' => 'required',
            'estado' => 'required',
            'nome' => 'required',
            'descripcion' => 'required',
            'icone' => 'required',
            'tipo' => 'required'
        ]);

        try {
            $dados = $request->only(['date','usuariocreate','usuariomodification','url','estado','nome','descripcion','icone','tipo']);
            $pagina = Pagina::create($dados);

            return response()->json($pagina, 201);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Erro ao criar o registro.'], 500);
        }
    }

    public function show(Request $request, string $id)
    {
        $pagina = Pagina::find($id);
        return response()->json($pagina, 200);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'date' => 'required',
            'usuariocreate' => 'required',
            'usuariomodification' => 'required',
            'url' => 'required',
            'estado' => 'required',
            'nome' => 'required',
            'descripcion' => 'required',
            'icone' => 'required',
            'tipo' => 'required'
        ]);

        $pagina = Pagina::find($id);
        if (!$pagina) {
            return response()->json(['message' => 'Pagina not found'], 404);
        }

        $dadosUp = $request->only(['date','usuariocreate','usuariomodification','url','estado','nome','descripcion','icone','tipo'
        ]);
        $pagina->update($dadosUp);

        return response()->json($pagina);
    }

    public function destroy(string $id)
    {
        $pagina = Pagina::find($id);
        $pagina->delete();
    }
}
