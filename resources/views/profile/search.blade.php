<x-master>
     <table class="table">
        <tr>
            <th> Id</th>
            <th>Name</th>
            <th>Email</th>

        </tr>
        @foreach ($employees as $employees)
        <tr>
            <td> {{$employees->id}} </td>
            <td>{{$employees->name}}</td>
            <td>{{$employees->email}}</td>
            <td>
                <form class="delete-form" action="{{ route('profiles.destroy',$employees->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button  class="btn btn-primary" type="submit" onclick="return confirm('Voulez-vous vraiment supprimer ce profil ?')">Supprimer</button>
                </form>
            </td>
        </tr>

        @endforeach

    </table>


</x-master>
