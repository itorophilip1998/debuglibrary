<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    {{--

    <head> --}}
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

<<<<<<< HEAD
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}"> {{-- title --}}
        <title>@yield('title')</title>
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
=======
    <!-- Styles -->
       <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ URL::to('css/auth.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ URL::to('images/loop1.png') }}" type="image/x-icon">
    <link href="{{ URL::to('css/main.css') }}" rel="stylesheet">
</head>
>>>>>>> 28cb9485b69d05f10489e7a82cb8da7e82dc3002

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.2.0/css/fontawesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.2.0/css/fontawesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ URL::to('css/auth.css') }}" rel="stylesheet">
        <link rel="shortcut icon" href="{{ URL::to('images/loop1.png') }}" type="image/x-icon">
        <link href="{{ URL::to('css/main.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body>
        {{-- default navbar --}}
        <div id="app">
            <nav class="navbar navbar-expand-md  shadow-sm fixed-top">
                <div class="container">
                    <a class="navbar-brand m-auto" href="{{ url('/') }}">
                        <span class="Logo"><img src="{{ URL::to('images/loop1.png') }}" alt="" width="31px" height="30px"></span>
                        <span class="appname">DebugLibrary</span>
                    </a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto navbar-ul">
                            <!-- Authentication Links -->
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            @endif @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="position: relative; padding-left: 50px" vpre>
                                <img src="/uploads/avatars/{{Auth::user()->avatar}}" style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%">
                                {{ Auth::user()->username }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/dashboard">Profile</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>

<<<<<<< HEAD
            <main class="py-5 mt-0">
                @yield('content')
            </main>
        </div>
        
        {{-- script scr --}}
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ URL::to('js/auth.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
=======
        <main class="py-5 mt-0">
            @yield('content')
        </main>
    </div>
    {{-- script scr --}}
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ URL::to('js/auth.js') }}"></script>
>>>>>>> 28cb9485b69d05f10489e7a82cb8da7e82dc3002
    </body>

</html>
