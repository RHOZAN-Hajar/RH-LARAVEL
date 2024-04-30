<!DOCTYPE html>
<html lang="en" class="full-screen">

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
    
    <div class="container full-screen d-flex justify-content-center align-items-center">
        <div class="form-container">

            <form id="absenceForm" method="POST" action="{{ route('absences.store') }}">
                @csrf
                <a class="btn btn-primary"   style="background-color: #EE4036;"  href="{{ route('absences.index') }}">Retour</a>
                <h1 class="form-group text-center">Noter l'absence</h1>
                <div class="form-group text-center">
                    <label for="nom">Nom Salarié:</label>
                    <input type="text" class="form-control" name="nom" required>
                    @error('nom')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
 <br>
                    <label for="prenom">Prenom Salarié:</label>
                    <input type="text" class="form-control" name="prenom" required>
                    @error('prenom')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group text-center">
                    <label for="status">Statut:</label>
                    <select class="form-control" name="status" id="status" required>
                        <option value="present">Présent</option>
                        <option value="absent">Absent</option>
                    </select>
                </div>

                <div class="form-group text-center" id="heuresSupplementaires" style="display: none;">
                    <label for="heures_supplementaires">Heures supplémentaires:</label>
                    <input type="number" class="form-control" name="heures_supplementaires">
                </div>

                <div class="form-group text-center" id="congeMedical" style="display: none;">
                    <label for="conge_medical">Congé médical:</label>
                    <select class="form-control" name="conge_medical">
                        <option value="0">Non</option>
                        <option value="1">Oui</option>
                    </select>
                </div>

                <div class="form-group text-center"> <!-- Added d-flex justify-content-center -->
                    <button type="submit"   style="background-color: #726AB4;" class="btn btn-primary">Noter</button> <!-- Removed btn-block -->
                </div>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('status').addEventListener('change', function () {
            var status = this.value;
            if (status === 'present') {
                document.getElementById('heuresSupplementaires').style.display = 'block';
                document.getElementById('congeMedical').style.display = 'none';
            } else if (status === 'absent') {
                document.getElementById('congeMedical').style.display = 'block';
                document.getElementById('heuresSupplementaires').style.display = 'none';
            }
        });

        // Ajax form submission
        document.getElementById("absenceForm").addEventListener("submit", function (event) {
            event.preventDefault();
            var form = event.target;
            var formData = new FormData(form);

            fetch(form.action, {
                method: form.method,
                body: formData
            }).then(function (response) {
                if (response.ok) {
                    console.log("Form submitted successfully.");
                    // Reset the form after successful submission
                    form.reset();
                    // Reset form display based on default status
                    document.getElementById('congeMedical').style.display = 'none';
                    document.getElementById('heuresSupplementaires').style.display = 'none';
                } else {
                    console.error("Form submission failed.");
                }
            }).catch(function (error) {
                console.error("Error occurred while submitting the form:", error);
            });
        });
    </script>

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
</body>

<style>
  body {
            color: black;
            font-family: 'Poppins', sans-serif;
            background-color:#1d2951;
        }


        a{
            text-decoration:none;
        }
    h2 {
        color: white;
        text-align: center;
        margin-top: 50px;
    }

    .form-container {
      
        border-radius: 10px;
        padding: 30px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
    }

    .form-group label {
        color: white;
    }

    .form-group input , select {
        padding: 10px;
        margin:10px;
        border-radius :10px;
    }


    .form-control {
        background-color: #333;
        color: white;
    }

    .btn-primary {
       
        border-radius: 20px;
        padding: 10px 30px;
        margin-top: 20px;
        font-weight: bold;
        transition: all 0.3s ease;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
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

    .full-screen,
    .full-screen body,
    .full-screen .container {
        width: 100%;
        margin: 0;
        padding: 0;
        overflow-x: hidden;
    }

    .full-screen form {
        padding: 50px;
    }

    .text-center .form-group {
        text-align: center;
    }
</style>

</html>
