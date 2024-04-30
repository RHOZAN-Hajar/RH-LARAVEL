<?php

namespace App\Http\Controllers;

use App\Models\Salarie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\profileMail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


// use Illuminate\Support\Facades\Storage;


class SalarieController extends Controller
{
    public $salarie;
    public function __construct()
    {
        $this->salarie=  new Salarie;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * 
     * 
     * 
     * 
     * 
     * 
     * 
     */



     // Dans AuthController.php



     public function showEmploye($id)
     {
         $salarie = Salarie::findOrFail($id);
         return view('salaries.liste_salarieEmploye',compact('salarie'));
     }










    public function index()
    {
        $salaries= Salarie::all();
        return view('salaries.index',compact('salaries'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('salaries.ajouter');
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
            'nom' => ['required'],
            'prenom' => ['required'],
            'email' => ['required', 'email', 'unique:salaries,email'],
            'cin' => ['required'],
            'sex' => ['required'],
            'DateDeNaissance' => ['required'],
            'situation_familialle' => ['required'],
            'nbre_enfant' => 'required|integer', 
            'image' => ['mimes:jpeg,png,jpg,gif|max:2048'],
    
            'departement' => ['required'],
            'mission' => ['required'],
            'date_entree' => ['required'],
            'salaire_initial' => 'required|integer',
            'salaire_actuel' => 'required|integer',
    
            'num_cnss' => ['required'],
            'num_amo' => ['required'],
            'num_cimr' => ['required'],
            
            'ville' => ['required'],
            'adresse' => ['required'],
    
           
            'password' => ['required', 'min:6', 'max:20'],
            'role' => ['required'],
        ]);
    
        $data = $request->all(); // Récupérer toutes les données du formulaire
        $fileName=time().$request->file('image')->getClientOriginalName();
        $path=$request->file('image')->storeAs('images',$fileName,'public');
        $data["image"]='/storage/'.$path;

        
       
    
        // Créer un nouvel enregistrement dans la base de données, verifecation d'email
        Salarie::create($data);
        // Mail::to('projetpfa873@gmail.com')->send(new profileMail($salarie));
    
        
    
    
        return redirect()->route('homeAdmin')->with('success', 'Le salarié a été bien ajouté');
    }
    
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function show($id)
    {
        $salarie = Salarie::findOrFail($id);
        return view('salaries.liste_salarie',compact('salarie'));
    }


    // public function indexutilisateur()
    // {
    //     return view('auth.loginutilisateur');
    // }

    // public function showutilisateur()
    // {
    //     $salarie = auth()->user();

    //     return view('salaries.showutilisateur', compact('salarie'));

    // }


    

     


    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the posts table
        $salaries = Salarie::query()
            ->where('nom', 'LIKE', "%{$search}%")
            ->orWhere('prenom', 'LIKE', "%{$search}%")
            ->get();
    
        // Return the search view with the resluts compacted
        return view('salaries.All_salaries', compact('salaries'));
    }
    


    

    public function showAll()
    {
        $salaries = Salarie::all();
        return view('salaries.All_salaries',compact('salaries'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $salarie = Salarie::find($id);
        return view('salaries.modifier',compact('salarie'));
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
        $request->validate([ 
            'nom' => ['required'],
            'prenom' => ['required'],
            'email' => ['required', 'email'],
            'cin' => ['required'],
            'sex' => ['required'],
            'DateDeNaissance' => ['required'],
            'situation_familialle' => ['required'],
            'nbre_enfant' => 'required|integer', 
            'image' => ['mimes:jpeg,png,jpg,gif|max:2048'],
    
            'departement' => ['required'],
            'mission' => ['required'],
            'date_entree' => ['required'],
            'salaire_initial' => 'required|integer',
            'salaire_actuel' => 'required|integer',
    
            'num_cnss' => ['required'],
            'num_amo' => ['required'],
            'num_cimr' => ['required'],
            
            'ville' => ['required'],
            'adresse' => ['required'],
    
           
            'password' => ['required'],
            'role' => ['required'],

            
        ]);
    
        // Récupérer toutes les données validées
        $data = $request->all();
    
        // Vérifie s'il y a une image, puis stocke-la
       

            $data = $request->all();
            if($request->hasFile('image')){
            $fileName=time().$request->file('image')->getClientOriginalName();
            $path=$request->file('image')->storeAs('images',$fileName,'public');
            $data["image"]='/storage/'.$path;
       
            }
        // Mettre à jour le salarié avec les données validées
        $salarie = Salarie::find($id);
        $salarie->update($data);
    
        return redirect()->route('homeAdmin')->with('update', 'Le salarié a été bien modifié');
    }
    

    // public function verifyEmail(string $hash){
    //     [$createdAt,$id]=explode('///',base64_decode($hash));
    //     $salarie=Salarie::findOrFail($id);
      
    //     $nom=$salarie->nom;
    //     $email=$salarie->email;
    //     $salarie->fill([
    //         'email_verified'=>time()
    //     ])->save();
    //     return view('salaries.email_verified',compact('nom','email'));
    // }





    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $salarie = Salarie::find($id);
        $salarie->delete();
        return redirect()->route('salaries.index')->with('delete','le salarie a été bien supprime');

    }
}