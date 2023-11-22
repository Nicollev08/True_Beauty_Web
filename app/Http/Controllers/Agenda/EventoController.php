<?php

namespace App\Http\Controllers\Agenda;
use App\Models\Evento;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class EventoController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('evento.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
 
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate(Evento::$rules);
        $evento = Evento::create($request->all());
    }

    /**
     * Get all data of events
     *
     * @param Evento $evento
     * @return void
     */
    public function show(Evento $evento)
    {
        $evento = Evento::all();
        return response()->json($evento);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $evento = Evento::find($id);

        $evento->start = Carbon::createFromFormat('Y-m-d H:i:s', $evento->start)->format('Y-m-d');

        $evento->end = Carbon::createFromFormat('Y-m-d H:i:s', $evento->end)->format('Y-m-d');


        return response()->json($evento, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Evento $evento)
    {
        $evento = Evento::findOrFail($evento);

        // Verifica si el usuario autenticado es el propietario del comentario
        if ($evento->user_id !== auth()->user()->id) {
            return redirect()->back()->with('error', 'No tienes permiso para editar este comentario.');
        }
        request()->validate(Evento::$rules);
        $evento->update($request->all());
        return response()->json($evento);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $evento = Evento::find($id)->delete();

        return response()->json($evento);

    }
}

