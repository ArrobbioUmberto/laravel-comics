@extends('layouts.app')

@section('content')

<div class="row d-flex flex-wrap">
    @foreach ($comics as $comic)

    <div class="col-2">
        <div class="img-card">
            <img src="{{ Vite::asset('resources/images/copertine/copertina1.jpg') }}" alt="">
        </div>
        <div class="card-text">
            <p class="title">
                {{ $comic['title'] }}
            </p>
        </div>
    </div>

    @endforeach
</div>



@endsection