<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthFunctionsController extends Controller
{

    function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|min:8|max:255',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard')->with('success', '¡Bienvenido!');
        }

        return redirect()->route('login.index')
            ->withErrors([
                'email' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
            ])
            ->withInput($request->except('password'));
    }

    public function register(Request $request)
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

        if($user)
        {
            return redirect()->route('login.index')->with('success', 'Usuario registrado correctamente');
        }
    }
}
