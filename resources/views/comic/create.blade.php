@extends('layouts.main')

@section('title', 'Aggiungi')

@section('content')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form class="container-small mt-5" action="{{ route('comic.store') }}" method="POST">
    @csrf

    <div class="row">
        <div class="mb-3 col-6">
            <label for="title" class="form-label">TITOLO</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
        </div>

        <div class="mb-3 col-6">
            <label for="thumb" class="form-label">INSERISCI IMMAGINE</label>
            <input type="url" class="form-control" id="thumb" name="thumb" value="{{ old('thumb') }}">
        </div>
    </div>

    <div class="row">
        <div class="mb-3 col-6">
            <label for="price" class="form-label">PREZZO</label>
            <input type="number" class="form-control" id="price" name="price" step="0.01" min="0" value="{{ old('price') }}">
        </div>

        <div class="col-6">
            <label class="mb-2" for="type">TIPO</label>
            <select class="form-select" id="type" name="type">
                <option value="{{ old('type') }}" selected>Comic Book</option>
                <option value="{{ old('type') }}">Graphic Novel</option>
            </select>
        </div>
    </div>

    <div class="row">
        <div class="mb-3 col-6">
            <label for="series" class="form-label">SERIE</label>
            <input type="text" class="form-control" id="series" name="series" value="{{ old('series') }}">
        </div>

        <div class="mb-3 col-6">
            <label for="sale_date" class="form-label">DATA DI PUBBLICAZIONE</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_date') }}">
        </div>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">DESCRIZIONE</label>
        <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">INVIA</button>
</form>

@endsection