<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function index()
    {
        $link = Link::all();
        return response()->json($link, 200);
    }

    public function store(Request $request)
{
    $request->validate([
        'historico' => 'required',
        'data' => 'required',
        'hora' => 'required',
        'usuario' => 'required'
    ]);

    try {

        $ip = $request->ip();
        $navegador = $request->server('HTTP_USER_AGENT');

        $dados = $request->only(['historico', 'data', 'hora', 'usuario']);
        $dados['ip'] = $ip;
        $dados['navegador'] = $navegador;

        $link = Link::create($dados);

        return response()->json($link, 201);
    } catch (\Exception $e) {
        return response()->json(['error' => 'Erro ao criar o registro.'], 500);
    }
}


    public function show(string $id)
    {
        $link = Link::find($id);
        return response()->json($link, 200);
    }

    public function update(Request $request, string $id)
{
    $request->validate([
        'historico' => 'required',
        'idusuario' => 'required',
        'data' => 'required',
        'hora' => 'required',
        'ip' => 'required',
        'navegador' => 'required',
        'usuario' => 'required'
    ]);

    $link = Link::find($id);
    if (!$link) {
        return response()->json(['message' => 'Link not found'], 404);
    }

    $dadosUp = $request->only(['historico', 'idusuario', 'data', 'hora', 'ip', 'navegador', 'usuario']);
    $link->update($dadosUp);

    return response()->json($link);
}


    public function destroy(string $id)
    {
        $link = Link::find($id);
        $link->delete();
    }
}
