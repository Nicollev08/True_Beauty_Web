<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Evento;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index()
    {
        $eventos = Evento::all();
        return response()->json($eventos);
    }
    
    public function store(Request $request)
{
    $evento = Evento::create($request->all());
    return response()->json([
        'evento' => $evento,
    ]);
}

    public function show(Evento $evento)
    {
        return response()->json([
            'evento'=>$evento
        ]);
    }

    public function update(Request $request, Evento $evento)
    {
        $evento->update($request->all());
        return response()->json([
            'evento' => $evento,
        ]);
    }

    public function destroy(Evento $evento)
    {
        $evento->delete();
        return response()->json([
            'respuesta'=> true,
        ],200);
    }

}
