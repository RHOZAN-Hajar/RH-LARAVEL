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

    <!-- * Header Area Start * -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- * Logo Start * -->
                        <a href="index.html" class="logo">
                            <img src="images/logo1.png" alt="logo" style="width: 100px; height: auto;">
                        </a>
                        <!-- * Logo End * -->
                        <!-- * Menu Start * -->
                        <ul class="nav">
                        <li class="scroll-to-section"><a href="#top" class="active">Acceuil</a></li>
                            <li class="scroll-to-section"><a href="{{ route('information', $salarie->id_salarie) }}">Informations</a></li>
                            <li class="has-sub">
                                <a href="javascript:void(0)">Conge</a>
                                <ul class="sub-menu">
                                    <li><a href="{{route('conge.create', $salarie->id_salarie)}}">Demande</a></li>
                                    <li><a href="{{ route('conge.MesConge', $salarie->id_salarie) }}">Mes conges</a></li>
                                </ul>
                            </li>
                            
                            <li class="scroll-to-section"><a href="{{ route('telecharger_bulletin_paie', ['id_salarie' => $salarie->id_salarie]) }}" >Bulletin de paie</a></li>
                           
                           
                            <li><a style="background-color: #EE4036;" href="/">Se deconnecter</a></li>
                            
                        </ul>
                        <!-- ** Menu End ** -->     
                      
                        <!-- * Menu End * -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- * Header Area End * -->

    <!-- * Main Banner Area Start * -->
    <div class="swiper-container" id="top">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image:url('{{ asset('assets/images/slide-01.jpg') }}')">
    <div class="container full-screen d-flex justify-content-center align-items-center">
        <div class="form-container">
            <h2>Demande de congé</h2>

            @if(session('success'))
                <p style="color:green;">{{ session('success') }}</p>
            @endif

            <form method="POST" action="{{ route('conge.store') }}"    enctype="multipart/form-data">
                @csrf

                <label for="nom">Nom :</label>
                <input type="text" name="nom" id="nom" value="{{$salarie->nom}}" readonly  required><br>

                <label for="prenom">Prénom :</label>
                <input type="text" name="prenom" id="prenom" value="{{$salarie->prenom}}" readonly required><br>

                <label for="typeDeConge">Type de congé :</label>
                <select name="typeDeConge" id="typeDeConge" required>
                <option value="conge" id='conge'  style="display: block;">Congé</option>
                    <option value="maladie">Maladie</option>
                    <option value="conge_sans_solde">Congé sans solde</option>
                </select><br>

                <div class="form-group text-center" id="certif" style="display: none;">
                    <label for="certif">Certificat Medical::</label>
                    <input type="file" class="form-control" name="certif">
                </div>

                <label for="date_debut">Date de début :</label>
                <input type="date" name="date_debut" id="date_debut" required><br>

                <label for="date_fin">Date de fin :</label>
                <input type="date" name="date_fin" id="date_fin" required><br>

                <button type="submit">Enregistrer</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/fancybox.js"></script>
    <script src="assets/js/swiper.js"></script>
    <script src="assets/js/wow.js"></script>
    <script>
        
        document.addEventListener("DOMContentLoaded", function () {
            var typeDeCongeSelect = document.getElementById("typeDeConge");
            var certifInput = document.getElementById("certif");
    
            typeDeCongeSelect.addEventListener("change", function () {
                if (typeDeCongeSelect.value === "maladie") {
                    certifInput.style.display = "block";
                } else {
                    certifInput.style.display = "none";
                }
                
            }
            
        );
            // Initially check the value and set display accordingly
            if (typeDeCongeSelect.value === "maladie") {
                certifInput.style.display = "block";
            } else {
                certifInput.style.display = "none";
            }
        });
    </script>


<script>
        
        document.addEventListener("DOMContentLoaded", function () {
            var typeDeCongeSelect = document.getElementById("typeDeConge");
            var congeInput = document.getElementById("conge");
    
            typeDeCongeSelect.addEventListener("change", function () {
                if ($totalLeaveDays == 21) {
                    congeInput.style.display = "none";
                } else {
                    congeInput.style.display = "block";
                }
                
            }
            
        );
            // Initially check the value and set display accordingly
            iif ($totalLeaveDays == 21) {
                congeInput.style.display = "none";
            } else {
                congeInput.style.display = "block";
            }
        });
    </script>

</body>
<style>
    body {
        font-family: 'Poppins', sans-serif;
    }

    .container.full-screen {
        height: 100vh;
    }

    .form-container {
        max-width: 400px;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    .form-container h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    .form-container label {
        font-weight: bold;
    }

    .form-container input,
    .form-container select {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    .form-container button {
        width: 100%;
        background-color: #007bff;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .form-container button:hover {
        background-color: #0056b3;
    }
</style>

</html>