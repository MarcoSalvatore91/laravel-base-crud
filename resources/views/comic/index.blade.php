@extends('layouts.main')

@section('title', 'Comics')

@section('content')

<div class="bg-grey">
    <div class="d-flex justify-content-end me-5 pt-5">
        <a class="btn btn-primary" href="{{ route('comic.create') }}">AGGIUNGI</a>
    </div>
    <div class="row d-flex container-small">
        @foreach ($comics as $comic)
        <div class="col-3 mt-5">
            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" width="200px" height="300px">
            <p>{{ $comic->title }}</p>
            <a href="{{ route('comic.show', $comic->id) }}">SCOPRI DI PIU'</a>

            <form action="{{ route('comic.destroy', $comic->id) }}" method="POST">
                @csrf

                @method('DELETE')

                <input type="submit" value="ELIMINA" />
            </form>
        </div>
        @endforeach
    </div>
</div>

@endsection