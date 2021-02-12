<form action="{{ route('createDuck') }}" method="post">
    @csrf
    <div>
        <label for="duckName">Nom du canard</label>
        <input type="text" name="duckName" id="duckName" placeholder="Nom du canard">
    </div>

    <div>
        <label for="duckBreed">Race du canard</label>
        <input type="text" name="duckBreed" id="duckBreed" placeholder="Race du canard">
    </div>

    <button type="submit">Enregistrer</button>
</form>
