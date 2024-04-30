<!-- search_results.blade.php -->

@foreach ($absences as $absence)
    <li>
        @if ($absence->salarie)
            {{ $absence->salarie->nom }} {{ $absence->salarie->prenom }}
        @else
            Salarié non trouvé
        @endif
        - {{ $absence->status }}
    </li>
@endforeach
