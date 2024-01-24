<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Department;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.cities.index')->only('index');
        $this->middleware('can:admin.cities.create')->only('create', 'store');
        $this->middleware('can:admin.cities.edit')->only('edit', 'update');
        $this->middleware('can:admin.cities.destroy')->only('destroy');
    }

    public function index(){
        $cities = City::all();
        return view('admin.cities.index', compact('cities'));
    }

    public function create(City $city)
    {
        $departments = Department::all();
        $cities = City::all();
        return view('admin.cities.create', compact('cities', 'departments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'cost' => 'required',
            'department_id' => 'required',
            
        ]);

        $city = new City($request->all());

        $city->save();

        return redirect()->route('admin.cities.index')->with('info', 'Subcategoría creada exitósamente');
    }


    public function edit(City $city)
    {
        
        $departments = Department::all();
        return view('admin.cities.edit', compact('city', 'departments'));
    }

    public function update(Request $request, City $city)
    {
        $request->validate([
            'name' => 'required',
            'cost' => 'required',
            'department_id' => 'required',
        ]);

        $city->update($request->all());

        return redirect()->route('admin.cities.edit', $city)->with('info', 'Subcategoría actualizada exitosamente.');
    }


    public function destroy(City $city)
    {
        $city->delete();
        return redirect()->route('admin.cities.index')->with('info', 'Subcategoria eliminada exitosamente.');
    }
}
