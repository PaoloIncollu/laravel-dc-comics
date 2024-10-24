@extends('layouts.app')

@section('page-title', 'Crea comic')

@section('main-content')
<h1>
    Crea Comic
</h1>

<form action="{{ route('comics.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="thumb" class="form-label">Src</label>
        <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" maxlength="1024" placeholder="Inserisci il valore di src..." value="{{ old('thumb') }}">

        @if($errors->has('thumb'))
            <div class="alert alert-danger mt-1">

                <ul class="mb-0">
                    @foreach($errors->get('thumb') as $key => $error)
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

    </div>


    <div class="mb-3">
        <label for="title" class="form-label">Titolo <span class="text-danger">*</span></label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required maxlength="64" placeholder="Inserisci il valore di titolo..." value="{{ old('title') }}">

        @if($errors->has('title'))
            <div class="alert alert-danger mt-1">

                <ul class="mb-0">
                    @foreach($errors->get('title') as $key => $error)
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <div class="mb-3">
        <label for="series" class="form-label">Serie <span class="text-danger">*</span></label>
        <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" required maxlength="255" placeholder="Inserisci la serie..." value="{{ old('series') }}">

        @if($errors->has('series'))
            <div class="alert alert-danger mt-1">

                <ul class="mb-0">
                    @foreach($errors->get('series') as $key => $error)
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <div class="mb-3">
        <label for="sale_date" class="form-label">Data <span class="text-danger">*</span></label>
        <input type="date" class="form-control @error('sale_dte') is-invalid @enderror" id="sale_date" name="sale_date" required  placeholder="Inserisci data publicazione..." value="{{ old('sale_date') }}">

        @if($errors->has('sale_date'))
            <div class="alert alert-danger mt-1">

                <ul class="mb-0">
                    @foreach($errors->get('sale_date') as $key => $error)
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <div class="mb-3">
        <label for="type" class="form-label">Tipo <span class="text-danger">*</span></label>
        <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" required maxlength="255" placeholder="Inserisci il tipo..." value="{{ old('type') }}">

        @if($errors->has('type'))
            <div class="alert alert-danger mt-1">

                <ul class="mb-0">
                    @foreach($errors->get('type') as $key => $error)
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <div class="mb-3">
        <label for="artists" class="form-label">Artisti <span class="text-danger">*</span></label>
        <input type="text" class="form-control @error('artists') is-invalid @enderror" id="artists" name="artists" required maxlength="255" placeholder="Inserisci gli artisti..." value="{{ old('artists') }}">
        <div id="textHelp" class="form-text">* Inserire i nomi separati da virgola</div>

        @if($errors->has('artists'))
            <div class="alert alert-danger mt-1">

                <ul class="mb-0">
                    @foreach($errors->get('artists') as $key => $error)
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <div class="mb-3">
        <label for="writers" class="form-label">Scrittori <span class="text-danger">*</span></label>
        <input type="text" class="form-control @error('writers') is-invalid @enderror" id="writers" name="writers" required maxlength="255" placeholder="Inserisci gli scrittori..." value="{{ old('writers') }}">
        <div id="textHelp" class="form-text">* Inserire i nomi separati da virgola</div>

        @if($errors->has('writers'))
            <div class="alert alert-danger mt-1">

                <ul class="mb-0">
                    @foreach($errors->get('writers') as $key => $error)
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Price ($) <span class="text-danger">*</span></label>
        <input type="float" class="form-control @error('price') is-invalid @enderror" id="price" name="price" required min="0" max="5000" step="50" placeholder="Inserisci il valore di peso..." value="{{ old('price') }}">

        @if($errors->has('price'))
        <div class="alert alert-danger mt-1">

            <ul class="mb-0">
                @foreach($errors->get('price') as $key => $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Descrizione <span class="text-danger">*</span></label>
        <textarea class="form-control  @error('description') is-invalid @enderror" id="description" name="description" rows="3" required maxlength="4096" placeholder="Inserisci una descrizione..." >{{ old('description') }}</textarea>

        @if($errors->has('description'))
        <div class="alert alert-danger mt-1">

            <ul class="mb-0">
                @foreach($errors->get('description') as $key => $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
    </div>

    <div>
        <button type="submit" class="btn btn-success w-100">
            + Aggiungi
        </button>
    </div>

</form>
@endsection
