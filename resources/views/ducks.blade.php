<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<table class="table">
    <thead>
    <tr>
        <th scope="col">#id</th>
        <th scope="col">name</th>

        <th scope="col">race</th>
        <th scope="col">update</th>
        <th scope="col">delete</th>

    </tr>
    </thead>
    <tbody>

    <form action="{{route('createDuck')}}" method="get">
        @csrf
        <button type="submit">Créer un nouveau canard</button>
    </form>


    @foreach($ducks as $duck)
        <tr>
            <th >{{$duck->id}}</th>
            <td>{{$duck->duckName}}</td>
            <td>{{$duck->duckBreed}}</td>
            <td><a href="{{route('updateDuck', $duck->id)}}">Modifier</a></td>
            <td>
                <form action="{{route('deleteDuck', $duck->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit">Supprimer</button>
                </form>
            </td>
        </tr>

    @endforeach

    </tbody>
</table>
