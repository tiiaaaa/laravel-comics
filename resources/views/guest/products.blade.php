<link rel="stylesheet" href="{{asset('css/products.css')}}">

@extends('layouts.base')

@section('main-content')
<div id="main-content-card">
    <section class="my-container">
        @foreach ($comics as $comicElement)
            <a href="/products/1" class="card">
                <div class="card-immage">
                    <img src="{{$comicElement['thumb']}}" alt="{{$comicElement['series']}}">
                </div>
                <div class="card-text">
                    <h3>{{$comicElement['title']}}</h3>
                    {{-- <p>{{$comicElement['description']}}</p> --}}
                </div>
            </a>
        @endforeach
    </section>
</div>
@endsection
