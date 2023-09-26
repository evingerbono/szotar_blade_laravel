<form action="/api/szavak" method="POST">
    {{csrf_field()}}

    <div class="form-group">
        <select name="temaID" id="temaID">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
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