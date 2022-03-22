@extends('layouts.main')

@section('title', 'Comics')

@section('content')

@foreach ($comics as $comic)
<p>{{ $comic->title }}</p>
<p>{{ $comic->description }}</p>
<img src="{{ $comic->thumb }}" alt="">
<p>{{ $comic->price }}</p>
<p>{{ $comic->series}}</p>
<p>{{ $comic->sale_date }}</p>
<p>{{ $comic->type }}</p>
@endforeach

@endsection