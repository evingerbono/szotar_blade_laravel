<form action="/api/kategoria/{{$kategoria->id}}"  method="POST">
    {{csrf_field()}}
    {{method_field('PUT')}}
    <div class="form-group">
        <label for="Elnevezes">Elnevezés</label>
        <br>
        <input type="text" class="form-control" id="Elnevezes" name="Elnevezes" value="{{ $kategoria->Elnevezes }}" placeholder="Átnevezés">
    </div>
    <br>
    <input type="submit" class="btn btn-primary">Mentés</input>
</form>

