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
<div >
    <div >
      <div >
        <div style="background-image:url(assets/images/slide-01.jpg)">
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  

  <a href="{{ route('salaries.create') }}"><button type="submit" class="btn btn-danger" style="background-color: #726AB4;"> Ajouter un salarie</button></a>
  <br>

  @if(session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
  @endif

  @if(session('update'))
  <div class="alert alert-warning">
    {{ session('update') }}
  </div>
  @endif

  @if(session('delete'))
  <div class="alert alert-danger">
    {{ session('delete') }}
  </div>
  @endif

  @forelse ($salaries as $salarie)
  <br>
  <table class="table table-gray-background"> <!-- Apply the CSS class here -->
    <thead class="thead-dark">
      <tr>
        <th scope="col">id</th>
        <th scope="col">Nom</th>
        <th scope="col">Prenom</th>
        <th scope="col">Cin</th>
        <th scope="col">Sex</th>
        <th scope="col">Date de naissance</th>
        <th scope="col">Departement</th>
        <th scope="col">Mission</th>
        <th scope="col">Image</th>
        <th scope="col">Options</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="col">{{ $salarie->id_salarie }}</th>
        <td>{{ $salarie->nom }}</td>
        <td>{{ $salarie->prenom }}</td>
        <td>{{ $salarie->cin }}</td>
        <td>{{ $salarie->sex }}</td>
        <td>{{ $salarie->DateDeNaissance}}</td>
        <td>{{ $salarie->departement }}</td>
        <td>{{ $salarie->mission }}</td>
        <td><img src="{{ asset($salarie->image) }}" width='100' height='100' class='img img-responsive'></td>
        <td>
          <form action="{{ route('salaries.destroy', $salarie->id_salarie) }}" method="POST"
            onsubmit="return confirm('Etes vous sur que vous voulez supprimer ce salarie ?');">

            <a class="btn btn-info" href="{{ route('salaries.show', $salarie->id_salarie) }}">Voir Plus</a>
            <a class="btn btn-warning" href="{{ route('salaries.edit', $salarie->id_salarie) }}">Modifier</a>

            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Supprimer</button>

          </form>
        </td>
      </tr>
    </tbody>
  </table>

  @empty
  <div class="alert alert-warning">
    pas de salaries ! .
  </div>
  @endforelse


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
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
        progress: function () {
          var swiper = this;
          for (var i = 0; i < swiper.slides.length; i++) {
            var slideProgress = swiper.slides[i].progress;
            var innerOffset = swiper.width * interleaveOffset;
            var innerTranslate = slideProgress * innerOffset;
            swiper.slides[i].querySelector(".slide-inner").style.transform =
              "translate3d(" + innerTranslate + "px, 0, 0)";
          }
        },
        touchStart: function () {
          var swiper = this;
          for (var i = 0; i < swiper.slides.length; i++) {
            swiper.slides[i].style.transition = "";
          }
        },
        setTransition: function (speed) {
          var swiper = this;
          for (var i = 0; i < swiper.slides.length; i++) {
            swiper.slides[i].style.transition = speed + "ms";
            swiper.slides[i].querySelector(".slide-inner").style.transition =
              speed + "ms";
          }
        }
      }
    };

    var swiper = new Swiper(".swiper-container", swiperOptions);
  </script>
</body>

<style>
    /* Black background for the whole page */
    body {
   
   
     
      color: #fff;
      font-family: 'Poppins', sans-serif;
      height:1000vh;
      background:url('assets/images/slide-01.jpg') fixed;
    
    }


  
    /* Gray background for the table */
   

    .tab2 {
      margin-bottom: 50px;
    }

    table,
    th,
    td {
      border: 2px solid white;
      border-collapse: collapse;
      color:white;
    }

    th,
    td {
      padding: 5px;
    }

    th {
      text-align: left;
    }

    .recherche {
      width: 400px;
      float: right;
    }

    .photo {
      width: 180px;
      height: 180px;
      margin-left: 80px;
    }
  </style>

</html>
