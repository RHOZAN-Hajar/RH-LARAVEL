<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>RBTzone</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-574-mexant.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <!--

TemplateMo 574 Mexant

https://templatemo.com/tm-574-mexant

-->
   
</head>
<body>
<a class="btn btn-primary" href="{{route('salaries.index')}}"  style="background-color: #EE4036;">retour</a>

<form method="POST" enctype="multipart/form-data" action="{{route('salaries.update',$salarie->id_salarie)}}" >
    @csrf
    @method('PUT')
<div class="row">
    <div class="rows">
     <div class="col-6">
        <div><h2>informations personnels:</h2> </div>
        <div class="form-group">
            <label class="label" for="nom">Nom</label> <input type="text" name="nom" class="form-control" value="{{$salarie->nom}}">
            @error('nom')

                    <strong>
                        {{ $message }}
                    </strong>

            @enderror
            <br>
            <label for="prenom" class="label">Prenom</label> <input type="text" name="prenom" class="form-control" value="{{$salarie->prenom}}">
            @error('prenom')

            <strong>
                {{ $message }}
            </strong>

            @enderror
            <br>
            <label for="email">Email</label> <input type="text" name="email" class="form-control"value="{{$salarie->email}}">
            @error('email')

            <strong>
                {{ $message }}
            </strong>
            @enderror
            <br>
            <label for="cin">Cin</label> <input type="text" name="cin" class="form-control"value="{{$salarie->cin}}">
            @error('cin')

            <strong>
                {{ $message }}
            </strong>

            @enderror
            <br>
            <label for="sex">Sex</label>
            {{-- <input type="text" name="sex" class="form-control" value="{{$salarie->sex}}"> --}}
            <select name="sex" class="form-control">
                <option value="homme">homme</option>
                <option value="femme">femme</option>
            </select>
            @error('sex')

            <strong>
                {{ $message }}
            </strong>

            @enderror
            <br>
            <label for="DateDeNaissance">Date de naissance </label> <input type="date" name="DateDeNaissance" class="form-control"value="{{$salarie->DateDeNaissance}}">
            @error('DateDeNaissance')

            <strong>
                {{ $message }}
            </strong>

            @enderror
            <br>
            <label for="situation_familialle">Situation familliale</label>
            {{-- <input type="text" name="situation_familialle" class="form-control"value="{{$salarie->situation_familialle}}"> --}}
            <select name="situation_familialle" class="form-control">
                <option value="célibataire">célibataire</option>
                <option value="marie">marie</option>
            </select>
            @error('situation_familialle')

            <strong>
                {{ $message }}
            </strong>

            @enderror
            <br>
            <label for="nbre_enfant">Nbre Enfant</label>
            {{-- <input type="text"  name="nbre_enfant" class="form-control"value="{{$salarie->nbre_enfant}}"> --}}
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

            <strong>
                {{ $message }}
            </strong>

            @enderror
            <br>
            <label for="image">image</label> <input type="file" name="image" class="form-control"value="{{asset('/storage/'.$salarie->image)}}">
            @error('image')

            <strong>
                {{ $message }}
            </strong>


            @enderror
            <br>
        </div>
    </div>

    <div class="col-6">
        <div><h2>informations Administratives:</h2> </div>
        <div class="form-group">
            <label for="departement">Departement</label>
            <input type="text" name="departement" class="form-control" value="{{$salarie->departement}}"> 
            
            @error('departement')

            <strong>
                {{ $message }}
            </strong>

            @enderror
            <br>
            <label for="mission">Mission</label>
            {{-- <input type="text" name="mission" class="form-control" value="{{$salarie->mission}}"> --}}
             <input type="text" name="mission" class="form-control"value="{{$salarie->mission}}">
            @error('mission')

            <strong>
                {{ $message }}
            </strong>

            @enderror
            <br>
            <label for="date_entree">Date d'entrée</label> <input type="date" name="date_entree" class="form-control"value="{{$salarie->date_entree}}">
            @error('date_entree')

            <strong>
                {{ $message }}
            </strong>

            @enderror
            <br>
            <label for="salaire_initial">Salaire Initiale</label> <input type="text" name="salaire_initial" class="form-control"value="{{$salarie->salaire_initial}}">
            @error('salaire_initial')

            <strong>
                {{ $message }}
            </strong>

            @enderror
            <br>
            <label for="salaire_actuel">Salaire Actuel</label> <input type="text" name="salaire_actuel" class="form-control"value="{{$salarie->salaire_actuel}}">
            @error('salaire_actuel')

            <strong>
                {{ $message }}
            </strong>

            @enderror
            <br>
        </div>
    </div>
    </div>
    <div class="rowss">
    <div class="col-6">
        <div><h2>Cotisations:</h2> </div>
        <div class="form-group">
            <label for="num_cnss">Num Cnss</label> <input type="text" name="num_cnss" class="form-control"value="{{$salarie->num_cnss}}">
            @error('num_cnss')

            <strong>
                {{ $message }}
            </strong>

            @enderror
            <br>
            <label for="num_amo">Num Amo</label> <input type="text" name="num_amo" class="form-control"value="{{$salarie->num_amo}}">
            @error('num_amo')

            <strong>
                {{ $message }}
            </strong>

            @enderror
            <br>
            <label for="num_cimr">Num Cimr</label> <input type="text" name="num_cimr" class="form-control"value="{{$salarie->num_cimr}}">
            @error('num_cimr')

            <strong>
                {{ $message }}
            </strong>

            @enderror
            <br>
        </div>
    </div>

    <div class="col-6">
        <div><h2>Localisation:</h2> </div>
        <div class="form-group">
            <label for="ville">Ville</label> <input type="text" name="ville" class="form-control"value="{{$salarie->ville}}">
            @error('ville')

            <strong>
                {{ $message }}
            </strong>

            @enderror
            <br>
            <label for="adresse">Adresse</label> <input type="text" name="adresse" class="form-control"value="{{$salarie->adresse}}">
            @error('adresse')

            <strong>
                {{ $message }}
            </strong>

            @enderror
           
            <br>
            <label for="password">Password</label> <input type="text" name="password" class="form-control"value="">
            @error('password')

            <strong>
                {{ $message }}
            </strong>

            @enderror
            <br>
            <label for="role">role</label>
            {{-- <input type="text" name="role" class="form-control"> --}}
            <select name="role" class="form-control">
                <option value="admin">admin</option>
                <option value="employe">employe</option>
            </select>
            @error('role')

            <strong>
                {{ $message }}
            </strong>

            @enderror

        </div>
    </div>

    </div>
    <div class="text-center mt-3">
        <button type="submit" class="btn btn-primary"  style="background-color: #EE4036;"> Modifier</button>
    </div>
</div>

</form>
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
            background-color:#1d2951;
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
            background-color: #222;
            border-radius: 10px;
            padding: 30px;
            margin-top: 50px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        }

        .form-group label {
            color: white;
        }

        .form-control {
            background-color: #333;
            color: white;
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

        .tab2 {
            margin-bottom: 50px;
        }

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 5px;
        }

        th {
            text-align: left;
        }

        strong {
            color: white;
        }

        .photo {
            width: 180px;
            height: 180px;
            margin-left: 80px;
        }

</style>
</html>

