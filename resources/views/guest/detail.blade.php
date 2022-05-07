<link rel="stylesheet" href="{{asset('css/detail.css')}}">

@extends('layouts.base')

@section('main-content')
        {{-- striscia blu vuota sotto jumbotron --}}
        <div class="stripe-blue">
            {{-- Section equivalente a section.wrap --}}
            <section class="wrap-stripe-blue">
                {{-- box immagine con all'interno limmagine dinamica  --}}
                <div class="dynamic-image">
                    <img class="icon-immage" src="{{$card['thumb']}}" alt="">

                    <div class="comic-book">
                        <p class="inside-image-text">
                            {{$card['type']}}
                        </p>
                    </div>

                    <div class="view-gallery">
                        <p class="inside-image-text">
                            view gallery
                        </p>
                    </div>
                </div>

            </section>
        </div>

        {{-- Prima sezione dopo straiscia blu --}}
        <div class="top">
            <section class="wrap">
                {{-- descrizione sulla sinistra --}}
                <div class="description">
                    <h3 class="title">{{$card['title']}}</h3>
                    {{-- barra verde --}}
                    <div class="check">
                        <div class="aside-left">
                            <div>
                                <span class="price">U.S. Price:</span>
                                <span class="price value">{{$card['price']}}</span>
                            </div>
                            <span class="disponibility">
                                avalaible
                            </span>
                        </div>
                        <div class="aside-right">
                            <span class="check-avalability">
                                Check Avalability
                            </span>
                        </div>
                    </div>
                    {{-- descrizione --}}
                    <p class="card-description">{{$card['description']}}</p>
                </div>

                {{-- icona dell'immagine sulla destra --}}
                <div class="icon">
                    <img class="static-immage" src="/img/adv.jpg" alt="">
                </div>

                <div class="advertisement">
                    <p class="advertisement-text">advertsement</p>
                </div>

            </section>
        </div>

        {{-- Sezione di colore grigio chiaro contenente informazioni sulla card --}}
        <div class="bottom">
            <section class="wrap">

            </section>
        </div>
@endsection

{{-- <div class="single-card">
            <h1 style="color: white">{{$card['title']}}</h1>
            <p></p>
        </div> --}}
