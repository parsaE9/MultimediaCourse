<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="with=device-width, initial-scale =1.0">
    <title>{{$movie->name}}</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bitter&family=Lora:wght@700&family=Sanchez&family=Vesper+Libre&display=swap"
          rel="stylesheet">
</head>

<body>
<section class="sub-header">
    <nav>
        <a href="{{ route('movies.index')}}"><img src="/storage/images/logoimdb.png"></a>
        <div class="nav-links">
            <ul>
                <li><a href="{{ route('movies.index')}}">Home</a></li>
            </ul>
        </div>
    </nav>


    <section class="movie-page">
        <div class="row-info">

            <div class="movie-cal">
                <img src="{{$movie->image}}" class="poster-img">
            </div>
            <div class="movie-cal"> <!-- info of the movie. -->
                <h1>{{$movie->name}}</h1>
                <h2>{{$movie->director}}</h2>
                <h3>{{$movie->rating}}</h3>
                <p>{{$movie->description}}</p>
            </div>
            <div class="row-trailer">
                @if ($movie->id < 5)
                    <video id="videoPlayer" controls></video>
                @else
                    <video id="video" controls></video>
                @endif
            </div>

        </div>
    </section>
</section>


@if ($movie->id < 5)
    <script src="{{ asset('js/dash.all.min.js') }}"></script>
    <script>
        (function () {
            var url = "{{ $movie->url }}";
            var player = dashjs.MediaPlayer().create();
            player.initialize(document.querySelector("#videoPlayer"), url, true);
        })();
    </script>

@else
    <script src="{{ asset('js/hls.js') }}"></script>

    <script>
        var video = document.getElementById('video');
        const video_url = "{{$movie->url}}";
        if (Hls.isSupported()) {
            var hls = new Hls({
                debug: true,
            });

            hls.loadSource(video_url);
            hls.attachMedia(video);
            hls.on(Hls.Events.MEDIA_ATTACHED, function () {
                video.muted = true;
                video.play();
            });
        }
        else if (video.canPlayType('application/vnd.apple.mpegurl')) {
            video.src = 'video_url';
            video.addEventListener('canplay', function () {
                video.play();
            });
        }
    </script>

@endif

</body>
</html>