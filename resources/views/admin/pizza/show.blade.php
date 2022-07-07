@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card w-50">
        <h1>Pizza {{ $pizza->nome }}</h1>

        <h3>Prezzo: {{ $pizza->prezzo }}&euro;</h3>
        <h3>Ingredienti: {{ $pizza->ingredienti }}</h3>
        <h3>Vegetariana: {{ $pizza->vegetariana }}</h3>
    </div>

    <a class="btn btn-primary" href="{{ route('admin.pizzas.index') }}">BACK</a>

</div>

@endsection
