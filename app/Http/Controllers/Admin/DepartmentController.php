<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
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

        return redirect()->route('admin.departments.index')->with('info', 'Subcategoría creada exitósamente');
    }


    public function edit(Department $department)
    {
        $departments = Department::all();
        return view('admin.departments.edit', compact('departments'));
    }

    public function update(Request $request, Department $department)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $department->update($request->all());

        return redirect()->route('admin.departments.edit', $department)->with('info', 'Subcategoría actualizada exitosamente.');
    }


    public function destroy(Department $department)
    {
        $department->delete();
        return redirect()->route('admin.departments.index')->with('info', 'Subcategoria eliminada exitosamente.');
    }
}
