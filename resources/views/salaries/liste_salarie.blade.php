
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
<header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="index.html" class="logo">
                      <img src="public/images/logo1.jpeg" alt="" style="width: 100px; height: auto;">
                      </a>
                      <!-- ***** Logo End ***** -->
                      
                  </nav>
              </div>
          </div>
      </div>
  </header>

    <div class="swiper-container" id="top">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="slide-inner">

                <br>

                    <a class="btn btn-primary mb-3" style="background-color: #EE4036;" href="{{route('salaries.index')}}"><i class="fas fa-reply"></i>retour</a>
                    <br>
                    <br>
                    <strong>informations personnels:</strong>

                    <table class="table" style="background: rgb(223, 223, 223)">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Prenom</th>
                                <th scope="col">Email</th>
                                <th scope="col">Cin</th>
                                <th scope="col">Sex</th>
                                <th scope="col">Date de naissance</th>
                                <th scope="col">situation_familialle</th>
                                <th scope="col">Nbr_Enfant</th>
                                <th scope="col">Image</th>


                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="col">{{$salarie->id_salarie}}</th>
                                <td>{{$salarie->nom}}</td>
                                <td>{{$salarie->prenom}}</td>
                                <td>{{$salarie->email}}</td>
                                <td>{{$salarie->cin}}</td>
                                <td>{{$salarie->sex}}</td>
                                <td>{{$salarie->DateDeNaissance}}</td>
                                <td>{{$salarie->situation_familialle}}</td>
                                <td>{{$salarie->nbre_enfant}}</td>

                                <td><img src="{{asset($salarie->image)}}"   width='200' height='200'class='img img-responsive'></td>
                                
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <strong>informations administratives:</strong>
                    <table class="table" style="background: rgb(223, 223, 223)">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Departement</th>
                                <th scope="col">Mission</th>
                                <th scope="col">DAte_entrée</th>
                                <th scope="col">Salaire_Initial</th>
                                <th scope="col">Salaire_Actuel</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>{{$salarie->departement}}</td>
                                <td>{{$salarie->mission}}</td>
                                <td>{{$salarie->date_entree}}</td>
                                <td>{{$salarie->salaire_initial}}</td>
                                <td>{{$salarie->salaire_actuel}}</td>
                            </tr>

                        </tbody>
                    </table>
                    <br>

                    <strong>cotisations:</strong>
                    <table class="table" style="background: rgb(223, 223, 223)">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Num_Cnss</th>
                                <th scope="col">Num_Amo</th>
                                <th scope="col">Num_Cimr</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>{{$salarie->num_cnss}}</td>
                                <td>{{$salarie->num_amo}}</td>
                                <td>{{$salarie->num_cimr}}</td>
                            </tr>

                        </tbody>
                    </table>
                    <br>

                    <strong>localisation:</strong>
                    <table class="table" style="background: rgb(223, 223, 223)">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Ville</th>
                                <th scope="col">Adresse</th>
                               
                            
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>{{$salarie->ville}}</td>
                                <td>{{$salarie->adresse}}</td>
                                
                                
                            </tr>

                        </tbody>
                    </table>
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
                </div>
            </div>
        </div>
    </div>
</body>
<style>
        body {
            color: black;
            font-family: 'Poppins', sans-serif;
            background-color:#1d2951;
        }
        a {
    text-decoration: none;
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
            decoration:None;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
            border-radius: 20px;
            padding: 10px 30px;
            margin-top: 20px;
            font-weight: bold;
            transition: all 0.3s ease;
            decoration:None;
        }

        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
            decoration:None;
        }

        .text-center {
            text-align: center;
        }

        .mt-3 {
            margin-top: 30px;
        }

        .tab2 {
            margin-bottom: 50px;
        }

        table,
        th,
        td {
            border: 2px solid black;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 5px;
        }

        th {
            text-align: left;
        }

        strong {
            color: white;
        }

        .photo {
            width: 180px;
            height: 180px;
            margin-left: 80px;
        }
    </style>

</html>
