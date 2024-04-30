<h1>Détails de la dépense</h1>

<p><strong>Motif :</strong> {{ $depense->motif }}</p>
<p><strong>Montant :</strong> {{ $depense->montant }}</p>
<p><strong>Date :</strong> {{ $depense->date }}</p>

@if(isset($totalDepenses))
    <p><strong>Total des dépenses :</strong> {{ $totalDepenses }}</p>
@endif
