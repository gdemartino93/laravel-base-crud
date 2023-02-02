@extends("layouts.main-layouts")

@section('contents')
<div class="container d-flex flex-wrap justify-content-center">
    @foreach ($saints as $saint)
    <a href="/saint/{{$saint["id"]}}">
        <div class="myCard d-flex flex-column"> 
            <span>Saint {{ $saint["nome"] }} </span>
            <span>{{ $saint["luogoDiNascita"] }} </span>
            <span>{{ $saint["dataDiNascita"] }} </span>
            <span>{{ $saint["numeroDiMiracoli"] }} </span>
        </div>
    </a>
    @endforeach
</div>

@endsection