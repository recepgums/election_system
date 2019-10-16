<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
                            <ul class="navbar-nav ml-auto">
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
                                    <a>
                                        {{ Auth::user()->name }}
                                    </a>
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
                            <li><a href="{{route('calender_show')}}"><i class="ti-calendar"></i> Calender </a></li>
                            <li><a href="{{route('Profile')}}"><i class="ti-user"></i> Profile</a></li>
                            @if(auth()->user()->role==0)
                                    <li><a href="{{route('application_show',auth()->user()->id)}}"><i class="ti-user"></i> Application</a></li>
                            @endif
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="ti-close"></i>
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @endauth
            @guest
                @yield('content')
            @endguest
            @auth
            <div class="header">
                <div class="content-wrap">
                    <div class="main">
                        <div class="container-fluid">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
            @endauth

        </main>

    </div>
<script src="{{asset('assets/js/lib/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/lib/jquery.nanoscroller.min.js')}}"></script>
        <!-- nano scroller -->
        <script src="{{asset('assets/js/lib/menubar/sidebar.js')}}"></script>
        <script src="{{asset('assets/js/lib/preloader/pace.min.js')}}"></script>
        <!-- sidebar -->
        <script src="{{asset('assets/js/lib/bootstrap.min.js')}}"></script>

        <!-- bootstrap -->

        <script src="{{asset('assets/js/lib/circle-progress/circle-progress.min.js')}}"></script>
        <script src="{{asset('assets/js/lib/circle-progress/circle-progress-init.js')}}"></script>

        <script src="{{asset('assets/js/lib/morris-chart/raphael-min.js')}}"></script>
        <script src="{{asset('assets/js/lib/morris-chart/morris.js')}}"></script>
        <script src="{{asset('assets/js/lib/morris-chart/morris-init.js')}}"></script>

        <!--  flot-chart js -->
        <script src="{{asset('assets/js/lib/flot-chart/jquery.flot.js')}}"></script>
        <script src="{{asset('assets/js/lib/flot-chart/jquery.flot.resize.js')}}"></script>
        <script src="{{asset('assets/js/lib/flot-chart/flot-chart-init.js"')}}></script>
        <!-- // flot-chart js -->


        <script src="{{asset('assets/js/lib/vector-map/jquery.vmap.js')}}"></script>
        <!-- scripit init-->
        <script src="{{asset('assets/js/lib/vector-map/jquery.vmap.min.js"')}}></script>
        <!-- scripit init-->
        <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
        <script src="{{asset('assets/js/lib/vector-map/country/jquery.vmap.greece.js')}}"></script>
        <!-- scripit init-->
        <script src="{{asset('assets/js/lib/vector-map/country/jquery.vmap.iran.js')}}"></script>
        <!-- scripit init-->
        <script src="{{asset('assets/js/lib/vector-map/country/jquery.vmap.iraq.js')}}"></script>
        <!-- scripit init-->
        <script src="{{asset('assets/js/lib/vector-map/country/jquery.vmap.russia.js')}}"></script>
        <!-- scripit init-->
        <script src="{{asset('assets/js/lib/vector-map/country/jquery.vmap.tunisia.js')}}"></script>
        <!-- scripit init-->
        <script src="{{asset('assets/js/lib/vector-map/country/jquery.vmap.europe.js')}}"></script>
        <!-- scripit init-->
        <script src="{{asset('assets/js/lib/vector-map/country/jquery.vmap.usa.js')}}"></script>
        <!-- scripit init-->
        <script src="{{asset('assets/js/lib/vector-map/vector.init.js')}}"></script>

        <script src="{{asset('assets/js/lib/weather/jquery.simpleWeather.min.js')}}"></script>
        <script src="{{asset('assets/js/lib/weather/weather-init.js')}}"></script>
        <script src="{{asset('assets/js/lib/owl-carousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assets/js/lib/owl-carousel/owl.carousel-init.js')}}"></script>
        <script src="{{asset('assets/js/scripts.js')}}"></script>
</body>
</html>
