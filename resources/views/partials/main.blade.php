<h1>main</h1>

<div id="main-content-card">
    <section class="my-container">
        @foreach ($data as $dataElement)
            <a href="#" class="card">
                <div class="card-immage">
                    <img src="{{$dataElement['thumb']}}" alt="">
                </div>
                <div class="card-text">
                    <h5>{{$dataElement['title']}}</h5>
                    <p>{{$dataElement['description']}}</p>
                </div>
                @dump($data)
            </a>
        @endforeach
    </section>
</div>
