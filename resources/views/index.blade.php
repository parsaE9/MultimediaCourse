<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="with=device-width, initial-scale =1.0">
    <title>IMDB trial Home</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bitter&family=Lora:wght@700&family=Sanchez&family=Vesper+Libre&display=swap"
          rel="stylesheet">
</head>
<body>

<section class="header">

    <nav>
        <a href="{{ route('movies.index')}}"><img src="/storage/images/logoimdb.png"></a>
        <div class="nav-links">
            <ul>
                <li><a href="{{ route('movies.index')}}">Home</a></li>
            </ul>
        </div>
    </nav>

    <div class="movie">

        @foreach($movies as $key => $value)
            <a href="{{ URL::to('movies/' . $value->id)  }}"><button class="button button{{$value->id}}"></button></a>
        @endforeach

    </div>
</section>
</body>
</html>