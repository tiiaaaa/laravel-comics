<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Comics</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    {{-- Header --}}
    <header>
        @include('partials.header');
    </header>

    {{-- Main --}}
    <main>
        @include('partials.main');
    </main>


    {{-- Footer --}}
    <footer>
        @include('partials.footer');
    </footer>

</body>
</html>
