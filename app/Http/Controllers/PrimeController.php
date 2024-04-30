<?php

namespace App\Http\Controllers;
use App\Models\Prime; 
use Illuminate\Http\Request;
use App\Models\Salarie; 

class PrimeController extends Controller
{


//     public function index()
// {
//     $primes = Prime::all(); // Ou tout autre logique de récupération des primes

//     return view('primes.index', compact('primes'));
    public function index()
{
    $primes = Prime::with('salarie')->get(); // Chargement de la relation

    return view('primes.index', compact('primes'));
}



    public function ajouterPrime(Request $request)
    {

        $credentials = $request->only('nom', 'prenom');
        $user = Salarie::where('nom', $credentials['nom'])->first();

        if ($user){
            $prime = new Prime();
            $prime->id_salarie = $user->id_salarie;
            $prime->montant = $request->montant;
            $prime->date = $request->date;
           
           
            $prime->save();
        }

       

        return back()->with('success', 'Prime ajoutée avec succès.');
    }


  





    public function rechercherPrime(Request $request)
{
    $request->validate([
        'date' => 'date',
        'nom' => 'string',
        'prenom' => 'string',
    ]);

    $query = Prime::query();

    if ($request->has('date')) {
        $query->whereDate('date', $request->date);
    }

    if ($request->has('nom')) {
        $query->whereHas('salarie', function ($q) use ($request) {
            $q->where('nom', 'like', '%' . $request->nom . '%');
        });
    }

    if ($request->has('prenom')) {
        $query->whereHas('salarie', function ($q) use ($request) {
            $q->where('prenom', 'like', '%' . $request->prenom . '%');
        });
    }

    $primes = $query->get();

    return view('primes.index', compact('primes'));
}

    
}

