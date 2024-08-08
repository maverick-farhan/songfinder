<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$header_title}}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
    rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('media.css') }}">
</head>
<body>
    <nav class="navbar">
        <ul class="list-parent">
            <li class="logo"><a href="{{route('song') }}"><img src="{{ asset('songdb.png') }}" alt="">songDB</a></li>
            <li class="search-li">
            <form id="search" action="{{ route('search') }}" method="POST">
                @csrf
            <div class="search-div">
                <input type="text" name="search" id="search-input" placeholder="Search by Song name, Artist, or genre"/>
                <button type="submit" class="search-btn btn"><i class="ri-search-fill"></i></button>
            </div>
            </form>
            </li>
            @if(Auth::user())
            <div class="nav-wrapper">
                <li>
                    <a href="{{ route('addSong') }}" class="btn text-white btn-dark"><i class="ri-add-large-fill"></i> Song</a>
                </li>
                <li class="collection">
                    <a href="{{ route('my_collection') }}" class="btn text-black btn-light"><i class="ri-quill-pen-line"></i> My Collection</a>
                </li> 
                <li class="logout">
                    <a href="{{ route('logout') }}" class="btn text-black btn-warning"><i class="ri-logout-circle-line"></i> Logout</a>
                </li>
            @else
                <li class="user-auth">
                    <a href="{{ route('signin') }}" class="btn text-white btn-dark">SignIn</a><a class="btn text-black btn-light" href="{{ route('login') }}">LogIn</a>
                </li>
            </div>
            @endif

        </ul>
    </nav>
    @yield('dynamic')
</body>
</html>