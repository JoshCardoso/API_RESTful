<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuario = Usuario::all();
        return response()->json($usuario, 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'idperson' => 'required',
            'usuario' => 'required',
            'password' => 'required',
            'habilitado' => 'required',
            'date' => 'required',
            'idrole' => 'required',
            'usuariocreate' => 'required',
            'usuariomodification' => 'required',

        ]);

        try {
            $dados = $request->only([
                'idperson',
                'usuario',
                'password',
                'habilitado',
                'date',
                'idrole',
                'usuariocreate',
                'usuariomodification',
            ]);
            $usuario = Usuario::create($dados);

            return response()->json($usuario, 201);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Erro ao criar o registro.'], 500);
        }
    }

    public function show(Request $request, string $id)
    {
        $usuario = Usuario::find($id);
        return response()->json($usuario, 200);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'apelido' => 'required',
            'usuariocreate' => 'required',
            'usuariomodification' => 'required'
        ]);

        $usuario = Usuario::find($id);
        if (!$usuario) {
            return response()->json(['message' => 'Usuario not found'], 404);
        }

        $dadosUp = $request->only(['firstname', 'lastname', 'apelido', 'usuariocreate', 'usuariomodification']);
        $usuario->update($dadosUp);

        return response()->json($usuario);
    }

    public function destroy(string $id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();
    }
}
