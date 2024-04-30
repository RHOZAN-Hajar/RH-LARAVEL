<?php

namespace App\Http\Controllers;

use App\Models\Salarie;
use App\Models\Absence;
use App\Models\Depence;
use App\Models\Primes;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Dompdf\Options;

class SalaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salaries = Salarie::all();
        return view('salaires.Bulletin_Paie',compact('salaries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $salarie = Salarie::find($id);
        return view('salaires/Bulletin_Paie_Par_Salarie',compact('salarie'));
        
    }


  

// public function show($id)
// {
//     $salarie = Salarie::find($id);

//     // Calculer le montant des absences du salarié
//     $abscences = Absence::where('id_salarie', $id)->get();
//     $montant_abscence = 0;
//     foreach ($abscences as $absence) {
//         // Calculez le montant de l'absence en fonction du salaire du salarié
//         // Supposons que le salaire du salarié est $salarie->salaire_actuel
//         $montant_abscence += $absence->nombre_jours * ($salarie->salaire_actuel / 30); // Ou utilisez la logique appropriée pour calculer le montant de l'absence
//     }

//     return view('salaires/Bulletin_Paie_Par_Salarie', compact('salarie', 'montant_abscence'));
// }




















    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     *
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function filtrer_Bulletin_Paie_Par_Date(Request $request ,$id)
    {
        $date_from = $request->date_from;
        $date_to = $request->date_to;

        $salarie  = Salarie::where('id_salarie',$id)->get()->first();
        $montant_nbre_enfants = $salarie->nbre_enfant * 200;

        $abscence = count(Absence::whereBetween('date', [$date_from, $date_to])->where('id_salarie',$id)->where('conge_medical','0')->get());
        $montant_abscence = $abscence * ($salarie->salaire_actuel / 26);

        $depence_cnss = Depence::where('date',$date_from)->where('id_salarie',$id)->where('motif','cnss')->get()->first();
        $cotisation_cnss = $depence_cnss ? $depence_cnss->montant : 0;

$depence_amo = Depence::where('date', $date_from)->where('id_salarie', $id)->where('motif', 'amo')->first();
$cotisation_amo = $depence_amo ? $depence_amo->montant : 0;

$depence_cimr = Depence::where('date', $date_from)->where('id_salarie', $id)->where('motif', 'cimr')->first();
$cotisation_cimr = $depence_cimr ? $depence_cimr->montant : 0;

$primes = Primes::where('date', $date_from)->where('id_salarie', $id)->first();
$primes_montant = $primes ? $primes->montant : 0;

$heures_sup = Absence::whereBetween('date', [$date_from, $date_to])->where('id_salarie', $id)->first();
$heures_sup_montant = $heures_sup ? ($heures_sup->heures_supplémentaire * ($salarie->salaire_actuel / 26 * 8)) : 0;

$salaire_net = $salarie->salaire_actuel + $montant_nbre_enfants + $primes_montant - $montant_abscence + $heures_sup_montant;

$salaire_brute = $salaire_net + $cotisation_cnss + $cotisation_amo + $cotisation_cimr + $heures_sup_montant;

     
     return view('salaires/Bulletin_Paie_Par_Salarie_filtrée')->with('salarie', $salarie)->with('cotisation_cnss', $cotisation_cnss)->with('cotisation_amo', $cotisation_amo)->with('cotisation_cimr', $cotisation_cimr)->with('montant_nbre_enfants', $montant_nbre_enfants)->with('montant_abscence', $montant_abscence)->with('primes_montant', $primes_montant)->with('salaire_net', $salaire_net)->with('salaire_brute', $salaire_brute)->with('heures_sup_montant', $heures_sup_montant);

    }


   




}