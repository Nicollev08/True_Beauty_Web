<?php

namespace App\Http\Controllers\Admin;

use App\Exports\ServicesExport;
use App\Http\Controllers\Controller;
use App\Models\Service;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.services.index')->only('index');
        $this->middleware('can:admin.services.create')->only('create', 'store');
        $this->middleware('can:admin.services.edit')->only('edit', 'update');
        $this->middleware('can:admin.services.destroy')->only('destroy');
    }

    public function index()
    {
        $services = Service::all();
        return view('admin.services.index', compact('services'));
    }

    public function pdf()
    {
        $services = Service::all();

        foreach ($services as $service) {
            $service->image = Storage::url($service->image);
        }

        $pdf = PDF::loadView('admin.services.pdf', compact('services'));
        $pdf->getDomPDF()->set_option("isHtml5ParserEnabled", true);
        $pdf->getDomPDF()->set_option("isPhpEnabled", true);
        
        
        return $pdf->stream();
    }


    public function excel()
    {
        return Excel::download(new ServicesExport, 'services.xlsx');
    }

    public function create()
    {
        return view('admin.services.create');
    }


    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'duration' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $service = new Service($request->except('image'));

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/services_images');
            $service->image = 'services_images/' . basename($imagePath);
        }

        $service->save();
        return redirect()->route('admin.services.index')->with('info', 'Servicio creado exitósamente');
    }

    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }


    public function update(Request $request, Service $service)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'duration' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/services_images');
            $service->image = 'services_images/' . basename($imagePath);
        }

        $service->update($request->except('image'));

        return redirect()->route('admin.services.index')->with('info', 'Servicio actualizado exitosamente.');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('admin.services.index')->with('info', 'Servicio eliminado exitosamente.');
    }
}
