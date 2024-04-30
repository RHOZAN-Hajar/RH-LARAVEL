<!-- salarie.index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Liste des Salariés</title>
</head>
<body>
    <h1>Salariés présents aujourd'hui :</h1>
    <ul>
        @foreach($presentSalaries as $salarie)
            <li>{{ $salarie->nom }}</li>
        @endforeach
    </ul>

    <h1>Salariés absents aujourd'hui :</h1>
    <ul>
        @foreach($absentSalaries as $salarie)
            <li>{{ $salarie->nom }}</li>
        @endforeach
    </ul>
</body>
</html>