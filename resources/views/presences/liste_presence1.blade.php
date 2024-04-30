@extends('home')

@section('content')

 {{--
$abscence_data=[];
@foreach ($abscences as $abscence)
abscence_data[]=[abscence]
@endforeach --}} 


<div class="container">
    <h4 style="color: white">Chercher une date</h4>

    <div class="date">
        <form action="{{route('filtrer_abscence')}}" method="GET">
            <div class="input-group mb-3">
              <input type="date" name="date" class="form-control" id="Aujourdhui" aria-label="Recipient's username" aria-describedby="button-addon2">
              <button class="btn btn-primary" type="submit">chercher</button>
            </div>
        </form>

        <script>
            document.getElementById("Aujourdhui").valueAsDate = new Date();
        </script>
    </div>

    <table class="table" style="background: rgb(223, 223, 223)">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Departement</th>
                <th>Present/absent</th>
                <th>heures supplimentaires</th>
                <th>Congé Medical</th>
        </thead>
        <tbody>
            @foreach ($salaries as $salarie)
                <tr>
                    <td>{{$salarie->id_salarie}}</td>
                    <td>{{$salarie->nom}}</td>
                    <td>{{$salarie->prenom}}</td>
                    <td>{{$salarie->departement}}</td>
</tr>
            @endforeach
<tr>
@foreach ($abscences as $abscence)
                    <td>{{$abscence->abscence}}</td>
                    <td>{{$abscence->heures_supplimentaires}}</td>
                    <td>{{$abscence->conge_medical}}</td>
                </tr>

     
        </tbody>
    </table>
    <div>



    <style>
        table{
            margin-top: 30px;
        }
        .tab2{
                margin-bottom: 50px;
            }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
        }
        th {
            text-align: left;
        }
        .date{
            width: 300px;

        }