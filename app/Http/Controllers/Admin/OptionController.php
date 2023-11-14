<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Option;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    public function index()
    {
        $options = Option::all();
        return view('admin.options.index', compact('options'));
    }

    public function create()
    {
        return view('admin.options.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required'
        ]);

        $option = new Option($request->all());

        $option->save();

        return redirect()->route('admin.options.index')->with('info', 'Opción creada exitósamente');
    }

    public function edit(Option $option)
    {
        $options = Option::all();
        return view('admin.options.edit', compact('option'));
    }

    public function update(Request $request, Option $option)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required'
        ]);

        $option->update($request->all());

        return redirect()->route('admin.options.index')->with('info', 'Opción actualizado exitosamente.');
    }

    public function destroy(Option $option)
    {
        $option->delete();
        return redirect()->route('admin.options.index')->with('info', 'Opción eliminada exitosamente.');
    }
}
