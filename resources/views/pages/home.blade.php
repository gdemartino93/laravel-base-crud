@extends("layouts.main-layouts")

@section('contents')
<div class="container d-flex flex-wrap justify-content-center">

    @foreach ($saints as $saint)
        @include('components.saint')
    @endforeach
</div>

@endsection