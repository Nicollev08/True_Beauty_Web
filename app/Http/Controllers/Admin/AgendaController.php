<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Evento;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index()
    {
        $eventos = Evento::all();
        return view('admin.agendas.index', compact('eventos'));
    }
}
