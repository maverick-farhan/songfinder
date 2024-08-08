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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar">
        <ul class="list-parent">
            <li><a href="{{route('song') }}"><img src="{{ asset('songdb.png') }}" alt="">songDB</a></li>
            @if(Auth::user())
            <li></li>
            @else
            <li class="user-auth">
                <a href="{{ route('signin') }}">SignIn</a>/<a href="{{ route('login') }}">LogIn</a>
            </li>
            @endif

            <li>
            <form id="search" action="{{ route('search') }}" method="POST">
                @csrf
                <div class="search-div">
                <input type="text" name="search" id="search-input" placeholder="Search by Song name, Artist, or genre"/>
                <button class="search-btn" type="submit"><i class="ri-search-2-line"></i></button>
                </div>
            </form>
            </li>
            <li>
            <i class="ri-menu-2-line"></i> 
            </li>
        </ul>
    </nav>
    @yield('dynamic')
</body>
</html>