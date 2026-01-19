<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function showLogin() {
        return view('login.login');
    }public function login(Request $request) {

        $credentials = $request->validate([
            'nombre_usuario' => 'required',
            'password' => 'required',
        ]);


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('home');
        }


        return back()->withErrors([
            'nombre_usuario' => 'The provided credentials do not match our records.',
        ])->withInput();
    }

    public function register(Request $request) {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'rol' => 'required|string|rol|max:255', 
            'password' => 'required|string|min:8|confirmed', 
        ]);

        $user = Auth::create([
            'nombre' => $request->nombre,
            'password' => Hash::make($request->password), 
            'rol' => $request->rol,
        ]);

        Auth::login($user);

        return redirect()->route('home')->with('success', '¡Cuenta creada con éxito!');
    }

    public function logout(Request $request) {
        Auth::logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    
        return redirect('/');
    }

}
