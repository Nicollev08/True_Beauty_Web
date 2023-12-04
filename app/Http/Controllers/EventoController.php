<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventoController extends Controller
{

    public function index()
    {
        $statusLabels = [
            Evento::ASESORIA => 'Asesoría',
            Evento::CITA => 'Cita',
        ];

        $services = Service::all();
        $eventos = Evento::all();
        return view('evento.index', compact('eventos', 'services',  'statusLabels'));
    }


    public function store(Request $request)
    {
        request()->validate(Evento::$rules);
        $service = Service::find($request->service_id);

        Evento::create([
            'service_id'   => $request->service_id,
            'type'       => $request->type,
            'descripcion' => $request->descripcion,
            'start' => Carbon::createFromFormat('Y-m-d', $request->start)->toDateTimeString(),
            'user_id'      => Auth::user()->id,
            'title'        => $service->name,
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
        $evento = Evento::where('user_id', Auth::user()->id)->get();
        return response()->json($evento);
    }

    public function edit($id)
    {
        $evento = Evento::find($id);

        $evento->start = Carbon::createFromFormat('Y-m-d H:i:s', $evento->start)->format('Y-m-d');


        return response()->json($evento, 200);
    }

    public function update(Request $request, Evento $evento)
    {
        $request->validate(Evento::$rules);

        $service = Service::find($request->service_id);

        $evento->update([
            'service_id'   => $request->service_id,
            'type'         => $request->type,
            'descripcion'  => $request->descripcion,
            'start'        => $request->start,
            'user_id'      => Auth::user()->id,
            'title'        => $service->name,
        ]);

        return response()->json($evento);
    }


    public function destroy($id)
    {
        $evento = Evento::find($id)->delete();

        return response()->json($evento);
    }
}
