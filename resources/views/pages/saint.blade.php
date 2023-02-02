@extends("layouts.main-layouts");

@section('contents')
<div class="myCard d-flex flex-column"> 
    <span>Saint {{ $saint["nome"] }} </span>
    <span>{{ $saint["luogoDiNascita"] }} </span>
    <span>{{ $saint["dataDiNascita"] }} </span>
    <span>{{ $saint["numeroDiMiracoli"] }} </span>
</div>
@endsection