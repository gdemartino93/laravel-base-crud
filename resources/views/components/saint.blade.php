<a href="/saint/single/{{$saint["id"]}}" class="d-flex flex-column">
    <div class="myCard d-flex flex-column"> 
        <span>Saint {{ $saint["nome"] }} </span>
        <span>{{ $saint["luogoDiNascita"] }} </span>
        <span>{{ $saint["dataDiNascita"] }} </span>
        <span>{{ $saint["numeroDiMiracoli"] }} </span>
        <a href="{{route('saint.delete',['id' => $saint -> id])}}"> ELIMINA </a>
    </div>
</a>