@if($szavak)
    <ul>
        <li>ID: {{ $szavak->id }}</li>
        <li>Angol: {{ $szavak->Angol }}</li>
        <li>Magyar: {{ $szavak->Magyar }}</li>
        <li>TemaID: {{ $szavak->tema_id }}</li>
    </ul>

    <form action="{{ route('szavak.delete', ['id' => $szavak->id]) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger">Törlés</button>
    </form>

@else
    <p>Szavak not found</p>
@endif
