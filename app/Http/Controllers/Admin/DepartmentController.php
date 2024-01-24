<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.departments.index')->only('index');
        $this->middleware('can:admin.departments.create')->only('create', 'store');
        $this->middleware('can:admin.departments.edit')->only('edit', 'update');
        $this->middleware('can:admin.departments.destroy')->only('destroy');
    }
    public function index(){
        $departments = Department::all();
        return view('admin.departments.index', compact('departments'));
    }

    public function create(Department $department)
    {
        $departments = Department::all();
        return view('admin.departments.create', compact('departments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $department = new Department($request->all());

        $department->save();

        return redirect()->route('admin.departments.index')->with('info', 'Departamento creado exitósamente');
    }


    public function edit(Department $department)
    {
        return view('admin.departments.edit', compact('department'));
    }

    public function update(Request $request, Department $department)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $department->update($request->all());

        return redirect()->route('admin.departments.index', $department)->with('info', 'Departamento actualizado exitosamente.');
    }


    public function destroy(Department $department)
    {
        $department->delete();
        return redirect()->route('admin.departments.index')->with('info', 'Departamento eliminado exitosamente.');
    }
}
