<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index()
    {
        $person = Person::all();
        return response()->json($person, 200);
    }

    public function store(Request $request)
{
    $request->validate([
        'firstname' => 'required',
        'lastname' => 'required',
        'apelido' => 'required',
        'usuariocreate' => 'required',
        'usuariomodification' => 'required'
    ]);

    try {
        $dados = $request->only(['firstname', 'lastname', 'apelido', 'usuariocreate', 'usuariomodification']);
        $person = Person::create($dados);

        return response()->json($person, 201);
    } catch (\Exception $e) {
        return response()->json(['error' => 'Erro ao criar o registro.'], 500);
    }
}

    public function show(Request $request, string $id)
    {
        $person = Person::find($id);
        return response()->json($person, 200);

    }

    public function update(Request $request,string $id){
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'apelido' => 'required',
            'usuariocreate' => 'required',
            'usuariomodification' => 'required'
        ]);
        
        $person = Person::find($id);
        if (!$person) {
            return response()->json(['message' => 'Person not found'], 404);
        }

        $dadosUp = $request->only(['firstname','lastname','apelido','usuariocreate','usuariomodification']);
        $person->update($dadosUp);

        return response()->json($person);
    }

    public function destroy(string $id)
    {
        $person = Person::find($id);
        $person->delete();
    }
}
