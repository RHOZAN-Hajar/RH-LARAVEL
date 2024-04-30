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
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="/assets/css/fontawesome.css">
  <link rel="stylesheet" href="/assets/css/templatemo-574-mexant.css">
  <link rel="stylesheet" href="/assets/css/owl.css">
  <link rel="stylesheet" href="/assets/css/animate.css">
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


  <div class="swiper-container" id="top">
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="background-image:url('/assets/images/slide-01.jpg')">

        <div class="slide-inner">

          <br>
          <br>
          <br>
          <br>
          <br>

          <form action="{{ route('primes.ajouter') }}" method="POST" class="text-center">
            @csrf
            <input type="text" name="nom" placeholder="Nom" required>
            <input type="text" name="prenom" placeholder="Prenom" required>
            
            <input type="number" name="montant" placeholder="Montant" required>
            <input type="date" name="date" placeholder="Date" required>
            <button type="submit" style="background-color: #726AB4; color:white;" class="btn btn-info btn_sm">Ajouter Prime</button>
            <br>
            <br>
            <br>
            @if (session('success'))
            <div>{{ session('success') }}</div>
            @endif
          </form>

          <br>
          <br>
          <br>
          <br>

          <form action="{{ route('primes.rechercher') }}" method="GET" class="text-center">
            <input type="date" name="date" placeholder="Date">
            <input type="text" name="nom" placeholder="Nom">
            <input type="text" name="prenom" placeholder="Prénom">
            <button type="submit" style="background-color: #726AB4;color:white;" class="btn btn-info btn_sm">Rechercher</button>
          </form>

<br>

          <div class="text-center">
            @if (count($primes) > 0)
            <table class="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nom</th>
                  <th>Prénom</th>
                  <th>Département</th>
                  <th>Mission</th>
                  <th>Montant</th>
                  <th>Date</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($primes as $prime)
                <tr>
                  <td>{{ $prime->id }}</td>
                  <td>{{ $prime->salarie->nom }}</td>
                  <td>{{ $prime->salarie->prenom }}</td>
                  <td>{{ $prime->salarie->departement }}</td>
                  <td>{{ $prime->salarie->mission }}</td>
                  <td>{{ $prime->montant }}</td>
                  <td>{{ $prime->date }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
            @else
            <p>Non prime trouvé :</p>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Scripts -->
  <script src="/vendor/jquery/jquery.min.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="/assets/js/isotope.min.js"></script>
  <script src="/assets/js/owl-carousel.js"></script>

  <script src="/assets/js/tabs.js"></script>
  <script src="/assets/js/swiper.js"></script>
  <script src="/assets/js/custom.js"></script>
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
  body {
    background-color: #000;
    color: #fff;
    background-color: #1d2951;
    font-family: 'Poppins', sans-serif;
    height: 100vh;
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
    decoration: None;
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

  /* Ajoutez cette règle CSS pour que les en-têtes de colonne soient blancs */
  table thead th {
    color: white;
    border: 2px solid white;
  }

  td {
    color: white;
    border: 2px solid white;
  }

</style>

</html>
