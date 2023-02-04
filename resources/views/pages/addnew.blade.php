@extends('layouts.main-layouts')

@section('contents')
<div class="col-12 d-flex justify-content-center align-items-center">
    <form action="" method="POST" class="d-flex flex-column">
        <label for="nome">Nome</label>
        <input type="text" name="nome">
        <label for="luogoDiNascita">Luogo di Nascita</label>
        <input type="text" name="luogoDiNascita">
        <label for="dataDiNascita">Data di nascita</label>
        <input type="text" name="dataDiNascita">
        <label for="numeroDiMiracoli">Numero di miracoli effettuati</label>
        <input type="text" name="numeroDiMiracoli">
        <button class="btn btn-success my-3"> Aggiungi Nuovo</button>
    </form>
</div>

@endsection