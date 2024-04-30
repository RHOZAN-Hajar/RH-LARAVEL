<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>RBTzone</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-574-mexant.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <!-- Custom CSS for this page -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>

<body>

    <!-- ** Header Area Start ** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="index.html" class="logo">
                      <img src="images/logo1.jpeg" alt="" style="width: 100px; height: auto;">
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                      <li class="scroll-to-section"><a href="#top" class="active">Acceuil</a></li>
                          <li class="scroll-to-section"><a href="{{route('conge.action')}}" >Les demandes de conge</a></li>
                          
                          <li class="scroll-to-section"><a > ︁Salarie</a></li>
                          <li class="has-sub">
                              <a href="javascript:void(0)"></a>
                              <ul class="sub-menu">
                                  <li><a href="{{Route('salaries.index')}}">Ajout</a></li>
                                  <li><a href="/All_salaries">Liste</a></li>
                                  
                              </ul>
                          </li>

                          <li class="scroll-to-section"><a> ︁Feuille de presence</a></li>
                          <li class="has-sub">
                              <a href="javascript:void(0)"></a>
                              <ul class="sub-menu">
                                  <li><a href="/absences/create">Noter </a></li>
                                  <li><a href="{{route('absences.index')}}">Liste</a></li>
                                  
                              </ul>
                          </li>

                          <li class="scroll-to-section"><a > ︁Bulletin de paie</a></li>
                          <li class="has-sub">
                              <a href="javascript:void(0)"></a>
                              <ul class="sub-menu">
                                  <li><a href="/depences_par_année">Dépenses </a></li>
                                  <li><a href="/salaire">Salaires</a></li>
                                  <li><a href="{{route('primes.index')}}">Primes</a></li>
                                  
                              </ul>
                          </li>

 
                          <li><a style="background-color: #726AB4;" href="/">Se deconnecter</a></li>
                      </ul>        
                             
                      
                      <!-- ***** Menu End ***** -->
                  </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ** Header Area End ** -->

    <!-- ** Main Banner Area Start ** -->
    <div>
        <div>
            <div style="background-image:url('{{ asset('assets/images/slide-01.jpg') }}')">
                <div class="container full-screen d-flex justify-content-center align-items-center">
                    <div class="form-container">
                        <!-- Begin Form -->
                        <form action="{{ route('salaries.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="row">
                                <!-- First Column -->
                                <div class="col-6">
                                    <div><h2>informations personnels:</h2> </div>
                                    <div class="form-group">
                                        <label class="label" for="nom">Nom</label> <input type="text" name="nom" class="form-control" >
                                        @error('nom')
                                            <strong>{{ $message }}</strong>
                                        @enderror
                                        <br>
                                        <label for="prenom" class="label">Prenom</label> <input type="text" name="prenom" class="form-control" >
                                        @error('prenom')
                                            <strong>{{ $message }}</strong>
                                        @enderror
                                        <br>
                                        <label for="email">Email</label> <input type="text" name="email" class="form-control">
                                        @error('email')
                                            <strong>{{ $message }}</strong>
                                        @enderror
                                        <br>
                                        <label for="cin">Cin</label> <input type="text" name="cin" class="form-control">
                                        @error('cin')
                                            <strong>{{ $message }}</strong>
                                        @enderror
                                        <br>
                                        <label for="sex">Sex</label>
                                        <select name="sex" class="form-control">
                                            <option value="homme">homme</option>
                                            <option value="femme">femme</option>
                                        </select>
                                        @error('sex')
                                            <strong>{{ $message }}</strong>
                                        @enderror
                                        <br>
                                        <label for="DateDeNaissance">Date de naissance </label> <input type="date" name="DateDeNaissance" class="form-control">
                                        @error('DateDeNaissance')
                                            <strong>{{ $message }}</strong>
                                        @enderror
                                        <br>
                                        <label for="situation_familialle">Situation familliale</label>
                                        <select name="situation_familialle" class="form-control">
                                            <option value="célibataire">célibataire</option>
                                            <option value="marie">marie</option>
                                        </select>
                                        @error('situation_familialle')
                                            <strong>{{ $message }}</strong>
                                        @enderror
                                        <br>
                                        <label for="nbre_enfant">Nbre Enfant</label>
                                        <select name="nbre_enfant" class="form-control">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                        @error('nbre_enfant')
                                            <strong>{{ $message }}</strong>
                                        @enderror
                                        <br>
                                        <label for="image">image</label> <input type="file" name="image" class="form-control">
                                        @error('image')
                                            <strong>{{ $message }}</strong>
                                        @enderror
                                        <br>
                                    </div>
                                </div>
                                <!-- Second Column -->
                                <div class="col-6">
                                    <div><h2>informations Administratives:</h2> </div>
                                    <div class="form-group">
                                        <label for="departement">Departement</label>
                                        <input type="text" name="departement" class="form-control" > 
                                        @error('departement')
                                            <strong>{{ $message }}</strong>
                                        @enderror
                                        <br>
                                        <label for="mission">Mission</label>
                                        <input type="text" name="mission" class="form-control">
                                        @error('mission')
                                            <strong>{{ $message }}</strong>
                                        @enderror
                                        <br>
                                        <label for="date_entree">Date d'entrée</label> <input type="date" name="date_entree" class="form-control">
                                        @error('date_entree')
                                            <strong>{{ $message }}</strong>
                                        @enderror
                                        <br>
                                        <label for="salaire_initial">Salaire Initiale</label> <input type="text" name="salaire_initial" class="form-control">
                                        @error('salaire_initial')
                                            <strong>{{ $message }}</strong>
                                        @enderror
                                        <br>
                                        <label for="salaire_actuel">Salaire Actuel</label> <input type="text" name="salaire_actuel" class="form-control">
                                        @error('salaire_actuel')
                                            <strong>{{ $message }}</strong>
                                        @enderror
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- First Column -->
                                <div class="col-6">
                                    <div><h2>Cotisations:</h2> </div>
                                    <div class="form-group">
                                        <label for="num_cnss">Num Cnss</label> <input type="text" name="num_cnss" class="form-control">
                                        @error('num_cnss')
                                            <strong>{{ $message }}</strong>
                                        @enderror
                                        <br>
                                        <label for="num_amo">Num Amo</label> <input type="text" name="num_amo" class="form-control">
                                        @error('num_amo')
                                            <strong>{{ $message }}</strong>
                                        @enderror
                                        <br>
                                        <label for="num_cimr">Num Cimr</label> <input type="text" name="num_cimr" class="form-control">
                                        @error('num_cimr')
                                            <strong>{{ $message }}</strong>
                                        @enderror
                                        <br>
                                    </div>
                                </div>
                                <!-- Second Column -->
                                <div class="col-6">
                                    <div><h2>Localisation:</h2> </div>
                                    <div class="form-group">
                                        <label for="ville">Ville</label> <input type="text" name="ville" class="form-control">
                                        @error('ville')
                                            <strong>{{ $message }}</strong>
                                        @enderror
                                        <br>
                                        <label for="adresse">Adresse</label> <input type="text" name="adresse" class="form-control">
                                        @error('adresse')
                                            <strong>{{ $message }}</strong>
                                        @enderror
                                        <br>
                                        <label for="password">Mot de passe</label> <input type="password" name="password" class="form-control"value="">
                                        @error('password')
                                            <strong>{{ $message }}</strong>
                                        @enderror
                                        <br>
                                        <label for="role">role</label>
                                        <select name="role" class="form-control">
                                            <option value="admin">admin</option>
                                            <option value="employe">employe</option>
                                        </select>
                                        @error('role')
                                            <strong>{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!-- Submit Button -->
                            <div class="text-center mt-3">
                                <button type="submit" class="btn btn-primary"  style="background-color: #726AB4;"> Ajouter</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<style>
    :root{
    --main-bg-color:#009d63;
    --main-text-color:#009d63;
    --second-text-color:#bbbec5;
    --second-bg-color:#c1efde;
}
.row{
    text-align:center;
    display: flex; 
    justify-content: space-between;
}

input{
    width: 300px;
    padding: 10px;
    margin:10px;
    border-radius:10px;
}
select {
    width: 300px;
    padding: 10px;
    margin:10px;
    border-radius:10px;
}
.primary-text{
    color: var(--main-text-color);
}
.second-text{
    color:var(--second-text-color)  ;
}
.primary-bg{
    background-color:  --main-bg-color;
}
.second-bg{
   background-color:--second-bg-color ;
}


#wrapper{
    overflow-x: hidden;
    background-image: linear-gradient( to right, #fffbd5, #b20a2c);
    /* background-image: linear-gradient( to right, #fc4a1a, #f7b733); */
     /* background-image: linear-gradient( to right, #74ebd5,  #ACB6E5); */
    /* background-image: linear-gradient( to right, #F2994A, #F2C94C); */
    /* background-image: linear-gradient( to right, #ff7e5f, #feb47b); */
    /* background-image: url("mybd4.jpg"); */
    /* background-size: cover; */
}

#sidebar-wrapper{
    min-height: 100vh;
    /* margin-left: -18rem; */
    transform: margin 0.25s ease-out;
}
#sidebar-wrapper .sidebar-heading{
    padding:0.875rem 1.25rem;
    font-size:1.2rem;
}
#sidebar-wrapper .list-group{
    width: 15rem;
}
#page-content-wrapper{
    min-width: 100vw;
}
#wripper.toggled #sidebar-wripper{
    margin-left: 0;
}
#menu-toggle{
    cursor: pointer;
}
.dropdown-menu{
    margin-left: 900px;
}
.list-group-item{
    border: none;
    padding: 20px 30px;
}
list-group-item.active{
    background-color: transparent;
    color: var(--main-text-color);
    font-weight: bold;
    border: none;
}
@media(min-width:768px){
    #sidebar-wripper{
        margin-left: 0;
    }
    #page-content-wrapper{
        min-width: 0;
        width: 100%;
    }
    #wripper.toggled #sidebar-wrapper{
        margin-left: -15rem;
    }
}

#logout{
    color: black;
}

body {
            color: black;
            font-family: 'Poppins', sans-serif;
        }
a {
    text-decoration: none;
}

        h2 {
            color: white;
            text-align: center;
            margin-top: 50px;
        }

        .form-container {
            display: flex;
            background-color: transparent;
            border-radius: 10px;
            padding: 30px;
            margin-top: 100px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            justify-content: space-between
        }

        .form-group label {
            color: white;
        }

        .form-control {
            background-color: transparent;
            color: white;
            justify-content: space-between;
        }

        .btn-primary {
          border-radius: 20px;
            padding: 10px 30px;
            decoration:None;
            margin-top: 20px;
            font-weight: bold;
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
            decoration:None;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
            border-radius: 20px;
            padding: 10px 30px;
            margin-top: 20px;
            font-weight: bold;
            transition: all 0.3s ease;
            decoration:None;
        }

        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
            decoration:None;
        }

        .text-center {
            text-align: center;
        }

        .mt-3 {
            margin-top: 30px;
        }

        
</style>


</html>