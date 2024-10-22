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
        <input type="text" class="form-control" id="thumb" name="thumb" maxlength="1024" placeholder="Inserisci il valore di src...">
    </div>

    <div class="mb-3">
        <label for="title" class="form-label">Titolo <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="title" name="title" required maxlength="64" placeholder="Inserisci il valore di titolo...">
    </div>

    <div class="mb-3">
        <label for="series" class="form-label">Serie <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="series" name="series" required maxlength="255" placeholder="Inserisci la serie...">
    </div>

    <div class="mb-3">
        <label for="sale_date" class="form-label">Data <span class="text-danger">*</span></label>
        <input type="date" class="form-control" id="sale_date" name="sale_date" required  placeholder="Inserisci data publicazione...">
    </div>
    <div class="mb-3">
        <label for="type" class="form-label">Tipo <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="type" name="type" required maxlength="255" placeholder="Inserisci il tipo...">
    </div>
    <div class="mb-3">
        <label for="artists" class="form-label">Artisti <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="artists" name="artists" required maxlength="255" placeholder="Inserisci gli artisti...">
    </div>
    <div class="mb-3">
        <label for="writers" class="form-label">Scrittori <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="writers" name="writers" required maxlength="255" placeholder="Inserisci gli scrittori...">
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Price ($) <span class="text-danger">*</span></label>
        <input type="float" class="form-control" id="price" name="price" required min="0" max="5000" step="50" placeholder="Inserisci il valore di peso...">
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Descrizione <span class="text-danger">*</span></label>
        <textarea class="form-control" id="description" name="description" rows="3" required maxlength="4096" placeholder="Inserisci una descrizione..."></textarea>
    </div>

    <div>
        <button type="submit" class="btn btn-success w-100">
            + Aggiungi
        </button>
    </div>

</form>
@endsection
