<?php

namespace App\Http\Controllers;

use App\Models\Conge;
use App\Models\Salarie;
use Illuminate\Http\Request;

class CongeController extends Controller
{
    
    
        public function create($id)
        {
            $salarie = Salarie::findOrFail($id);
          
            return view('conge.create',compact('salarie'));
        }
        
    

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'typeDeConge' => 'required|string',
            'certif'=>'file|mimes:pdf',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date',
            'action' => 'string',
        ]);
    
        $user = Salarie::where('nom', $request->nom)
            ->where('prenom', $request->prenom)
            ->first();
    
        if ($user) {
            $conge = new Conge();
            $conge->id_salarie = $user->id_salarie;
            $conge->typeDeConge = $request->typeDeConge;
            $conge->date_debut = $request->date_debut;
            $conge->date_fin = $request->date_fin;
    
          
           if ($request->typeDeConge == 'maladie' && $request->hasFile('certif')) {
            $file = $request->file('certif');
            $path = $file->store('pdf', 'public');
            $conge->certif = '/storage/' . $path; 
        }
    
            $conge->save();
        }
    
        $id = $user->id_salarie;
    
        return redirect()->route('homeEmploye', ['id' => $id])->with('success', 'Demande de congé enregistrée avec succès!');
    }

    public function action()
    { 
        // Fetch all conges with their associated salaries
        $conges = Conge::with('salarie')->get();
        
        return view('conge.action', compact('conges'));
    }
    
    
    public function accept(Request $request, $id)
    {
        $conge = Conge::findOrFail($id);
        $conge->status = 'accepted';
        $conge->admin_comments = $request->input('admin_comments');
        $conge->save();
    
        return redirect()->back()->with('success', 'La demande de vacances a été acceptée avec succès.');
    }
    
    public function reject(Request $request, $id)
    {
        $conge = Conge::findOrFail($id);
        $conge->status = 'rejected';
        $conge->admin_comments = $request->input('admin_comments');
        $conge->save();
    
        return redirect()->back()->with('success', 'La demande de vacances a été rejetée avec succès.');
    }

    public function MesConge($id)
    {
        $salarie = Salarie::findOrFail($id);
        
        $conge = Conge::findOrFail($id);
        return view('conge.MesConge', compact('salarie', 'conge'));
    }


}