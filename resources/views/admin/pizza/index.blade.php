@extends('layouts.app')

@section('content')

<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Pizze</th>
        <th scope="col">Prezzo</th>
        <th scope="col">Azioni</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($pizzas as $pizza)
            <tr>
                <th scope="row">{{ $pizza->id }}</th>
                <td>{{ $pizza->nome }}</td>
                <td>{{ $pizza->prezzo }}&euro;</td>
                <td class="d-flex">
                    <a class="btn btn-success" href="{{ route('admin.pizzas.show', $pizza) }}">SHOW</a>
                    <a class="btn btn-primary mx-2" href="{{ route('admin.pizzas.edit', $pizza) }}">EDIT</a>

                    <form
                            action="{{ route('admin.pizzas.destroy', $pizza) }}"
                            method="POST"
                            onsubmit="return confirm('Confermi di eliminare la Pizza {{ $pizza->nome }}?')">

                        @csrf
                        @method('DELETE')
                        <button type="sumbit" class="btn btn-danger">DELETE</button>

                    </form>

                </td>
            </tr>
        @endforeach
    </tbody>
  </table>

@endsection
