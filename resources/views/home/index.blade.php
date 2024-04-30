@extends('home')

@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="homePage.css">
        <link rel="stylesheet" href="homePage2.css">
    </head>

    <body>

       

        <h1 contenteditable="false" class="titre"><i class="fa fa-cog " style="color: black"></i>Logiciel Gestion RH</h1>
        
       
            <h3>Logiciel Gestion RH !</h3>
            <h4><span class="blanc"> C'est la Bonne Solution Pour Gerer Votre Entreprise </span></h4>
            <h5><i class="fa fa-folder-open" aria-hidden="true"></i><span class="blanc">Ajouter , modifier et supprimer les inforamations d'un salarie</span> </h5>
            <h5><i class="fa fa-folder-open" aria-hidden="true"></i><span class="blanc">Noter la presence des salaries </span> </h5>
            <h5><i class="fa fa-folder-open" aria-hidden="true"></i><span class="blanc">Gerer les depences , les salaires et les primes des salaries </span> </h5>
       

    </body>
</html>

<style>
    body
    {
        margin: 0;
        padding: 0;
    }
    .para1{
        margin-top:200px;
        text-align: center;
        width: 100%;
        height:200px;
        /* background: gray;
        background: transparent 50%; */
        margin-bottom: 20px;
        border-radius: 3px;

    }
    .blanc{
        color: black;
    }
    .titre{
        font-family:cursive;
    }

    .header
    {
        height: 100vh;
    }
    h3,.fa{
        color: black;
    }
</style>
@endsection