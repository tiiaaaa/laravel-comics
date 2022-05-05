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
                            <span>ciao</span>
                            <span>ciao</span>
                        </div>
                        <div class="aside-right">
                            <span>Check Avalability</span>
                        </div>
                    </div>
                    {{-- descrizione --}}
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam quas, consectetur alias temporibus, ab at, enim aliquid impedit aut amet doloremque esse quia earum labore aperiam nulla quod atque cupiditate. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem beatae animi, consectetur ab expedita perspiciatis tempore fugiat eaque dolor modi impedit. Cum culpa nostrum delectus reiciendis, deserunt quisquam perferendis nesciunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis repudiandae amet impedit incidunt sunt, aliquam quisquam nihil aliquid</p>
                </div>

                {{-- icona dell'immagine sulla destra --}}
                <div class="icon">
                    <img class="icon-immage" src="/img/adv.jpg" alt="">
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
