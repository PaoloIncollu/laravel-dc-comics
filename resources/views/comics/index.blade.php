@extends('layouts.app')

@section('page-title', 'Tutti i Comics')

@section('main-content')


<h1>
    Tutti i Comics
</h1>

<div class="mb-4">
    <a href="{{ route('comics.create') }}" class="btn btn-success w-100">
        + Aggiungi
    </a>
</div>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Tipo</th>
            <th scope="col">Serie</th>
            <th scope="col">Prezzo</th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($comics as $comic)
            <tr>
                <th scope="row">{{ $comic->id }}</th>
                <td>{{ $comic->title }}</td>
                <td>{{ $comic->type }}</td>
                <td>{{ $comic->series }}</td>
                <td>${{ $comic->price }} </td>
                <td>
                    <a href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="btn btn-primary">
                    {{-- <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">
                    <a href="{{ route('comics.show', $comic) }}" class="btn btn-primary"> --}}
                        Vedi
                    </a>
                </td>
                <td>
                    <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}" class="btn btn-warning">

                        Modifica
                    </a>
                </td>

                <td>

                    <form onsubmit=" return confirm('Sei sicuro di voler cancellare questo comic?')" action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="POST">

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">

                            Elimina
                        </button>
                    </form>

                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
