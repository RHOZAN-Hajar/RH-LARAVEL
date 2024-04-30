<?php

namespace App\Http\Controllers;

use App\Models\Salarie;
use App\Models\Absence;
use App\Models\Depence;
use Illuminate\Http\Request;

class BulletinPaieController extends Controller
{
    public function generateBulletin($id_salarie)
    {
        // Récupérer le salarié
        $salarie = Salarie::findOrFail($id_salarie);

        // Récupérer les informations du salarié
        $num_cnss = $salarie->num_cnss;
        $nom = $salarie->nom;
        $prenom = $salarie->prenom;
        $situation_familiale = $salarie->situation_familiale;
        $date_entree = $salarie->date_entree;
        $cin = $salarie->cin;
        $num_amo = $salarie->num_amo;
        $num_cimr = $salarie->num_cimr;
        $nbre_enfant = $salarie->nbre_enfant;
        $salaire_initial = $salarie->salaire_initial;

        // Calculer le montant des heures supplémentaires à partir des absences
        $heures_supplementaires = Absence::where('id_salarie', $id_salarie)->sum('montant');

        // Récupérer le montant de la CNSS à partir des dépenses avec motif 'cnss'
        $depenses_cnss = Depence::where('motif', 'cnss')->sum('montant');

        // Calculer le total du bulletin de paie
        $total_paie = $salaire_initial + $heures_supplementaires - $depenses_cnss;

        // Retourner la vue avec les données du bulletin de paie
        return view('bulletin.bulletin', compact('num_cnss', 'nom', 'prenom', 'situation_familiale', 'date_entree', 'cin', 'num_amo', 'num_cimr', 'nbre_enfant', 'salaire_initial', 'heures_supplementaires', 'depenses_cnss', 'total_paie'));
    }
}
