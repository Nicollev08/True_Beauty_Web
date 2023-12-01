<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
  public function index()
  {
    $products = Product::all();
    return response()->json($products);
  }

  public function store(Request $request)
  {
    $request->validate([
      'name' => 'required',
      'description' => 'required',
      'image_path' => 'nullable|mimes:jpeg,png,jpg,gif,svg',
      'price' => 'required',
      'quantity' => 'required',
      'status' => 'nullable',
      'subcategory_id' => 'required',
    ]);


    $nombre = '';

    if ($request->hasFile('image_path')) {
      $file = $request->file('image_path');
      $cadena = $file->getClientOriginalName();
      $cadenaConvert = strtr($cadena, " ", "_");
      $nombre = Str::uuid() . '_' . $cadenaConvert;

      $ruta = storage_path('app/public/products_images') . '/' . $nombre;

      Image::make($file)->resize(900, null)->save($ruta);
    }

    if ($request->filled('image_path') && empty($request->file('image_path'))) {
      $nombre = ''; // O cualquier valor predeterminado que desees
    } else {
      $nombre = $request->input('image_path', ''); // Establecer el valor predeterminado si no está presente
    }

    $sku = uniqid();
    $request->merge(['sku' => $sku]);

    $product = Product::create([
      'sku' => $sku,
      'name' => $request->name,
      'description' => $request->description,
      'image_path' => $nombre,
      'price' => $request->price,
      'quantity' => $request->quantity,
      'status' => $request->status,
      'subcategory_id' => $request->subcategory_id,
    ]);

    return response()->json($product, 200);
  }

  public function show($id): JsonResponse
  {
    $product = Product::find($id);

    if (!$product) {
      return response()->json(['error' => 'Content not found']);
    }

    return response()->json($product, 200);
  }

  public function update(Request $request, $id)
  {
    try {
      $product = Product::findOrFail($id);

      $request->validate([
        'name' => 'required',
        'description' => 'required',
        'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg', // Permite que sea nulo
        'price' => 'required',
        'quantity' => 'required',
        'status' => 'required',
        'subcategory_id' => 'required',
      ]);

      if ($request->hasFile('image_path')) {
        $destination = public_path() . $product->image_path;

        $file = $request->file('image_path');
        $cadena = $file->getClientOriginalName();
        $cadenaConvert = strtr($cadena, " ", "_");
        $nombre = Str::random(10) . $cadenaConvert;

        $file->move('storage/products_images/', $nombre);

        if ($product->image_path != '' && file_exists(public_path() . '/' . $product->image_path)) {
          unlink(public_path() . '/' . $product->image_path);
        }

        $product->image_path = '/storage/products_images/' . $nombre;
      }

      $sku = uniqid();
      $request->merge(['sku' => $sku]);

      $product->sku = $sku;
      $product->name = $request->name;
      $product->description = $request->description;
      $product->price = $request->price;
      $product->quantity = $request->quantity;
      $product->status = $request->status;
      $product->subcategory_id = $request->subcategory_id;

      $product->save();

      return response()->json($product, 200);
    } catch (\Exception $e) {
      return response()->json(['error' => 'Error: ' . $e->getMessage()], 500);
    }
  }

  public function destroy(Product $product)
  {
    $product->delete();
    return response()->json([
      'mensaje' => "Producto eliminado correctamente"
    ], 200);
  }
}
