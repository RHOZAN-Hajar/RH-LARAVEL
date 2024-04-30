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
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-574-mexant.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <!--

TemplateMo 574 Mexant

https://templatemo.com/tm-574-mexant

-->
</head>

<body>


    <!-- * Header Area Start * -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- * Logo Start * -->
                        <a href="index.html" class="logo">
                            <img src="{{ asset('images/logo1.jpeg') }}" alt="" style="width: 100px; height: auto;">
                        </a>
                        <!-- * Logo End * -->
                        <!-- * Menu Start * -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Acceuil</a></li>
                            <li class="scroll-to-section"><a href="#">Informations</a></li>
                            <li class="has-sub">
                                <a href="javascript:void(0)">Conge</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Demande</a></li>
                                    <li><a href="#" >Mes conges</a></li>
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a href="javascript:void(0)">Feuille de presence</a>
                                <ul class="sub-menu">
                                    <li><a href="/absences/create">Noter </a></li>
                                    <li><a href="{{ route('absences.index') }}">Liste</a></li>
                                </ul>
                            </li>
                            <li class="scroll-to-section"><a href="#about">Bulletin de paie</a></li>
                            <li class="has-sub">
                                <a href="javascript:void(0)">Bulletin de paie</a>
                                <ul class="sub-menu">
                                    <li><a href="/depences_par_année">Dépenses </a></li>
                                    <li><a href="/salaire">Salaires</a></li>
                                    <li><a href="{{ route('primes.index') }}">Primes</a></li>
                                </ul>
                            </li>
                            <li><a style="background-color: #EE4036;" href="/">Se deconnecter</a></li>
                        </ul>
                        <!-- * Menu End * -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div>
        <div>
            <div style="background-image:url({{ asset('assets/images/slide-01.jpg') }})">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <h3 style="color: white" class="text-center">Les demande de conge</h3>
                <br>
                <br>


                @if(session('success'))
                <h4 class="alert alert-success mt-5 ">
                    {{ session('success') }}
                </h4>
                @endif

                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Type de conge</th>
                            <th>Date de debut</th>
                            <th>Date de fin</th>
                            <th>status</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                 
                    @foreach ($conges as $conge)
<tr>
    <td>{{ isset($conge->salarie) ? $conge->salarie->nom : '' }}</td>
    <td>{{ isset($conge->salarie) ? $conge->salarie->prenom : '' }}</td>
    <td>{{ $conge->typeDeConge }}</td>
    <td>{{ $conge->date_debut }}</td>
    <td>{{ $conge->date_fin }}</td>
    <td>
        @if($conge->status == 'accepted')
            <span class="badge badge-success">Accepté</span>
        @elseif($conge->status == 'rejected')
            <span class="badge badge-danger">Rejeté</span>
        @else
            <span class="badge badge-warning">En attente</span>
        @endif
    </td>
    <td> <!-- Déplacer cette balise à l'intérieur de la boucle -->
        <div class="button">
            @if($conge->status == 'pending')
            <form method="POST"   action="{{ route('conge.accept', $conge->id) }}">
                @csrf
                <button type="submit"  style="background-color: #726AB4; display:inline-block;" class="btn ">Accept</button>
            </form>
            <form method="POST" action="{{ route('conge.reject', $conge->id) }}">
                @csrf
                <button type="submit"  style="background-color: #EE4036; display:inline-block; " class="btn ">Reject</button>
            </form>
            @else
            <span class="badge badge-secondary">Repondu</span>
            @endif
        </div>
    </td>
</tr>
@endforeach



                        
                    </tbody>
                </table>

                <!-- Scripts -->
                <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
                <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

                <script src="{{ asset('assets/js/isotope.min.js') }}"></script>
                <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>

                <script src="{{ asset('assets/js/tabs.js') }}"></script>
                <script src="{{ asset('assets/js/swiper.js') }}"></script>
                <script src="{{ asset('assets/js/custom.js') }}"></script>
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

                  var swiper = new Swiper(".swiper-container", swiperOptions);   
                   </script>

                <style>
                    body {
                        font-family: 'Poppins', sans-serif;
                        background-image: url("{{ asset('assets/images/slide-01.jpg') }}");
                        background-size: cover;
                        background-position: center;
                        background-repeat: no-repeat;
                        color: white;
                        margin: 0;
                        padding: 0;
                        height: 100vh;
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
                        decoration: None;
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


                    table {
                        margin-top: 30px;
                    }

                    .tab2 {
                        margin-bottom: 50px;
                    }

                    table,
                    th,
                    td {
                        border: 2px solid white;
                        border-collapse: collapse;
                        color: white;
                    }

                    th,
                    td {
                        padding: 5px;
                    }

                    th {
                        text-align: left;
                    }

                    .recherche {
                        float: right;
                    }

                    .from_to {
                        font-weight: bold;
                        font-size: 20px;

                    }

                    .totale {
                        margin-left: 300px;
                        margin-top: 30px;
                    }

                    .cercle {

                        border-radius: 50%;
                        width: 200px;
                        height: 100px;
                        background: rgb(206, 206, 206);
                        text-align: center;
                        margin-left: 50px;
                        margin-top: 20px;
                    }

                    .total_style {
                        margin-top: 30px;
                    }

                    .button button {


                        float: left;
                        margin: 0px 30px 0px 30px;

                    }
                </style>

</body>

</html>