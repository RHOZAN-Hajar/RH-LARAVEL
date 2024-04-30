<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SalaireController;
use App\Http\Controllers\SalarieController;
use App\Http\Controllers\PresenceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PrimeController;
use App\Http\Controllers\StatistiquesController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Controllers\DepencesController;
use App\Http\Controllers\BulletinPaieController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\CongeController;

use App\Http\Controllers\BulletinController;
use App\Http\Controllers\UtilisateurController;




use App\Http\Controllers\AbsenceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/',[PfaController::class,'home'])->name('home');

// <?php

// use App\Http\Controllers\PfaController;
// use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// Route::get('/', [LoginController::class,'show'])->name('login.show');
// Route::post('/', [LoginController::class,'login'])->name('login.login');

// Route::get("/" ,[PfaController::class,'home'])->name('home');
// Route::get("/search",[PfaController :: class ,"search"])->name("search");

// Route::get('/profiles', [PfaController::class,'index']) ->name('profiles.index');
// Route::get('/profiles/{id}', [PfaController::class,'showProfiles'])
// ->where('id', '\d+')
// ->name('profiles.show');

// Route::get('/modifier',[SalarieController::class,"edit"]);
// Route::put('salaries/{id}/edit',[SalarieController::class,"update"]);



// Route::get('/signup' ,[PfaController::class,"create"])->name("create");
// Route::post('/signup/store' ,[PfaController::class,"store"])->name("store");

// Route::get('/logout', [LoginController::class,'logout'])->name('login.logout');


// Route::delete('/profiles/{profile}', [PfaController::class,'destroy'])->name('profiles.destroy');


// Auth::routes(['verify'=>true]);







// Routes pour l'authentification et la vérification d'e-mail
Auth::routes(['verify' => true]);

// Routes protégées par la vérification d'e-mail
Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('salaries',SalarieController::class)
->missing(function (Request $request)
{
    return Redirect::route('salaries.index');
});
});




Route::get('/salarie/{id}', [SalarieController::class, 'showutilisateur'])->name('salaries.showutilisateur');


//template utilisateur
Route::get('/homeAdmin',[TemplateController::class,'indexAdmin'])->name('homeAdmin');
Route::get('/homeEmploye/{id}',[TemplateController::class,'indexEmploye'])->name('homeEmploye');
Route::get('/inforamtion/{id}',[SalarieController::class,'showEmploye'])->name('information');
//demande de conge
Route::get('/conge/{id}', [CongeController::class, 'create'])->name('conge.create');
Route::post('/conge/store', [CongeController::class, 'store'])->name('conge.store');






Route::get('/action', [CongeController::class, 'action'])->name('conge.action');
Route::post('/action/store', [CongeController::class, 'ActionStore'])->name('action.store');

Route::post('/conge/{id}/accept', [CongeController::class,'accept'])->name('conge.accept');
Route::post('/conge/{id}/reject', [CongeController::class,'reject'])->name('conge.reject');
Route::get('/action/{id}', [CongeController::class, 'MesConge'])->name('conge.MesConge');


// Dans routes/web.php

Route::get('/profile', [SalarieController::class,'showProfile'])->name('profile');



// salaries
Route::resource('salaries',SalarieController::class)
->missing(function (Request $request)
{
    return Redirect::route('salaries.index');
});
Route::get('/verify_email/{hash}',[SalarieController::class,'verifyEmail']);

Route::get('/liste_salarie',function(){
    return view('salaries/liste_salarie');
});

Route::get('/All_salaries',[SalarieController::class,'showAll']);


Route::get('/All_salaries', [SalarieController::class,'search'])->name('search');



// abscences
Route::get('/marquer_abscence',[PresenceController::class,'index'])->name('marquer_abscence');
Route::get('/liste_presence',[PresenceController::class,'show'])->name('liste_presence');
Route::post('/store',[PresenceController::class,'store']);
Route::get('/filtrer_abscence', [PresenceController::class,'filtre'])->name("filtrer_abscence");

// -Depences
Route::get('/depences_par_année', [DepencesController::class,'index'])->name('depences_par_année');
Route::get('/depence_annuelles', [DepencesController::class,'depence_annuelles'])->name('depence_annuelles');
Route::get('/depences_par_mois/{id_salarie}',[DepencesController::class,'show'])->name('depences_par_mois');
Route::get('/marquer_depences',[DepencesController::class,'create']);
Route::post('/store_depences',[DepencesController::class,'store'])->name('store_depences');
Route::get('/filtrer_depences/{id}',[DepencesController::class,'filtrer_depences'])->name('filtrer_depences');
Route::get('/filtrer_depences_A_modifier/{id}',[DepencesController::class,'filtrer_depences_A_modifier'])->name('filtrer_depences_A_modifier');
Route::post('/update_depences/{id_salarie}/{date_depence}',[DepencesController::class,'update'])->name('update_depences');
Route::get('/edit_depences/{id}',[DepencesController::class,'edit'])->name('edit_depences');




Route::put('/depenses/{idDepense}/motif/{numeroMotif}', [DepencesController::class, 'updateMotif'])->name('depenses.updateMotif');



//salaire
Route::get('/salaire',[SalaireController::class,'index']);
Route::get('/Bulletin_Paie_Par_Salarie/{id}',[SalaireController::class,'show'])->name('Bulletin_Paie_Par_Salarie');
Route::get('/filtrer_Bulletin_Paie_Par_Date/{id}',[SalaireController::class,'filtrer_Bulletin_Paie_Par_Date'])->name('filtrer_Bulletin_Paie_Par_Date');


// Primes
Route::get('/primes',[PrimeController::class,'index'])->name('prime.index');
Route::get('/create_prime/{id}',[PrimeController::class,'create'])->name('prime.create');
Route::post('/stote_primes',[PrimeController::class,'store'])->name('stote_prime');

// homepage






//abscene
Route::get('/absences/create', [AbsenceController::class, 'create'])->name('absences.create');
Route::post('/absences', [AbsenceController::class, 'store'])->name('absences.store');
Route::get('/absences', [AbsenceController::class, 'index'])->name('absences.index');
Route::get('/absences/search', [AbsenceController::class, 'search'])->name('absences.search');




// Route pour l'ajout de prime
Route::post('/primes/ajouter', [PrimeController::class, 'ajouterPrime'])->name('primes.ajouter');

// Route pour la recherche de prime
Route::get('/primes/rechercher', [PrimeController::class, 'rechercherPrime'])->name('primes.rechercher');

// Route pour afficher l'index des primes

Route::get('/primes', [PrimeController::class, 'index'])->name('primes.index');


// Routes pour l'authentification
Route::get('/', [AuthController::class, 'showLoginForm'])->name('log');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


//buletin de paie 
Route::get('/telecharger-bulletin-paie/{id_salarie}', [BulletinController::class, 'telechargerBulletinPaie'])->name('telecharger_bulletin_paie');

?>

