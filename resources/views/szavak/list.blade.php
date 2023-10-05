<div class="tarolo">
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
                        <input type="text" class="magyarSzo" name="Magyar" placeholder="Magyar szó" value="">
                    </div>
                </td>
                <td>
                    @if ($szo->Magyar == ('.magyarSzo'))
                        <h1>✅</h1>
                    @else
                        <h1>❌</h1>
                    @endif
                </td>
            </tr>
        @endforeach
    </table>
</div>
