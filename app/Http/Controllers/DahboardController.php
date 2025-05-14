<?php

namespace App\Http\Controllers;

use App\Models\TypeDocument;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DahboardController extends Controller
{
    function index()
    {
        $TypeDocuments = TypeDocument::get();
        return view('dashboard.index', compact('TypeDocuments'));
    }

    public function createUser(Request $request)
    {
         $request->validate([
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|min:8|max:255',
            'rut' => 'required|min:8',
            'birthdate' => 'required|date',
            'type_identification' => 'required',
            'full_name' => 'required|min:3|max:255',
        ]);

        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'rut' => $request->rut,
            'birthdate' => $request->birthdate,
            'type_identification' => $request->type_identification,
            'name' => $request->full_name,
        ]);

        return redirect()->route('dashboard.users.index')->with('success', 'Usuario creado correctamente');
    }

    public function editUser($id)
    {
        $user = User::findOrFail($id);
        $TypeDocuments = TypeDocument::get();
        return view('dashboard.edit', compact('user', 'TypeDocuments'));
    }

    public function updateUser(Request $request, $id)
    {
        $request->validate([
            'full_name' => 'required|min:3|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'rut' => 'required|min:8',
            'birthdate' => 'required|date',
            'type_identification' => 'required',
            'password' => 'nullable|min:8|confirmed',
            'status' => 'required|boolean',
        ]);


        $user = User::findOrFail($id);
        $user->name = $request->full_name;
        $user->email = $request->email;
        $user->rut = $request->rut;
        $user->birthdate = $request->birthdate;
        $user->type_identification = $request->type_identification;
        $user->status = $request->status;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();
        return redirect()->route('dashboard.users.index')->with('success', 'Usuario actualizado correctamente');
    }

    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->status = 0;
        $user->save();
        return redirect()->route('dashboard.users.index')->with('success', 'Usuario eliminado correctamente');
    }

    public function indexUsers()
    {
        $users = User::orderBy('id', 'desc')->get();
        return view('dashboard.users', compact('users'));
    }
}
