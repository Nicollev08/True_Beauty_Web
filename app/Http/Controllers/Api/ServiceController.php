<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return response()->json($services);
    }

    public function store(Request $request)
    {
        $service = Service::create($request->all());
        return response()->json([
            'service' => $service,
        ]);
    }

    public function show(Service $service)
    {
        return response()->json([
            'service' => $service
        ]);
    }

    public function update(Request $request, Service $service)
    {
        $service->update($request->all());
        return response()->json([
            'service' => $service,
        ]);
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return response()->json([
            'respuesta' => true,
        ], 200);
    }
}
