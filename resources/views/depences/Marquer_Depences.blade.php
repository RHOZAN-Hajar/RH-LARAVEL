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
<div  >
    <div >
      <div >
        <div  style="background-image:url(assets/images/slide-01.jpg)">
<br>
<br>
<br>
<br>
<div class="row">
    <div >
        <a class="btn btn-primary "   style="background-color: #EE4036;"  href="/depences_par_année"><i></i>retour</a>
    </div>
</div>

<form action="{{Route('store_depences')}}" method="POST">
@csrf

    <table class="table" >
        <thead class="thead-dark">
            <tr>
                <th>Id_Salarie</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>developpement</th>
                <th>Motif</th>
                <th>Montant</th>
                <th>Date</th>
            </tr>
        </thead>

        <tbody>
             @foreach ($salaries as $salarie)
                <tr>
                    <td><input type="text" name="id_salarie[]" value="{{$salarie->id_salarie}}"  readonly> </td>
                    <td>{{$salarie->prenom}}</td>
                    <td>{{$salarie->nom}}</td>
                    <td>{{$salarie->departement}}</td>
                    <td><input type="text" name="motif[]" value="salaire"  readonly> </td>
                    <td><input type="text" name="montant[]" id=""value="{{$salarie->salaire_actuel}}" ></td>
                    <td><input type="date" name="date[]" class="date" value="<?= date('Y-m-d', time()); ?>"></td>
                </tr>
                {{-- <tr>
                    <td><input type="text" name="id_salarie[]" value="{{$salarie->id}}"  readonly> </td>
                    <td>{{$salarie->prenom}}</td>
                    <td>{{$salarie->nom}}</td>
                    <td>{{$salarie->departement}}</td>
                    <td><input type="text" name="motif[]" value="heures_spplémentaires"  readonly> </td>
                    <td><input type="text" name="montant[]" id=""value="0" ></td>
                    <td><input type="date" name="date[]" class="date" value="<?= date('Y-m-d', time()); ?>"></td>
                </tr> --}}
                <tr>
                    <td><input type="text" name="id_salarie[]" value="{{$salarie->id_salarie}}" aria-readonly=""> </td>
                    <td>{{$salarie->prenom}}</td>
                    <td>{{$salarie->nom}}</td>
                    <td>{{$salarie->departement}}</td>
                    <td><input type="text" name="motif[]" value="cnss" readonly></td>
                    <td><input type="text" name="montant[]" id=""value="{{$salarie->salaire_actuel *0.048}}"></td>
                    <td><input type="date" name="date[]" class="date" value="<?= date('Y-m-d', time()); ?>"></td>
                </tr>
                <tr>
                    <td><input type="text" name="id_salarie[]" value="{{$salarie->id_salarie}}" aria-readonly=""> </td>
                    <td>{{$salarie->prenom}}</td>
                    <td>{{$salarie->nom}}</td>
                    <td>{{$salarie->departement}}</td>
                    <td><input type="text" name="motif[]" value="amo" readonly></td>
                    <td><input type="text" name="montant[]" id=""value="{{$salarie->salaire_actuel *0.0226}}"></td>
                    <td><input type="date" name="date[]" class="date" value="<?= date('Y-m-d', time()); ?>"></td>
                </tr>
                <tr>
                    <td><input type="text" name="id_salarie[]" value="{{$salarie->id_salarie}}" aria-readonly=""> </td>
                    <td>{{$salarie->prenom}}</td>
                    <td>{{$salarie->nom}}</td>
                    <td>{{$salarie->departement}}</td>
                    <td><input type="text" name="motif[]" value="cimr" readonly></td>
                    <td><input type="text" name="montant[]" id=""value="{{$salarie->salaire_actuel *0.06}}"></td>
                    <td><input type="date" name="date[]" class="date" value="<?= date('Y-m-d', time()); ?>"></td>
                </tr>
                <tr>
                    <td><input type="text" name="id_salarie[]" value="{{$salarie->id_salarie}}" aria-readonly=""> </td>
                    <td>{{$salarie->prenom}}</td>
                    <td>{{$salarie->nom}}</td>
                    <td>{{$salarie->departement}}</td>
                    <td><input type="text" name="motif[]" value="prime" readonly></td>
                    <td><input type="text" name="montant[]" id=""value="0"></td>
                    <td><input type="date" name="date[]" class="date" value="<?= date('Y-m-d', time()); ?>"></td>
                </tr>
                <tr>
                    <td><input type="text" name="id_salarie[]" value="{{$salarie->id_salarie}}" aria-readonly=""> </td>
                    <td>{{$salarie->prenom}}</td>
                    <td>{{$salarie->nom}}</td>
                    <td>{{$salarie->departement}}</td>
                    <td><input type="text" name="motif[]" value="montant_nbre_enfants" readonly></td>
                    <td><input type="text" name="montant[]" id=""value="{{$salarie->nbre_enfant*200}}"></td>
                    <td><input type="date" name="date[]" class="date" value="<?= date('Y-m-d', time()); ?>"></td>
                </tr>
                <tr ><td style="background: #726AB4;"></td></tr>


            @endforeach
        </tbody>
    </table>
    <div class="button">
         <button class="btn btn-success enregistrer btn-primary  "    style="background-color: #726AB4;"  type="submit" >Enregistrer</button>


    </div>
   
</form>


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
          
            border-radius: 10px;
            padding: 30px;
            margin-top: 50px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        }

        .form-group label {
            color: white;
        }

        .form-control {
           
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

       

        .btn-danger {
          
            border-radius: 20px;
            padding: 10px 30px;
            margin-top: 20px;
            font-weight: bold;
            transition: all 0.3s ease;
        }

       

        .text-center {
            text-align: center;
        }

        .mt-3 {
            margin-top: 30px;
        }
       .button{
            width: 70%; 
            margin: 0 auto; 
    }

    table{
        margin-top: 30px;
    }
    .tab2{
            margin-bottom: 50px;
        }
    table, th, td {
        border: 2px solid white;
        border-collapse: collapse;
        color:white;
    }
    th, td {
        padding: 5px;
    }
    th {
        text-align: left;
    }

    .enregistrer{
        margin-top: 20px;
        margin-left: 440px;
        text-align: center;
        width:300px;
  

    }
    .text-center .form-group {
        text-align: center;
    }
    input{
        background-color:transparent;
        color:white;
    }
    </style>

</html>