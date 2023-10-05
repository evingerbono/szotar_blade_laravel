@foreach ($kategoria as $kategoriak)
    <form action="/api/szavak/list/{{ $kategoriak->id }}" method="GET">
        {{ csrf_field() }}
        {{ method_field('GET') }}
        <div class="form-group">
            <input type="submit" value="{{ $kategoriak->Elnevezés }}">
        </div>
    </form>
@endforeach