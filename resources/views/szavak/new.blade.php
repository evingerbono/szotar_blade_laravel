<form action="/api/szavak/new" method="POST">
    {{csrf_field()}}

    <div class="form-group">
        <input type="text" name="tema_id" placeholder="Tema ID">
    </div>

    <div class="form-group">
        <input type="text" name="Angol" placeholder="Angol">
    </div>

    <div class="form-group">
        <input type="text" name="Magyar" placeholder="Magyar">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">felvisz</button>
</form>