@extends("layouts.main-layouts");

@section('contents')
<div class="wrapper d-flex align-items-center">
    <div class="pio moving"></div>
    <div class="myCard d-flex flex-column moving"> 
        <span>Saint {{ $saint["nome"] }} </span>
        <span>{{ $saint["luogoDiNascita"] }} </span>
        <span>{{ $saint["dataDiNascita"] }} </span>
        <span>{{ $saint["numeroDiMiracoli"] }} </span>
    </div>
    <div class="pio moving"></div>
</div>

@endsection