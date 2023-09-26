@if($szo)
    <ul>
        <li>ID: {{ $szo->id }}</li>
        <li>Angol: {{ $szo->Angol }}</li>
        <li>Magyar: {{ $szo->Magyar }}</li>
        <li>TemaID: {{ $szo->tema_id }}</li>
    </ul>

    <form action="/api/szavak/delete/{{$szo->id}}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger">Törlés</button>
    </form>

@else
    <p>Szo not found</p>
@endif
