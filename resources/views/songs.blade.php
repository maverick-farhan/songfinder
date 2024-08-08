@extends('master_layout')
@section('dynamic')
    <div class="container-fluid main">
        <div class="row">

            @foreach($songs as $song)
            <div class="col-md-auto col-auto">
                    <div class="card mx-2 audio-player">
                    <div class="icon-container">
                    <img class="card-img-top" src="{{ asset('cover/'.$song->image_name) }}" alt="Artist Cover" />
                    </div>
                    <div class="card-body">
                    <h2 class="card-text title">{{ $song->song }}</h2>
                    <p class="card-text artist">{{ $song->artist }}</p>
                    <audio controls>
                        <source src="{{ asset('songs/'.$song->music) }}" type="audio/mpeg">
                      Your browser does not support the audio element.
                      </audio>
                    </div>
                </div>
            </div>
            @endforeach
            </div>
    </div>
@endsection

