<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate(Evento::$rules);
        Evento::create([
            'title'       => $request->title,
            'descripcion' => $request->descripcion,
            'start'       => $request->start,
            'end'         => $request->end,
            'userId'      => Auth::user()->id
        ]);
    }

    /**
     * Get all data of events
     *
     * @param Evento $evento
     * @return void
     */
    public function show(Evento $evento)
    {
        $evento = Evento::where('userId', Auth::user()->id)->get();
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
        request()->validate(Evento::$rules);
        $evento->update([
            'title'       => $request->title,
            'descripcion' => $request->descripcion,
            'start'       => $request->start,
            'end'         => $request->end,
            'userId'      => Auth::user()->id
        ]);
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
