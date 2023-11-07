<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }
  
    public function store(Request $request)
    {
        $user = User::create($request->all());
        return response()->json([
            'user' => $user,
            'mensaje' => "Tip creado correctamente"
        ]); 
    }
  
    public function update(Request $request, User $user)
    {
        $user->update($request->all());
        return response()->json([
            'user' => $user,
            'mensaje' => "Tip actualizado correctamente"
        ]);
     }
  
    public function destroy(User $user)
    {
        $user->delete();
        return response()->json([
            'mensaje' => "Tip eliminado correctamente"
        ],200);
    }
}
