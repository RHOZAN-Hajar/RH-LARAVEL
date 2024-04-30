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
                        <!-- ** Logo Start ** -->
                        <a href="{{ route('homeEmploye', $salarie->id_salarie) }}" class="logo">
                            <img src="images/logo1.jpeg" alt="logo" style="width: 100px; height: auto;">
                        </a>
                        
                        <!-- ** Logo End ** -->
                        <!-- ** Menu Start ** -->
                        <ul class="nav">
                        <li class="scroll-to-section"><a href="#top" class="active">Acceuil</a></li>
                            <li class="scroll-to-section"><a href="{{ route('information', $salarie->id_salarie) }}">Informations</a></li>
                            <li class="has-sub">
                                
                                
    <a href="javascript:void(0)">Conge</a>
    <ul class="sub-menu">
        <li><a href="{{ route('conge.create', $salarie->id_salarie) }}">Demande</a></li>
        <li><a href="{{ route('conge.MesConge', $salarie->id_salarie) }}">Mes conges</a></li>
    </ul>
</li>

                            </li>
                            
                            <li class="scroll-to-section"><a href="{{ route('telecharger_bulletin_paie', ['id_salarie' => $salarie->id_salarie]) }}" >Bulletin de paie</a></li>
                           
                           
                            <li><a style="background-color: #EE4036;" href="/">Se deconnecter</a></li>
                            
                        </ul>
                        <!-- ** Menu End ** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ** Header Area End ** -->

    <!-- ** Main Banner Area Start ** -->
    <div class="swiper-container" id="top">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image:url('{{ asset('assets/images/slide-01.jpg') }}')">
                <div class="slide-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="header-text">
                                    <h2><br> Bienvenue,<em style="color: #EE4036;">employe {{ $fullName }}</em>  <br>dans votre outil de gestion RH complet et efficace.</h2>
                                    <div class="div-dec"></div>
                                    <p>Explorez notre plateforme dédiée aux ressources humaines pour simplifier la gestion des absences, la gestion des salariés, la génération de bulletins de paie et le suivi des dépenses...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ** Main Banner Area End ** -->

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Additional JavaScript Files -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>