<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

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


  <!-- ***** Header Area Start ***** -->
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
<body>
<div>
    <div >
      <div >
        <div style="background-image:url(assets/images/slide-01.jpg)">
<br>
<br>
<br>
<br>
<div class="row">
    <div class="col-6">
        <div class="mb-3">
                <a href="/marquer_depences" class="btn btn-success">Nouvelle Depence</a>
        </div>
    </div>

    <form action="{{Route('depence_annuelles')}}" method="GET">
        <div class="col-6 recherche">
            <div class="from_to">Date_from------------->Date_to :</div>
            <div class="input-group mb-3 ">

                <input type="date" name="date_from" class="form-control" >
                <input type="date" name="date_to" class="form-control" >
                <button class="btn btn-primary" type="submit">chercher</button>
            </div>
        </div>
    </form>


</div>
<h3>Depences par année :</h3>
<table class="table" style="background: rgb(223, 223, 223)">
    <thead class="thead-dark">
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Salaire (MAD)</th>
            <th>montant heures supplimentaires (MAD)</th>
            <th>Totale CNSS (MAD)</th>
            <th>Totale AMO (MAD)</th>
            <th>Totale CIMR (MAD)</th>
            <th>Totale primes (MAD)</th>
            <th>Totale montants sur nbre d'enfants (MAD)</th>
            <th>Details</th>

    </thead>
    <tbody>
        @foreach ($salaries as $salarie)
              <tr>
                <td>{{ $salarie->id_salarie}}</td>
                <td>{{ $salarie->nom}}</td>
                <td>{{ $salarie->prenom}}</td>
                <td>{{ $salarie->total_salaire}}</td>
                <td>{{ $salarie->total_salaire}}</td>
                <td>{{ $salarie->total_cnss}}</td>
                <td>{{ $salarie->total_amo}}</td>
                <td>{{ $salarie->total_cimr}}</td>
                <td>{{ $salarie->total_primes}}</td>
                <td>{{ $salarie->total_montant_nbre_enfants}}</td>
                <td><a class="btn btn-info btn_sm" href="{{Route('depences_par_mois',$salarie->id_salarie) }}"> <span style="color:black"><i class="fa fa-folder-open" aria-hidden="true">Details<span class="spinner-grow spinner-grow-sm"></span></i></span> </a></td>
            </tr>
        @endforeach

    </tbody>
</table>

<div class="row">
    <div class="col-4 totale">
        <h4>Totale Depencé Cette Année: <div class="cercle"><div class="total_style">{{$totale_par_année}} <span class="black">MAD</span> </div> </div> </h4>
    </div>

</div>
</body>

<style>
        body {
            background-color: black;
            color: white;
            font-family: 'Poppins', sans-serif;
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
            background-color: #007bff;
            border-color: #007bff;
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
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
            border-radius: 20px;
            padding: 10px 30px;
            margin-top: 20px;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }

        .text-center {
            text-align: center;
        }

        .mt-3 {
            margin-top: 30px;
        }

        
    table{
        margin-top: 30px;
    }
    .tab2{
            margin-bottom: 50px;
        }
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
    th, td {
        padding: 5px;
    }
    th {
        text-align: left;
    }
    .recherche{
        float: right;
    }
    .from_to
    {
        font-weight: bold;
        font-size: 20px;

    }
    .totale
    {
        margin-left: 300px;
        margin-top: 30px;
    }

    .cercle
    {
        border: solid 1px rgb(116, 116, 116);
        border-radius: 50%;
        width: 200px;
        height: 100px;
        background: rgb(206, 206, 206);
        text-align: center;
        margin-left: 50px;
        margin-top: 20px;
    }
    .total_style
    {
        margin-top: 30px;
    }


    </style>
    </html>
