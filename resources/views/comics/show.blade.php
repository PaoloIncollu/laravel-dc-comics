@extends('layouts.app')

@section('page-title', $comic->title)

@section('main-content')
<h1>
    {{ $comic->title }}
</h1>

<div class="card">
    <div class="card-body">
        <ul>
            <li class="list-group-item">
                Serie: {{ $comic->series }}
            </li>
            <li class="list-group-item">
                Tipo: {{ $comic->type }}
            </li>
            <li class="list-group-item">
                Prezzo: {{ $comic->price }} $
            </li>
            <li class="list-group-item">
                Data di publicazione: {{ $comic->sale_date }}
            </li>

            <li class="list-group-item">


                    Artisti:


                <ul>
                    @foreach (explode(',', $comic->artists) as $artist)
                        <li class="list-group-item">
                            {{ $artist }}
                        </li>
                    @endforeach

                </ul>

            </li>


            <li class="list-group-item">


                Scrittori:


            <ul>
                @foreach (explode(',', $comic->writers) as $writer)
                    <li class="list-group-item">
                        {{ $writer }}
                    </li>
                @endforeach

            </ul>

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
