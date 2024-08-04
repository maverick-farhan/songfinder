<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$header_title}}</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
    rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="get">
        @csrf
        <div class="search-div">
        <input type="text" name="search" id="search" placeholder="Search by Song name, Artist, or genre"/>
        <button type="submit"><i class="ri-search-2-line"></i></button>
        </div>
    </form>

    <div class="container-fluid">
        <div class="row">
            @foreach($songs as $song)
            <div class="col-md-auto col-sm">
                    <div class="card mx-2 audio-player" style="width: 18rem;">
                    <div class="icon-container">
                    <img class="card-img-top" src="{{ asset('cover/'.$song->image_name) }}" alt="Artist Cover" />
                    </div>
                    <div style="position: relative" class="card-body">
                    <h2 class="card-text">{{ $song->song }}</h2>
                    <p class="card-text">{{ $song->artist }}</p>
                    <audio style="height:2rem;width:90%;position:absolute;" controls autoplay>
                        <source src="{{ asset('songs/'.$song->music) }}" type="audio/mpeg">
                      Your browser does not support the audio element.
                      </audio>
                    </div>
                </div>
            </div>
                @endforeach
            </div>
    </div>
</body>
</html>
