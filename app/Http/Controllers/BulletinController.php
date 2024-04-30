<?php

namespace App\Http\Controllers;

use App\Models\Salarie;
use App\Models\Absence;
use App\Models\Depence;
use Illuminate\Http\Request;
use PDF;

class BulletinController extends Controller
{
    public function telechargerBulletinPaie($id_salarie)
    {
        // Récupérer les informations sur le salarié
        $salarie = Salarie::findOrFail($id_salarie);
        
        // Calculer le salaire de base
        $salaire_base = $salarie->salaire_actuel;

        // Calculer le montant des heures supplémentaires
        $heures_supplementaires = Absence::where('id_salarie', $id_salarie)
                                    ->sum('heures_supplementaires');

        // Calculer le montant des congés médicaux
        $conges_medicaux = Absence::where('id_salarie', $id_salarie)
        ->where('conge_medical', 0)
        ->where('status', 'absent')
        ->count();
        
        // Calculer les cotisations CNSS
        $cotisation_cnss = $salarie->nbre_enfant * 100; // Exemple de calcul, à adapter selon les règles

        // Calculer les cotisations AMO et CIMR
        $cotisation_amo = $salarie->salaire_actuel * 0.05; // Exemple de calcul, à adapter selon les règles
        $cotisation_cimr = $salarie->salaire_actuel * 0.02; // Exemple de calcul, à adapter selon les règles

        // Calculer le montant des primes
        $prime = Depence::where('motif', 'prime')
                        ->sum('montant');

        // Calculer le salaire net
        $salaire_net = $salaire_base + $heures_supplementaires  * ($salaire_base / 30) - $conges_medicaux * ($salaire_base / 30) - $cotisation_cnss - $cotisation_amo - $cotisation_cimr + $prime;

        // Spécifier le chemin vers la police Poppins
        $fontPath = storage_path('fonts/Poppins-Regular.ttf');

        // Créer le bulletin de paie au format PDF
        $pdf = PDF::loadView('salaires.bulletin_pai', compact('salarie', 'salaire_base', 'heures_supplementaires', 'conges_medicaux', 'cotisation_cnss', 'cotisation_amo', 'cotisation_cimr', 'prime', 'salaire_net'));

        // Définir le chemin vers la police Poppins
        $pdf->getDomPDF()->getOptions()->setFontDir(storage_path('fonts/'));
        $pdf->getDomPDF()->getOptions()->setDefaultFont('Poppins');

        // Télécharger le PDF
        return $pdf->download('bulletin_paie_' . $salarie->nom . '_' . $salarie->prenom . '.pdf');
    }
}
