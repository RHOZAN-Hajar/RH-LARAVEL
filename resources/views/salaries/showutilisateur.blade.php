<!-- resources/views/salarie/show.blade.php -->

<h1>Informations Personnelles</h1>

<ul>
    <li><strong>Nom:</strong> {{ $salarie->nom }}</li>
    <li><strong>Prénom:</strong> {{ $salarie->prenom }}</li>
    <li><strong>CIN:</strong> {{ $salarie->cin }}</li>
    <li><strong>Numéro CNSS:</strong> {{ $salarie->num_cnss }}</li>
    <li><strong>Numéro AMO:</strong> {{ $salarie->num_amo }}</li>
    <li><strong>Numéro CIMR:</strong> {{ $salarie->num_cimr }}</li>
    <li><strong>Sexe:</strong> {{ $salarie->sex }}</li>
    <li><strong>Âge:</strong> {{ $salarie->age }}</li>
    <li><strong>Situation Familiale:</strong> {{ $salarie->situation_familialle }}</li>
    <li><strong>Nombre d'enfants:</strong> {{ $salarie->nbre_enfant }}</li>
    <li><strong>Date d'entrée:</strong> {{ $salarie->date_entree }}</li>
</ul>
