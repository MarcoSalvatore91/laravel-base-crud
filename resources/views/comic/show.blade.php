@extends('layouts.main')

@section('title', 'Comic')

@section('content')

<div class="row container-small mt-5">
    <div class="col-6">
        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" width="300px" height="400px">
    </div>

    <div class="col-6">
        <p><strong>TITOLO: </strong>{{ $comic->title }}</p>
        <p><strong>DESCRIZIONE: </strong>{{ $comic->description }}</p>
        <p><strong>PREZZO: </strong>{{ $comic->price }}</p>
        <p><strong>SERIE: </strong>{{ $comic->series}}</p>
        <p><strong>DATA DI PUBBLICAZIONE: </strong>{{ $comic->sale_date }}</p>
        <p><strong>TIPO: </strong>{{ $comic->type }}</p>
    </div>
</div>

<div class="d-flex justify-content-end me-5 mt-5">
    <a href="{{ route('comic.index') }}">INDIETRO</a>
</div>

@endsection