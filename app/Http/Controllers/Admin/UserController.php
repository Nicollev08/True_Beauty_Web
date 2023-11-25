<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use PDF;
use Maatwebsite\Excel\Facades\Excel; // Agregado: Importar la clase Excel
use App\Exports\UsersExport; // Agregado: Importar la clase UsersExport

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.users.index')->only('index');
        $this->middleware('can:admin.users.edit')->only('edit', 'update');
    }

    public function index()
    {
        return view('admin.users.index');
    }

    public function pdf()
    {
        $users = User::all();
        $pdf = PDF::loadView('admin.users.pdf', compact('users'));
        return $pdf->stream();
    }

    public function excel()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = new User($request->all());
        $user->save();

        return redirect()->route('admin.users.index')->with('info', 'Usuario creado exitósamente');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(User $user)
    {
        $roles = Role::all();
        return view('admin.users.edit', compact('user', 'roles'));
    }

    public function update(Request $request, User $user)
    {
        $user->roles()->sync($request->roles);
        return redirect()->route('admin.users.edit', $user)->with('info', 'Se asignaron los roles correctamente');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index')->with('info', 'Usuario eliminado exitósamente');
    }
}
