@extends('layouts.main')

@section('title', 'MODIFICA')

@section('content')

<form class="container-small mt-5" action="{{ route('comic.update', $comic->id) }}" method="POST">
    @csrf

    @method('PUT')

    <div class="row">
        <div class="mb-3 col-6">
            <label for="title" class="form-label">TITOLO</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
        </div>

        <div class="mb-3 col-6">
            <label for="thumb" class="form-label">INSERISCI IMMAGINE</label>
            <input type="url" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
        </div>
    </div>

    <div class="row">
        <div class="mb-3 col-6">
            <label for="price" class="form-label">PREZZO</label>
            <input type="number" class="form-control" id="price" name="price" step="1" min="0" value="{{ $comic->price }}">
        </div>

        <div class="col-6">
            <label class="mb-2" for="type">TIPO</label>
            <select class="form-select" id="type" name="type">
                <option @if($comic->type === 'Comic Book') selected @endif>Comic Book</option>
                <option @if($comic->type === 'Graphic Novel') selected @endif>Graphic Novel</option>
            </select>
        </div>
    </div>

    <div class="row">
        <div class="mb-3 col-6">
            <label for="series" class="form-label">SERIE</label>
            <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
        </div>

        <div class=" mb-3 col-6">
            <label for="sale_date" class="form-label">DATA DI PUBBLICAZIONE</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
        </div>
    </div>

    <div class=" mb-3">
        <label for="description" class="form-label">DESCRIZIONE</label>
        <textarea class="form-control" id="description" name="description" rows="3">{{ $comic->description }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">INVIA</button>
</form>

@endsection