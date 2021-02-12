

<label for="duckId">id {{$duck->id}}</label>



<form method="post" action="{{ route('updateDuck', $duck->id) }}">

    @csrf
    @method("patch")
    <div>
        <label for="duckName">Nom du canard</label>
        <div>
            <input type="text" name="duckName" id="duckName" value="{{$duck->name}}">
        </div>
    </div>
    <br>
    <div>
        <label for="duckBreed">Race du canard</label>
        <div>
            <input type="text" name="duckBreed" id="duckBreed" value="{{$duck->duckBreed}}">
        </div>
    </div>
    <br>
    <button type="submit">Update</button>

</form>
