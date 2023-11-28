<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf; // Agrega la importación de la clase PDF
use Maatwebsite\Excel\Facades\Excel; // Agrega la importación de la clase Excel
use App\Exports\SubcategoriesExport; // Agrega la importación de la clase SubcategoriesExport

class SubcategoryController extends Controller
{
    public function index()
    {
        $subcategories = Subcategory::all();
        return view('admin.subcategories.index', compact('subcategories'));
    }

    public function pdf()
    {
        $subcategories = Subcategory::all();
        $pdf = PDF::loadView('admin.subcategories.pdf', compact('subcategories'));
        return $pdf->stream();
    }

    public function excel()
    {
        return Excel::download(new SubcategoriesExport, 'subcategories.xlsx');
    }

    public function create(Subcategory $subcategory)
    {
        $categories = Category::all();
        return view('admin.subcategories.create', compact('subcategory', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required'
        ]);

        Subcategory::create($request->all());

        return redirect()->route('admin.subcategories.index')->with('info', 'Subcategoría creada exitósamente');
    }

    public function edit(Subcategory $subcategory)
    {
        $categories = Category::all();
        return view('admin.subcategories.edit', compact('subcategory', 'categories'));
    }

    public function update(Request $request, Subcategory $subcategory)
    {
        $request->validate([
            'name' => 'required',
            'categories' => 'required|array'
        ]);

        $subcategory->update($request->only('name'));
        $subcategory->categories()->sync($request->categories);

        return redirect()->route('admin.subcategories.edit', $subcategory)->with('info', 'Subcategoría actualizada exitosamente.');
    }

    public function destroy(Subcategory $subcategory)
    {
        $subcategory->delete();
        return redirect()->route('admin.subcategories.index')->with('info', 'Subcategoria eliminada exitosamente.');
    }
}
