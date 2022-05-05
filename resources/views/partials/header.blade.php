<link rel="stylesheet" href="{{asset('css/header.css')}}">

<div class="header">
    <section class="my-container flex-header">
        <div id="logo-wrapper">
            <img class="logo" src="/img/dc-logo.png" alt="Logo Dc Comics">
        </div>

        <nav id="navbar-list">
            <ul>
                {{-- <li v-for="(link, index) in headerLinks" :key="index"
                :class="{'active' : link.active}">
                    <a href="#">{{ link.text }}</a>
                </li> --}}
                @foreach ($links as $link)
                    <li>
                        <a href="{{$link['url']}}">
                            {{$link['text']}}
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </section>

    <div id="main-content-jumbotron">
        <img class="jumbo-img" src="/img/jumbotron.jpg" alt="Jumbotron immage">
    </div>
</div>


