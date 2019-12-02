<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/EseeG-shortCut.png') }}" />

    <title>ECG PLATFORM &mdash; Colorlib Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <div class="site-navbar py-2">

        <div class="d-flex align-items-center justify-content-between">
            <a href="{{ action('MenuController@toHome')}}"><img src="{{ asset('images/logo.png') }}" width="150px" hight="200px"></a>
            <div class="icons">
                <div class="main-nav d-none d-lg-block">
                    <nav class="site-navigation text-right text-md-center" role="positive">
                        <ul class="site-menu js-clone-nav d-none d-lg-block">
                            <li class="active"><a style="color:white" href="{{ action('MenuController@toHome')}}">Home</a></li>
                            <li><a style="color:white" href="{{ action('MenuController@toService')}}">Services</a></li>
                            <li><a style="color:white" href="{{ action('MenuController@toAbout')}}">About</a></li>
                            <li><a style="color:white" href="{{ action('MenuController@toContact')}}">Contact</a></li>
                            <li><a href="#" class="icons-btn d-inline-block js-search-open">
                                    <span ><img src="{{ asset('images/btn_search.png') }}" width="20px" hight="20px"></span>
                                </a>
                            </li>
                            @guest
                            <li class="nav-item">
                                <a style="color:white" class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a style="color:white" class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            @endif
                            @else
                            <li class="nav-item">
                                <a style="color:white" href="#" role="button">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a style="color:white" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                            @endguest
                            <li>
                                <a  class="icons-btn d-inline-block">
                                    <span ><img src="{{ asset('images/user.png ') }}" width="25px" hight="25px" class="icon-search"></span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</head>

<body>
    <div class="site-blocks-cover" style="background-image: url({{ asset('images/bg_2.jpg')}});">  
        @section('sidebar')
        @show
        <div class="container">
            @yield('content')
        </div>

        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/main.js"></script>

        
    </div>
</body>

</html>