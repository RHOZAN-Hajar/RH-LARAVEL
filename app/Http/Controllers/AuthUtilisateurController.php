<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salarie;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthUtilisateurController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:salaries',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $salarie = Salarie::create([
            'nom' => $request->nom,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        Auth::login($salarie);

        return redirect()->route('dashboard');
    }

    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function dashboard()
    {
        $salarie = auth()->user();
        return view('dashboard', compact('salarie'));
    }
}
