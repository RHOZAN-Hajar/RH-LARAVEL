<!-- resources/views/profile.blade.php -->


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Informations Personnelles</div>

                    <div class="card-body">
                        <p>Nom : {{ $salarie->nom }}</p>
                        <p>Email : {{ $salarie->email }}</p>
                        <!-- Ajoutez d'autres informations selon vos besoins -->
                    </div>
                </div>
            </div>
        </div>
    </div>
