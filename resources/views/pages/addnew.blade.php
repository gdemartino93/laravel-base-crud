@extends('layouts.main-layouts')

@section('contents')
<div class="col-12 d-flex justify-content-center align-items-center">
    <form action="{{route('saint.store')}}" method="POST" class="d-flex flex-column">
    @csrf    
        <label for="nome">Nome</label>
        <input type="text" name="nome">
        <label for="luogoDiNascita">Luogo di Nascita</label>
        <input type="text" name="luogoDiNascita">
        <label for="dataDiNascita">Data di nascita</label>
        <input type="date" name="dataDiNascita">
        <label for="numeroDiMiracoli">Numero di miracoli effettuati</label>
        <input type="number" name="numeroDiMiracoli">
        <button class="btn btn-success my-3" type="submit"> Aggiungi Nuovo</button>
    </form>
</div>

@endsection