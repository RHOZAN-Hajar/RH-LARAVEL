<?php
// AbsenceController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absence;
use App\Models\Salarie;

class AbsenceController extends Controller
{
    public function create()
    {
        return view('absences.create');
    }

    public function store(Request $request)
    {

        $credentials = $request->only('nom', 'prenom');
        $user = Salarie::where('nom', $credentials['nom'])->first();

        if ($user){
            $absence = new Absence();
            $absence->id_salarie = $user->id_salarie;
            $absence->date = now()->toDateString(); // Date actuelle
            $absence->status = $request->status;
            $absence->conge_medical = $request->conge_medical ?? false;
            $absence->heures_supplementaires = $request->heures_supplementaires;
            $absence->save();
        }
    
    

        

        return redirect()->route('homeAdmin');
    }

    public function index()
    {
        $absences = Absence::whereDate('date', now()->toDateString())->get();
        return view('absences.index', compact('absences'));
    }



   

public function search(Request $request)
{
    $search = $request->input('search');

    $absences = Absence::whereHas('salarie', function ($query) use ($search) {
        $query->where('nom', 'LIKE', '%' . $search . '%')
              ->orWhere('prenom', 'LIKE', '%' . $search . '%');
              
    })->whereDate('date', now()->toDateString())->get();

    return view('absences.search_results', compact('absences'));
}

}
