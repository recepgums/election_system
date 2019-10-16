<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/profile.css') }}" rel="stylesheet">
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <!-- Styles -->
    <link href="{{asset('assets/css/lib/weather-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/lib/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/lib/owl.theme.default.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/lib/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/lib/themify-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/lib/menubar/sidebar.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/lib/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/lib/helper.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Election System') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li>
                            <a>
                                {{ Auth::user()->name }}
                            </a>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    @auth
        <main class="py-4">
            <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
                <div class="nano">
                    <div class="nano-content">
                        <div class="logo"><a href="index.html"><span>Election System</span></a></div>
                        <ul>
                            @if(auth()->user()->role==1)
                                <li class="label">Main</li>
                                <li class="active"><a class="sidebar-sub-toggle" href="{{route('AdminPanel')}}"><i class="ti-home"></i> Admin <span class="badge badge-primary">2</span> <span class="sidebar-collapse-icon ti-angle-down"></span></a></li>
                            @endif
                            <li class="label">Apps</li>
                            <li><a href="app-event-calender.html"><i class="ti-calendar"></i> Calender </a></li>
                            <li><a href="{{route('Profile')}}"><i class="ti-user"></i> Profile</a></li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="ti-close"></i>
                                    {{ __('Logout') }}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @endauth
            <div class="container">
                <div class="content-wrap" >
                    <div class="main" >
                        <div class="container-fluid" >
                            <div class="container" >
                                <div  class="row justify-content-center" >
                                    <div class="col-md-8" >
                                        <div class="card">
                                            <div class="card-header">{{ __('Login') }}</div>

                                            <div class="card-body">
                                                <form method="POST" action="{{ route('login') }}">
                                                    @csrf

                                                    <div class="form-group row">
                                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                                        <div class="col-md-6">
                                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                            @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                                        <div class="col-md-6">
                                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                                            @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <div class="col-md-6 offset-md-4">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                                <label class="form-check-label" for="remember">
                                                                    {{ __('Remember Me') }}
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row mb-0">
                                                        <div class="col-md-8 offset-md-4">
                                                            <button type="submit" class="btn btn-primary">
                                                                {{ __('Login') }}
                                                            </button>

                                                            @if (Route::has('password.request'))
                                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                                    {{ __('Forgot Your Password?') }}
                                                                </a>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
</div>
</body>
</html>
