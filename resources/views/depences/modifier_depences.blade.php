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
<br>
<br>
<br>
<br>

<body>
    <form action="{{Route('filtrer_depences_A_modifier',$salarie->id_salarie)}}" method="GET">
    <div class="cordonnees   text-center">
    <h3>Modifier les depences de {{$salarie->nom}} <span style="color: black">|</span> {{$salarie->prenom}}</h3>
</div>

    <div class="recherche">
        <div class="input-group mb-3 ">
            <input type="date"  class="input" name="date" class="form-control" >
            <button class="btn btn-primary  "   style="background-color: #726AB4;" type="submit" >chercher</button>
        </div>
    </div>
    <div class="row">
    <div class="col-12">
        <a class="btn btn-primary mb-3"    style="background-color: #EE4036;" href="/depences_par_mois/{{$salarie->id_salarie}}"><i class="fas fa-reply"></i>retour</a>
    </div>
</div>
    
    </form>






<br>

{{-- <form action="{{Route('update_depences',$salarie_id,$depence_date ) }}"  method="POST"> --}}
   
    <form method="POST" action="/update_depences/{{$salarie->id_salarie}}/{{$depence_date}}">
    @csrf
 

 
    <table class="table" >
        <thead class="thead-dark">
            <tr>
                <th>Motif</th>
                <th>Montant (MAD) </th>
                <th >Date/mois</th>
        </thead>
        <tbody>
            @foreach ($depences as $depence)
                <tr>
                    <td><input type="text" name="motif[]" value="{{$depence->motif}}" readonly> </td>
                    <td><input type="text" name="montant[]" value=" {{$depence->montant}}"></td>
                    <td class="date"><input type="text" name="date" value="{{$depence->date}}" readonly> </td>
                </tr>
                <tr></tr>
            @endforeach

        </tbody>
    </table>
    

    <div class="button">
         <button type="submit" class="btn btn-warning modifier btn-primary"  style="background-color: #726AB4; "> Modifier</button>
    </div>
    
   
  
</form>
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

.table-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.table-wrapper {
    width: 100%;
    max-width: 800px; 
}

.table {
    width: 100%;
}


.button{
    width: 60%;
  margin: 0 auto;
}
.modifier {
   
    margin-left: 0;
    margin-bottom: 20px;
}
        

.input{
        width:200px;
        height: 40px;
        border-radius:20px;
        text-align:center;
        font-weight: bold;
        font-size:16px;

    }
      
        body {
            background-color: black;
            color: white;
            background-color:#1d2951;
            font-family: 'Poppins', sans-serif;
        }

        h2 {
            color: white;
            text-align: center;
            margin-top: 20px;
        }

        .form-container {
            background-color: #222;
            border-radius: 10px;
            padding: 30px;
            margin-top: 50px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        }

        .thead-dark {
            color:black;
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

       

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
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
   
     .cordonnees
    {
        text-align: center;
        margin-bottom: 20px;
        color:black;
        width:100%;
        font-size :30px;
        margin-right: 500px;
        margin-top: 10px;
    }
    .recherche
    {
        width: 500px;
        float: right;
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

    .date{
        text-align: center;
    }

    .width{
        width: 341px;
        margin-top: -18px;
        margin-left: 340px;
    }
    h3{
        color: white;
        margin-top:-70px;
    }
    a{
        text-decoration:none;
    }
    .total
    {
        font-size: 30px;
    }
    .tot
    {
        background: wheat;
        border-radius: 10px;
    }
    #titre
    {
        color: black;
    }
    .modifier
    {
        margin-left: 400px;
        margin-bottom: 20px;
    }
    </style>





