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


<a class="btn btn-primary mb-3" href="/salaire"><i class="fas fa-reply"></i>retour</a>
<div class="row">



    <div class="col-12">
        <form action="{{Route('filtrer_Bulletin_Paie_Par_Date',$salarie->id_salarie)}}" method="GET">
            <div class="input-group mb-3">
                {{-- <h4 id="periode">Période: </h4> --}}
                <input type="date" name="date_from" class="form-control input">
                <input type="date" name="date_to" class="form-control">
                <button class="btn btn-primary" type="submit">chercher</button>
            </div>
        </form>
    </div>

    <div class="col-6 bloc">
       
        <div><h4>N° CNSS : <span class="info">{{$salarie->num_cnss}}</span> </h4> </div>
    </div>

    <div class="col-6 bloc">
        <h4> Nom et Prénom :  <span class="info">{{$salarie->nom}}</span> | <span class="info">{{$salarie->prenom}}</span>  </h4>
    </div>

</div>

<table class="table" style="background: rgb(223, 223, 223)">
    <thead class="thead-dark">
        <tr>
            <th>Mission</th>
            <th>Situation familialle</th>
            {{-- <th>Date de naissance</th> --}}
            <th>Date d'embauche</th>
            <th>N° CIN</th>
    </thead>
    <tbody>
            <tr>
                <td><span class="info">{{$salarie->mission}}</span></td>
                <td><span class="info">{{$salarie->situation_familialle}}</span></td>
                {{-- <td><span class="info">{{$salarie->date_naissance}}</span></td> --}}
                <td><span class="info">{{$salarie->date_entree}}</span></td>
                <td><span class="info">{{$salarie->cin}}</span></td>
            </tr>
    </tbody>
</table>

<table class="table" style="background: rgb(223, 223, 223)">
    <thead class="thead-dark">
        <tr>
            <th>N° CNSS</th>
            <th>N° AMO</th>
            <th>N° CIMR</th>
            <th>Nbre D'enfants</th>
    </thead>
    <tbody>
            <tr>
                <td class="info">{{$salarie->num_cnss}}</td>
                <td class="info">{{$salarie->num_amo}}</td>
                <td class="info">{{$salarie->num_cimr}}</td>
                <td class="info">{{$salarie->nbre_enfant}}</td>
            </tr>
    </tbody>
</table>

<table class="table" style="background: rgb(223, 223, 223)">
    <thead class="thead-dark">
        <tr>
            <th>Libellé</th>
            <th>Valeur (MAD)</th>
    </thead>
    <tbody>
            <tr>
                <td>Salaire De Base</td>
                <td><span class="info">{{$salarie->salaire_actuel}}</span></td>
            </tr>
            <tr>
                <td>Montant heures supplimentéres </td>
                <td><span class="info">{{$heures_sup_montant}}</span></td>
            </tr>
            <tr>
                <td>Montant Jours Abscence</td>
                <td><span class="info">{{$montant_abscence}}</span></td>
            </tr>
            <tr>
                <td>Cotisation CNSS</td>
                <td><span class="info">{{$cotisation_cnss}}</span></td>
            </tr>
            <tr>
                <td>Cotisation AMO</td>
                <td><span class="info">{{$cotisation_amo}}</span></td>
            </tr>
            <tr>
                <td>Cotisation CIMR</td>
                <td><span class="info">{{$cotisation_cimr}}</span></td>
            </tr>
            <tr>
                <td>Montant Pour Nbre D'enfants</td>
                <td><span class="info">{{$montant_nbre_enfants}}</span></td>
            </tr>
            <tr>
                <td>Prime</td>
                <td><span class="info">{{$primes_montant}}</span></td>
            </tr>
            <tr>
                <td><span class="salaire_net">Salaire Net</span>  (aprés additions et restructions)</td>
                <td><span class="info">{{$salaire_net}}</span></td>
            </tr>
    </tbody>
</table>
<div class="salaire">
    <div class="row">
        <div class="col-6">
             <div> <h4>Salaire Brute : <span class="montant">{{$salaire_brute}} <span class="mad">MAD</span> </span> </h4>  <div class="alert alert-success">ce que j'ai depencé sur ce salarie !</div> </div>
        </div>
        <div class="col-6">
             <div> <h4>Salaire Net : <span class="montant">{{$salaire_net}}<span class="mad">MAD</span></span></h4> <div class="alert alert-warning">ce que le salarie a pris !</div></div>
        </div>
     </div>
</div>
<!-- Scripts -->
<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>

    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/swiper.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
         var interleaveOffset = 0.5;

      var swiperOptions = {
        loop: true,
        speed: 1000,
        grabCursor: true,
        watchSlidesProgress: true,
        mousewheelControl: true,
        keyboardControl: true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev"
        },
        on: {
          progress: function() {
            var swiper = this;
            for (var i = 0; i < swiper.slides.length; i++) {
              var slideProgress = swiper.slides[i].progress;
              var innerOffset = swiper.width * interleaveOffset;
              var innerTranslate = slideProgress * innerOffset;
              swiper.slides[i].querySelector(".slide-inner").style.transform =
                "translate3d(" + innerTranslate + "px, 0, 0)";
            }      
          },
          touchStart: function() {
            var swiper = this;
            for (var i = 0; i < swiper.slides.length; i++) {
              swiper.slides[i].style.transition = "";
            }
          },
          setTransition: function(speed) {
            var swiper = this;
            for (var i = 0; i < swiper.slides.length; i++) {
              swiper.slides[i].style.transition = speed + "ms";
              swiper.slides[i].querySelector(".slide-inner").style.transition =
                speed + "ms";
            }
          }
        }
      };

      var swiper = new Swiper(".swiper-container", swiperOptions);    </script>
</body>
</html>
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
  
     .input-group{
            width: 500px;
            float: right;
        }
     h4{
         margin-right: 20px;
         margin-top: 5px;
         margin-left: 20px;
     }
     .bloc{
         border: solid 1px ;
         background-color:rgb(223, 223, 223);
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
        .salaire
        {
            background-color: black;
            border-radius: 3px;
            margin-bottom: 200px;
            margin-top: 30px;
        }
        .alert{
            margin: 10px 20px;
        }
        .montant{
            border-radius:20px;
            background-color: rgb(223, 223, 223);
            color: rgb(161, 77, 77);
        }
        .mad{
            font-size: 12px;
        }
        .salaire_net
        {
            font-weight: bold;
        }
        .info
        {
            color: rgb(170, 111, 111);
            font-weight: bold;
        }
        .col-6{
            margin:  20px  auto ;
        }
        .alert
        {
            margin-top: 20px;
            font-size: 25px;
        }


</style>
