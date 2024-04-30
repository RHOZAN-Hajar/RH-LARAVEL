<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Salarie;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{

    
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
       
    
        $credentials = $request->only('email', 'password');
    
        // Récupérer l'utilisateur par son adresse e-mail
        $user = Salarie::where('email', $credentials['email'])->first();
    
        // Vérifier si l'utilisateur existe et si le mot de passe correspond
        if ($user && Hash::check($credentials['password'], $user->password)) {
            // Redirection basée sur le rôle de l'utilisateur
            if ($user->role === 'admin') {
                return redirect()->route('homeAdmin');
            } elseif ($user->role === 'employe') {
                $id = $user->id_salarie;
                // Pass the user's ID to the homeEmploye route
                return redirect()->route('homeEmploye', ['id' => $id]);
            }
        }
    
        // Si la connexion échoue, redirection avec un message d'erreur
        return redirect()->route('login')->with('error', 'Adresse e-mail ou mot de passe invalide');
    }
    

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}