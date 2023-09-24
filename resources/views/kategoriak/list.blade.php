@foreach ($kategoria as $kategoriak)
    <form action="/api/kategoria/list" method="GET">
    {{csrf_field()}}
    {{method_field('GET')}}
    <div class="form-group">
        <p>{{$kategoriak->Elnevezés}}</p>
    </div>
     </form>
@endforeach