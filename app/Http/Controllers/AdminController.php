<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DemandeConge;

class AdminController extends Controller
{
    public function afficherDemandesConge()
    {
        $demandes = DemandeConge::with('salarie')->get();
        return view('admin.demandes_conge', compact('demandes'));
    }

    public function traiterDemande(Request $request, $id)
    {
        $demande = DemandeConge::findOrFail($id);

        if ($request->isMethod('DELETE')) {
            $demande->delete();
            return view('admin.refuser_demande');
        }

        if ($demande->jours_demandes > 21) {
            $demande->delete();
            return redirect()->back()->with('error', 'Vous avez pris tous les jours de congé.');
        }

        $demande->statut = 'Accepté';
        $demande->save();
        return view('admin.accepter_demande');
    }
}
