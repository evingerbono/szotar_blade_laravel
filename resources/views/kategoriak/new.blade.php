<form action="/api/kategoria/new" method="POST">
    {{csrf_field()}}

    <div class="form-group">
        <input type="text" name="Elnevezes" placeholder="Elnevezés">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">felvisz</button>
</form>