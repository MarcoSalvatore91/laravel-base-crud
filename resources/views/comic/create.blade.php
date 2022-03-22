@extends('layouts.main')

@section('title', 'Aggiungi')

@section('content')

<form action="{{ route('comic.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="title" class="form-label">TITOLO</label>
        <input type="text" class="form-control" id="title" name="title">
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">DESCRIZIONE</label>
        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
    </div>

    <div class="mb-3">
        <label for="thumb" class="form-label">INSERISCI IMMAGINE</label>
        <input type="url" class="form-control" id="thumb" name="thumb">
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">PREZZO</label>
        <input type="number" class="form-control" id="price" name="price" step="1" min="0">
    </div>

    <label for="type">TIPO</label>
    <select class="form-select" id="type" name="type">
        <option selected>Comic Book</option>
        <option>Graphic Novel</option>
    </select>

    <div class="mb-3">
        <label for="series" class="form-label">SERIE</label>
        <input type="text" class="form-control" id="series" name="series">
    </div>

    <div class="mb-3">
        <label for="sale_date" class="form-label">DATA DI PUBBLICAZIONE</label>
        <input type="date" class="form-control" id="sale_date" name="sale_date">
    </div>
    <button type="submit" class="btn btn-primary">INVIA</button>
</form>

@endsection