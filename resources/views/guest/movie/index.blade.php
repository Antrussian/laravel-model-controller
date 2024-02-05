@extends('layouts.app')

@section('main-content')

<h4 class="text-dark">Movies</h4>

<section class="d-flex flex-wrap justify-content-center align-items-center p-3 bg-dark"> 

@foreach ($movies as $movie)
<div class="col-3 p-3">
    <div class="card p-3 bg-dark text-white">
        <div class="card-body p-3">
            <div class="card-title">
                <h3>
                    {{ $movie->title }} - {{ $movie->original_title }}
                </h3>
            </div>
        </div>
    </div>
</div>
@endforeach

</section>

@endsection
