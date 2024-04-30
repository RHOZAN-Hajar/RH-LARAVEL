<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salarie;

class TemplateController extends Controller
{
    public function indexAdmin(){
        return view('frontend.masterAdmin');
    }

    public function indexEmploye($id)
    {
            $salarie = Salarie::findOrFail($id);
            $fullName = $salarie->nom . ' ' . $salarie->prenom;
            return view('frontend.masterEmploye', compact('salarie', 'fullName'));
      
    }
}
