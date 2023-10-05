<div class="tarolo">
    <form method="post" action="/api/szavak/szoEllenorzes">
        @csrf
        <table>
            <tr>
                <th>Angol</th>
                <th>Magyar</th>
                <th>Ellenőrzés</th>
            </tr>
            @foreach ($szavak as $szo)
                <tr>
                    <td>{{$szo->Angol}}</td>
                    <td>
                        <div class="form-group">
                            <input type="text" class="magyarSzo" name="Magyar[{{ $szo->id }}]" placeholder="Magyar szó" value="">
                        </div>
                    </td>
                    <td>
                        @if (isset($eredmenyek[$szo->id]) && $eredmenyek[$szo->id])
                            <h1>✅</h1>
                        @else
                            <h1>❌</h1>
                        @endif
                    </td>
                </tr>
            @endforeach
        </table>
        <button type="submit">Ellenőrzés</button>
    </form>
</div>
