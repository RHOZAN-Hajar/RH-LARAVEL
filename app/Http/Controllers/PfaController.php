<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Http\Controllers;
use App\Http\Controllers\PfaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;



class PfaController extends Controller
{
    public function home(){
        return view('home');
    }



    public function create(){
        return view('profile.create');
    }


    public function store(UserRequest $request){
      $formFields=$request->validated();
      $formFields['password']=Hash::make($request->passwird);
      User::create($formFields);
      return redirect()->route('home')->with('success','Votre profile est bien cree');
    }


   public function search(){
    $search_text=$_GET['query'];
    $employees=User::where("name","like","%".$search_text."%")->get();
    return view('profile.search',compact('employees'));

   }

   public function destroy($id){
        $users = User::find($id);
        if (!$users) {
            return redirect()->route('profiles.index')->with('Profile non trouvé.');
        }

        $users->delete();
        return redirect()->route('profiles.index')->with('Profile supprimé avec succès.');
       
    }


    public function logout(){

        Session::flush();
        Auth::logout();


        return redirect()->route('login.show');
        //to_route('login');
    }
    public function index(){
        $users=User::all();
        return view('profile.index',compact('users'));
    }
    public function showLogin(){
        return view("profile.login");
    }

    

    public function login(Request $request){
    $email = $request->email;
    $password = $request->password;
    $credentials = ['email' => $email, 'password' => $password];
   
    if(Auth::attempt($credentials)){
        // Successful login
        $request->session()->regenerate();
        return view("home")->with("success", "Vous êtes bien connecté.");
     }else{
        // Failed login
        return back()->withErrors([
            'email' => 'Email ou mot de passe incorrect.'
        ])->withInput($request->only('email'));
     }
    }

  
   public function edit(int $id){
    $user=User::findOrFail($id);
    // return $user;
    return view('profile.edit',compact('user'));
   }

   public function update(Request $request,int $id){
        $request->validate(['name'=>'required|max:255|string',
        'email'=>'required|max:255|string']);
        User::findOrFail($id)->update([
            'name'=>$request->name,
            'email'=>$request->email
        ]);
        return redirect()->route('profiles.index')->with('Profil modifie avec succès.');


   }
    
  

}



