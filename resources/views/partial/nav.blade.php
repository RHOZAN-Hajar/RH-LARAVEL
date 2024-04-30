<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BTRzone</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">


</head>

<body>
   <div class="d-flex" id="wrapper">
      <!--  side bare start here -->
     <div class="bg-white" id="sidebar-wrapper">
        <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
            <p>
                <i class="fa fa-cog fa-spin" style="color: red"></i>RBTzone
            </p>

            <div class="list-group list-groug-flush my-3">
                <a href="#" class="list-group-item list-group-item-action   second-text active">
                    <i class="fas fa-tachometer-alt"></i> Dashboard
                </a>
                  
                    

                    <div class="dropdown list-group-item list-group-item-action  bg-transparent second-text fw-bold">
                        <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user"></i> ︁salarie
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="{{Route('salaries.index')}}">ajouter un salarie</a></li>
                            <li><a class="dropdown-item" href="/All_salaries">liste des salaries</a></li>
                        </ul>
                    </div>
                    <div class="dropdown list-group-item list-group-item-action  bg-transparent second-text fw-bold">
                        <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-calendar"></i> feuille de presence
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item" href="/absences/create">noter la présence</a></li>
                          <li><a class="dropdown-item" href="{{route('absences.index')}}">liste de présence</a></li>

                        </ul>
                    </div> 
                    
                    <div class="dropdown list-group-item list-group-item-action  bg-transparent second-text fw-bold">
                        <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-folder-open"></i> bulletin de paie
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item" href="/depences_par_année">Dépenses</a></li>
                          <li><a class="dropdown-item" href="/salaire">Salaires</a></li>
                          <li><a class="dropdown-item" href="{{route('primes.index')}}">Primes</a></li>
                          
                          

                       


                        </ul>
                    </div>
                    <div class="dropdown list-group-item list-group-item-action  bg-transparent second-text fw-bold">
                        <a href="/login"  class="btn btn-secondary mb-4">Se deconnecter</a>
                    </div>
                    



                    
                  
                   
            </div>
        </div>
     </div>

      <!--  side bare ends here -->

      <div id="page-content-wrapper">
          <nav class="navbar navbar-expand-lg navbarlight bg-transparent py-4 px-4">
              {{-- <div class="d-flex align-item-center">
               <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                  <h2 class="fs-2 me-0">Menu</h2>
              </div> --}}

              {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
               data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
               aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggle-icone"></span>
              </button> --}}

              
          </nav>

          <!---- Contenu --->
          <div class="container-fluid px-4">
              @yield('content')
          </div>
      </div>
   </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        var el = document.getElementById("wrapper")
        var toggleButton = document.getElementById("menu-toggle")
        toggleButton.onclick = function()
        {
          el.classList.toggle("toggled")
            // document.getElementById("wrapper").style.color = "black";
        }
    </script>
</body>
</html>