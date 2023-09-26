<form action="/szavak/edit/{id}" method="POST">
    {{csrf_field()}}
    {{method_field('PUT')}}

    <div class="form-group">
        <input type="text" name="tema_id" placeholder="Tema ID" value="{{ $szavak->tema_id }}">
    </div>

    <div class="form-group">
        <input type="text" name="Angol" placeholder="Angol" value="{{ $szavak->Angol }}">
    </div>

    <div class="form-group">
        <input type="text" name="Magyar" placeholder="Magyar" value="{{ $szavak->Magyar }}">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Save</button>
</form>