<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    {{--

    <head> --}}
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styles -->
       <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ URL::to('css/auth.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ URL::to('images/loop1.png') }}" type="image/x-icon">
    <link href="{{ URL::to('css/main.css') }}" rel="stylesheet">
</head>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ URL::to('css/auth.css') }}" rel="stylesheet">
        <link rel="shortcut icon" href="{{ URL::to('images/loop1.png') }}" type="image/x-icon">
        <link href="{{ URL::to('css/main.css') }}" rel="stylesheet">
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
                                        <i class="fa   text fa-power-off" aria-hidden="true"></i> {{ __('Logout') }}
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

            <main class="py-5 mt-0">
                @yield('content')
            </main>
        </div>

        {{-- script scr --}}
          <main class="py-5 mt-0">
            @yield('content')
        </main>
    </div>
    {{-- script scr --}}
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ URL::to('js/auth.js') }}"></script>
    </body>

</html>
