<link rel="stylesheet" href="{{asset('css/products.css')}}">

@extends('layouts.base')

@section('main-content')
<div id="main-content-card">
    <section class="my-container">

        @foreach ($comics as $index => $comicElement)
        {{-- Singola Card --}}
            <a href="{{route("guest-detail", ['index' => $index])}}" class="card">
                <div class="card-immage">
                    <img src="{{$comicElement['thumb']}}" alt="{{$comicElement['series']}}">
                </div>
                <div class="card-text">
                    <h3>{{$comicElement['title']}}</h3>
                </div>
            </a>
        @endforeach
    </section>
</div>
@endsection
