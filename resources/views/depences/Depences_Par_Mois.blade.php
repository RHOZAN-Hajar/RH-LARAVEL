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




<div class="row">
    <div class="col-12">
        <a class="btn btn-primary "   style="background-color: #EE4036;" id="text" href="/depences_par_année"><i></i>retour</a>
    </div>
</div>

<div class="cordonnees">
    <h3 >Depences par Mois de  : {{$salarie->nom}}  {{$salarie->prenom}}</h3>
</div>

<form action="{{Route('filtrer_depences',$salarie->id_salarie)}}" method="GET">
    <div class="recherche">
        <div class="input-group mb-3 ">
            <input type="date" name="date" class="form-control input" >
            <button class="btn btn-primary" type="submit"  style="background-color: #726AB4;"  >chercher</button>
        </div>
    </div>
</form>


<a href="{{Route('edit_depences',$salarie->id_salarie)}}"  style="background-color: #726AB4;" class="btn btn-danger">Modifier Depence</a>
<br>
<br>
@if(session('update'))
<div class="alert alert-success mt-5 ">
    {{session('update')}}
</div>
@endif

<br>
<br>
<table   id="table" class="table width"  id="table"  >
    <thead class="thead-dark">
        <tr>
            <th>Motif</th>
            <th>Montant (MAD) </th>
            <th >Date/mois</th>
    </thead>
    <tbody>
        @foreach ($depences as $depence)
            <tr>
                <td>{{$depence->motif}}</td>
                <td>{{$depence->montant}}</td>
                <td class="date">{{$depence->date}}</td>
            </tr>
            <tr></tr>
        @endforeach

    </tbody>
</table>
<br>


<div style="background: rgb(223, 223, 223)   ; color:black ; text-align:center ;" >
    
             <h1> Totale Depensé (MAD) :{{$total_depences}} </h1>
  
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
    .cordonnees
    {
        text-align: center;
        margin-bottom: 20px;
        color:white;
        width:100%;
        font-size :30px;
        margin-right: 500px;
        margin-top: 10px;
    }
    .input{
        width:200px;
        height: 40px;
        border-radius:20px;
        text-align:center;
        font-weight: bold;
        font-size:16px;

    }
    .recherche
    {
        width: 500px;
        float: right;
    }

    table{
        margin-top: 30px;
        color:white;
        weight:500px
    }
  
    .tab2{
            margin-bottom: 50px;
        }
    table, th, td {
        border: 2px solid white;
        border-collapse: collapse;
        margin-top: 30px;
        color:white;
 
    }
    th, td {
        padding: 5px;
        width:900px;
    }
    th {
        text-align: left;
        width: 500px;
    }

    .date{
        text-align: center;

    }

    .width{
        width: 349px;
        margin-top: -18px;
        margin-left: 270px;
        
    }
   
    
    .total
    {
        font-size: 30px;
        /* margin-left: 30px; */
    }
    .tot
    {
        background: wheat;
        border-radius: 10px;
        /* margin-left: 300px; */

    }
    #table
    {
        margin-left: 498px;
        width: 391px;

    }
    #titre
    {
        color: white;
    }
   

        body {
            
            color: white;
            background-color:#1d2951;
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

       input{
         width:100px;
        
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

        a{
            text-decoration:none;
        }

        .text-center {
            text-align: center;
        }

        .mt-3 {
            margin-top: 30px;
        }
        #table {
    width: 100%; /* Utilisez 100% de la largeur disponible */
    margin-left: auto;
    margin-right: auto;
    /* Centrez le tableau horizontalement si nécessaire */
}
    </style>

