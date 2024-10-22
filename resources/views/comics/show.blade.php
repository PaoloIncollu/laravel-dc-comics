@extends('layouts.app')

@section('page-title', $comic->title)

@section('main-content')
<h1>
    {{ $comic->title }}
</h1>

<div class="card">
    <div class="card-body">
        <ul>
            <li>
                Serie: {{ $comic->series }}
            </li>
            <li>
                Tipo: {{ $comic->type }}
            </li>
            <li>
                Prezzo: {{ $comic->price }} $
            </li>
            <li>
                Data di publicazione: {{ $comic->sale_date }}
            </li>
            <li>
                Artisti: {{ $comic->artists }}
            </li>
            <li>
                Scrittori: {{ $comic->writers }}
            </li>
        </ul>

        <p>
           {{ $comic->description }}
        </p>
    </div>
    @if ($comic->thumb != null)
        <img src="{{ $comic->thumb }}" class="card-img-bottom" alt="{{ $comic->title }}">
    @endif
</div>
@endsection
