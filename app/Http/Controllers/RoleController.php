<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $role = Role::all();
        return response()->json($role, 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'role'=> 'required',
            'usuariocreate'=> 'required',
            'usuariomodification'=> 'required'
        ]);

        try {
            $dados = $request->only(['role','usuariocreate','usuariomodification']);
            $role = Role::create($dados);

            return response()->json($role, 201);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Erro ao criar o registro.'], 500);
        }
    }

    public function show(string $id)
    {
        $role = Role::find($id);
        return response()->json($role, 200);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'role'=> 'required',
            'usuariocreate'=> 'required',
            'usuariomodification'=> 'required'
        ]);

        $role = Role::find($id);
        if (!$role) {
            return response()->json(['message' => 'Role not found'], 404);
        }

        $dadosUp = $request->only(['role','usuariocreate','usuariomodification']);
        $role->update($dadosUp);

        return response()->json($role);
    }

    public function destroy(string $id)
    {
        $role = Role::find($id);
        $role->delete();
    }
}
