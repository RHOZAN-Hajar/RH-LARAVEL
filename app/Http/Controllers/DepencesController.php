<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Salarie;
use App\Models\Depence;
use Illuminate\Support\Facades\DB;

class DepencesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salaries = salarie::all();

        return view('depences.Depences_Par_Année',compact('salaries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $salaries = Salarie::all();

        return view('depences/Marquer_Depences',compact('salaries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

        ]);

            $id_salarie            = $request->id_salarie;
            $montant               = $request->montant;
            $motif                 = $request->motif;
            $date                  = $request->date;

            $dataSave =  [];
            for ($i=0; $i <count($id_salarie) ; $i++)
            {
                $dataSave[]=[
                    'id_salarie' =>$id_salarie[$i],
                    'montant'    =>$montant[$i],
                    'motif'      =>$motif[$i],
                    'date'       =>$date[$i],
                ];
            }
            Depence::insert($dataSave);
            return redirect()->route('depences_par_année')->with('success','les depences ont bien eté enregistrer');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $depences = Depence::where('id_salarie',$id)->get() ;
        $salarie = Salarie::where('id_salarie',$id)->get()->first();
        $total_depences = 0;

        foreach ($depences as $depence) {
            $total_depences+=$depence->montant;
        }

        return view('depences/Depences_par_Mois',['depences'=>$depences,
                                                  'salarie'=>$salarie,
                                                  'total_depences'=>$total_depences
                                                ]);
    }



    public function edit($id)
    {
        $depences = Depence::where('id_salarie',$id)->get() ;
        $depence_date = $depences->first()->date ;;
        $salarie = Salarie::where('id_salarie',$id)->get()->first();
        $salarie_id =$salarie->id;
        $total_depences = 0;
        return view('depences/modifier_depences',compact('salarie','salarie_id','depences','depence_date','total_depences'));
    }


    public function update(Request $request,$id_salarie,$date_depence)
    {
        $request->validate([

        ]);
        $motif            = $request->motif;
        $montant          = $request->montant;
        $date             = $request->date;
        $i=0;

        $depences = Depence::where('id_salarie',$id_salarie)->where('date',$date_depence)->get();
        foreach ($depences as $depence) {
                 $depence->update(['montant'=>$montant[$i],'motif'=>$motif[$i]]);
                 $i++;
        }




        return redirect()->Route('depences_par_mois',$id_salarie)->with('update','les depences du salarie ont été bien modifier');

    }







    public function depence_annuelles(Request $request)
    {
        $date_from = $request->date_from;
        $date_to = $request->date_to;
        $totale_par_année=0;

        $salaries = salarie::all();
        foreach ($salaries as $salarie)
        {
            $salarie['total_salaire']               = $salarie->Salaire_Par_Date($date_from,$date_to);
            $salarie['total_cnss']                  = $salarie->Cnss_Par_Date($date_from,$date_to);
            $salarie['total_amo']                   =$salarie->Amo_Par_Date($date_from,$date_to);
            $salarie['total_cimr']                  =$salarie->Cimr_Par_Date($date_from,$date_to);
            $salarie['total_primes']                =$salarie->Primes_Par_Date($date_from,$date_to);
            $salarie['total_montant_nbre_enfants']  =$salarie->Montant_Nbre_Enfants_Par_Date($date_from,$date_to);
            $totale_par_année+=$salarie['total_salaire']+$salarie['total_cnss']+$salarie['total_amo']+$salarie['total_cimr']+$salarie['total_primes']+$salarie['total_montant_nbre_enfants'];
        }
        return view('depences.Depences_Par_Année_TotDepence',compact('salaries','totale_par_année'));
    }

    public function filtrer_depences(Request $request,$id)
    {
        $date= $request->date;

        $depences = Depence::where('date',$date)->where('id_salarie',$id)->get();
        $salarie = Salarie::where('id_salarie',$id)->get()->first();
        $total_depences = 0;

        foreach ($depences as $depence) {
            $total_depences+=$depence->montant;
        }

        return view('depences/Depences_par_Mois',['depences'=>$depences,
                                                  'salarie'=>$salarie,
                                                  'total_depences'=>$total_depences
                                                ]);

    }

    public function filtrer_depences_A_modifier(Request $request, $id)
    {
        $Date = $request->date;
    
        $depence = Depence::where('date', $Date)
                          ->where('id_salarie', $id)
                          ->first();
    
        if (!$depence) {
            // Afficher une erreur car aucun enregistrement n'a été trouvé pour l'ID du salarié
            return redirect()->back()->with('error', 'Aucune dépense trouvée pour cet employé.');
        }
    
        $depences = Depence::where('date', $Date)
                           ->where('id_salarie', $id)
                           ->get();
                           
        $salarie = Salarie::where('id_salarie', $id)->first();
        $total_depences = 0;
    
        foreach ($depences as $depence) {
            $total_depences += $depence->montant;
        }
    
        return view('depences/modifier_depences', [
            'depences' => $depences,
            'depence_date' => $depence->date,
            'salarie' => $salarie,
            'total_depences' => $total_depences
        ]);
    }



    // Méthode pour mettre à jour le motif de la dépense en fonction du numéro passé en paramètre
    public function updateMotif(Request $request, $idDepense, $numeroMotif) {
        // Récupérer le montant à partir de la requête
        $montant = $request->input('montant');

        $depense = Depence::find($idDepense);

        // Vérification si la dépense existe
        if(!$depense) {
            return response()->json(['message' => 'La dépense n\'existe pas'], 404);
        }

        // Mettre à jour le motif en fonction du numéro passé en paramètre
        switch ($numeroMotif) {
            case 1:
                $depense->motif = "Poursalaire";
                break;
            case 2:
                $depense->motif = "CNSS";
                break;
            case 3:
                $depense->motif = "AMO";
                break;
            case 4:
                $depense->motif = "CIMR";
                break;
            case 5:
                $depense->motif = "Prime";
                break;
            case 6:
                $depense->motif = "Montant pour nombre d'enfants";
                break;
            default:
                return response()->json(['message' => 'Numéro de motif invalide'], 400);
        }

        // Mettre à jour le montant et la date actuelle
        $depense->montant = $montant;
        $depense->date = now();

        // Sauvegarder les changements
        $depense->save();

        // Calculer le total des dépenses
        $totalDepenses = Depence::sum('montant');

        
        return view('depense.detail', ['depense' => $depense, 'totalDepenses' => $totalDepenses]);

    }


    
}