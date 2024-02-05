@extends('layouts.app')

@section('main-content')


<h1>Movies</h1>

@foreach ($movies as $movie)
<h3>
    {{ $movie->title }} - {{ $movie->original_title }}
</h3>
@endforeach

    


@endsection