
<!DOCTYPE html>
<html>
<head>
    <title>Bulletin de paie</title>
</head>
<body>
    <h1>Bulletin de paie</h1>
    <p>Numéro CNSS: {{ $num_cnss }}</p>
    <p>Nom: {{ $nom }}</p>
    <p>Prénom: {{ $prenom }}</p>
    <p>Situation familiale: {{ $situation_familialle }}</p>
    <p>Date d'entrée: {{ $date_entree }}</p>
    <p>CIN: {{ $cin }}</p>
    <p>Numéro AMO: {{ $num_amo }}</p>
    <p>Numéro CIMR: {{ $num_cimr }}</p>
    <p>Nombre d'enfants: {{ $nbre_enfant }}</p>
    <p>Salaire initial: {{ $salaire_initial }}</p>
    <p>Montant des heures supplémentaires: {{ $heures_supplementaires }}</p>
    <p>Montant CNSS: {{ $depenses_cnss }}</p>
    <h3>Total à payer: {{ $total_paie }}</h3>
</body>
</html>
