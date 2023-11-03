<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tip;

class TipController extends Controller
{
    public function index()
    {
     $tips = Tip::all();
     return response()->json(compact('tips'));
      }
  
     public function create()
     {
        return response()->json(compact('tip'));
     }
  
    
     public function store(Request $request)
     {
  
         $request->validate([
             'name' => 'required',
             'description' => 'required',
             'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
         ]);
     
         $tip = new Tip($request->except('image'));
     
         if ($request->hasFile('image')) {
             $imagePath = $request->file('image')->store('public/tips_images');
             $tip->image = 'tips_images/' . basename($imagePath);
         }
     
         $tip->save();
         return response()->json(compact('tip'));
  
     }
  
     public function edit(Tip $tip)
     {
        return response()->json(compact('tip'));
     }
  
  
     public function update(Request $request, Tip $tip)
     {
      $request->validate([
          'name' => 'required',
          'description' => 'required',
          'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
      ]);
  
      
      $tip->name = $request->input('name');
      $tip->description = $request->input('description');
  
      if ($request->hasFile('image')) {
          $imagePath = $request->file('image')->store('public/tips_images');
          $tip->image = 'tips_images/' . basename($imagePath);
      }
  
      $tip->save();
  
      return response()->json(compact('tip'));
     }
  
     public function destroy(Tip $tip)
     {
         $tip->delete();
         return response()->json(compact('tip'));
     }
}
