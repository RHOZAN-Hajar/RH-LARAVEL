<x-master>
    @include('partial.nav')

    <table class="table">
        <tr>
            <th> Id</th>
            <th>Name</th>
            <th>Email</th>

        </tr>
        @foreach ($users as $users)
        <tr>
            <td> {{$users->id}} </td>
            <td>{{$users->name}}</td>
            <td>{{$users->email}}</td>
            <td>
                <form class="delete-form" action="{{ route('profiles.destroy', $users->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button  class="btn btn-primary" type="submit" onclick="return confirm('Voulez-vous vraiment supprimer ce profil ?')">Supprimer</button>
                </form>
            </td>


            <td>
               <a href="{{ url('profiles/'.$users->id.'/edit') }}" class="btn btn-success mx2">Modifier</a>
            </td>
           


        </tr>

@endforeach

    </table>
    
        
    


</x-master>
