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
        <div>
<br>
<br>
<br>
<br>

<br>
<form class="input-group mb-3 recherche" action="{{ route('search') }}" method="GET">
    <input type="text" name="search" class="form-control" placeholder="Recheche" aria-label="Recipient's username" aria-describedby="button-addon2" required/>
    <button  class="btn btn-success " type="submit" id="button-addon2"  style="background-color: #726AB4;">chercher</button>
</form>
@if($salaries->isNotEmpty())
    @foreach ($salaries as $salarie)
        <div >
            <p></p>
            
        </div>
    @endforeach
@else 
    <div>
        <h2>Pas de Resultats!</h2>
    </div>
@endif






 @foreach ($salaries as $salarie) 



<br>
<table class="table" >
    <thead class="thead-dark" >
      <tr>
        <th scope="col">id</th>
        <th scope="col">Nom</th>
        <th scope="col">Prenom</th>
        <th scope="col">Cin</th>
        <th scope="col">Sex</th>
        <th scope="col">Date de naissance</th>
        <th scope="col">situation_familialle</th>
        <th scope="col">Nbr_Enfant</th>
        <th scope="col">Image</th>
        <th scope="col">Departement</th>
        <th scope="col">Mission</th>
        <th scope="col">DAte_entrée</th>
      </tr>
    </thead>

    <tbody>
      <tr>
        <th scope="col">{{$salarie->id_salarie}}</th>
        <td>{{$salarie->nom}}</td>
        <td>{{$salarie->prenom}}</td>
        <td >{{$salarie->cin}}</td>
        <td >{{$salarie->sex}}</td>
        <td >{{$salarie->DateDeNaissance}}</td>
        <td >{{$salarie->situation_familialle}}</td>
        <td >{{$salarie->nbre_enfant}}</td>
        <td><img src="{{asset($salarie->image)}}"   width='100' height='100' class='img img-responsive'></td>
        <td >{{$salarie->departement}}</td>
        <td >{{$salarie->mission}}</td>
        <td >{{$salarie->date_entree}}</td>
    </tbody>
</table>

<table class="table tab2" >
    <thead class="thead-dark">
      <tr>
        <th scope="col">Salaire_Initial</th>
        <th scope="col">Salaire_Actuel</th>
        <th scope="col">Num_Cnss</th>
        <th scope="col">Num_Amo</th>
        <th scope="col">Num_Cimr</th>
        <th scope="col">Ville</th>
        <th scope="col">Adresse</th>
        <th scope="col">Email</th>
       
      </tr>
    </thead>

    <tbody>
      <tr>
        <td >{{$salarie->salaire_initial}}</td>
        <td >{{$salarie->salaire_actuel}}</td>
        <td >{{$salarie->num_cnss}}</td>
        <td >{{$salarie->num_amo}}</td>
        <td >{{$salarie->num_cimr}}</td>
        <td >{{$salarie->ville}}</td>
        <td >{{$salarie->adresse}}</td>
        <td >{{$salarie->email}}</td>
        
      </tr>
    </tbody>
</table>
@endforeach
</div >
</div >
</div>
</div>
</body>
<style>
.tab2{
        margin-bottom: 50px;
    }
table, th, td {
    border: 2px solid white;
    border-collapse: collapse;

}

td{
  color:white;
}
th, td {
    padding: 5px;
}
  th {
    text-align: left;
}
#t01 {
  width: 100%;
  
}
#t00 {
  width: 100%;
  

}
.recherche{
    width: 400px;
    margin-left:1200px;
    float: right;
    background-color: #726AB4;
}
.photo
{
    width: 180px;
    height: 180px;
    margin-left: 80px;

}

</style>


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
<style>


 
        body {
            color: white;
            font-family: 'Poppins', sans-serif;
           
            background:url(assets/images/slide-01.jpg)  fixed;
            height: 1000vh;
        }

        

        h2 {
            color: white;
            text-align: center;
            margin-top: 50px;
        }

        .form-container {
            border-radius: 10px;
            padding: 30px;
            margin-left:20px;
            margin-top: 10px;
           
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

        .btn-danger:hover {
          background-color: #726AB4;
        }

        .text-center {
            text-align: center;
        }

        .mt-3 {
            margin-top: 30px;
        }
        th {
        color: white;
    }

    table thead th {
        color: white;
    }



    </style>

</html>
