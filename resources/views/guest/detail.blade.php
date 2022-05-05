@extends('layouts.base')

@section('main-content')
        {{-- striscia blu vuota sotto jumbotron --}}
        <div class="stripe-blue"></div>

        {{-- Prima sezione dopo straiscia blu --}}
        <div class="top">
            <section class="wrap">
                {{-- descrizione sulla sinistra --}}
                <div class="description">
                    <h1 class="title">{{$card['title']}}</h1>
                    {{-- barra verde --}}
                    <div class="check">
                        <div class="aside-left">
                            <p>
                                <span>U.S. Price:</span>
                                <span class="price">{{$card['price']}}</span>
                            </p>
                            <span class="disponibility">avalaible</span>
                        </div>
                        <div class="aside-right">
                            <span>Check Avalability</span>
                        </div>
                    </div>
                    {{-- descrizione --}}
                    <p>{{$card['description']}}</p>
                </div>

                {{-- icona dell'immagine sulla destra --}}
                <div class="icon">
                    <img class="icon-immage" src="{{$card['thumb']}}" alt="">
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
