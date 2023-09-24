@foreach ($szavak as $szavak)
    <form action="/api/szavak/list" method="GET">
    {{csrf_field()}}
    {{method_field('GET')}}
    <div class="form-group">
        <p>{{$szavak->Angol}}</p>
        <p>{{$szavak->Magyar}}</p>
    </div>
     </form>
@endforeach