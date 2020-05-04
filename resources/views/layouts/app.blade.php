<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href="{{ asset('assets/image/png/favicon.png') }}" type="image/x-icon">
    <!-- Bootstrap , fonts & icons  -->
    @yield('style')
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-4/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/icon-font/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/typography-font/typo.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome-5/css/all.css') }}">
    <!-- Plugin'stylesheets  -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/aos/aos.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fancybox/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/nice-select/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/slick/slick.css') }}">
    <!-- Vendor stylesheets  -->
    <link rel="stylesheet" href="{{ asset('assets/css/settings.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <!-- Custom stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
</head>
@hasSection ('scripts')

<body onload="onloadFunction()">
    @else

    <body>
        @endif

        <div id="loading">
            <div class="load-circle"><span class="one"></span></div>
        </div>
        <div class="site-wrapper overflow-hidden">
            <div class="landing-5 position-relative" style="padding-bottom: 50px;">
                <!-- Header Area -->
                <header class="site-header bg--conflower-blue ">
                    <div class="container-fluid pr-lg--30 pl-lg--30">
                        <nav class="navbar site-navbar offcanvas-active navbar-expand-lg navbar-light">
                            <!-- Brand Logo-->
                            <div class="brand-logo mr--30"><a href="{{ Url ('/')}}"><img
                                        src="{{ asset('assets/image/logo.png') }}" alt="" ></a></div>
                            <div class="collapse navbar-collapse" id="mobile-menu">
                                <div class="navbar-nav mr--10 ml-lg-auto">
                                    <ul class="navbar-nav main-menu">
                                        <li class="nav-item dropdown">
                                            <ul class="menu-dropdown dropdown-menu" aria-labelledby="navbarDropdown2">
                                                <li class="drop-menu-item">
                                                    <a href="{{ asset('assets/about.html') }}">
                                                        About us
                                                    </a>
                                                </li>
                                                <li class="drop-menu-item dropdown">
                                                    <a class="dropdown-toggle" id="navbarDropdown21"
                                                        href="{{ asset('assets/#') }}" role="button"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        Career
                                                    </a>
                                                    <ul class="menu-dropdown dropdown-menu dropdown-right"
                                                        aria-labelledby="navbarDropdown21">
                                                        <li class="drop-menu-item">
                                                            <a href="{{ asset('assets/career-page.html') }}">
                                                                Career
                                                            </a>
                                                        </li>
                                                        <li class="drop-menu-item">
                                                            <a href="{{ asset('assets/careerdetails.html') }}">
                                                                Career Details
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
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
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
                                                <a class="dropdown-item" href="{{ route('settings') }}">Account
                                                    settings</a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                        @endguest
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </header>

                @hasSection ('sidebar')
                <div class="container-fluid">
                    <div class="row">
                        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                            <div class="sidebar-sticky">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="{{URL('settings')}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-home">
                                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                            </svg>
                                            Dashboard <span class="sr-only">(current)</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{URL('info')}}">
                                            <img src="{{asset('assets/image/info.svg')}}" width="24" height="24">
                                            Info
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{URL('deposit')}}">
                                            <img src="{{asset('assets/image/deposit.svg')}}" width="24" height="24">
                                            Deposit
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{URL('withdraw')}}">
                                            <img src="{{asset('assets/image/withdraw.svg')}}" width="24" height="24">
                                            Withdraw
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{URL('transactions')}}">
                                            <img src="{{asset('assets/image/exchange.svg')}}" width="24" height="24">
                                            Trade
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{URL('trade/new')}}">
                                            <img src="{{asset('assets/image/trade.svg')}}" width="24" height="24">
                                            Issue new Trade
                                        </a>
                                    </li>
                                </ul>

                                <ul class="nav flex-column mb-2">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{URL('contact')}}">
                                            <img src="{{asset('assets/image/contact.svg')}}" width="24" height="24">
                                            Contact Us
                                        </a>
                                    </li>
                                </ul>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm">
                                            BTC : {{$user['BTC']}}
                                        </div>
                                        <div class="col-sm">
                                            ETH : {{$user['ETH']}}
                                        </div>
                                        <div class="col-sm">
                                            USD : {{$user['USD']}}
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </nav>
                        @yield('content')
                    </div>
                </div>
                @else
                @yield('content')
                @endif
            </div>
                <div class="footer-section section-padding">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-9 col-md-8">
                                <div class="row">
                                    <div class="col-6 col-lg-3">
                                        <div class="single-footer mb--50 mb-lg--30">
                                            <h5 class="footer-title">Services</h5>
                                            <ul class="footer-list">
                                                <li><a href="{{ URL('buybtc') }}">Buy Bitcoins</a></li>
                                                <li><a href="{{ URL('buyeth') }}">Buy Ethereum</a></li>
                                                <li><a href="{{ URL('transactions') }}">Trade</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3">
                                        <div class="single-footer mb--50 mb-lg--30">
                                            <h5 class="footer-title">Tools</h5>
                                            <ul class="footer-list">
                                                <li><a href="{{ URL('ethereum') }}">Ethereum Info</a></li>
                                                <li><a href="{{ URL('bitcoin') }}">Bitcoin Info</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3">
                                        <div class="single-footer mb--50 mb-lg--30">
                                            <h5 class="footer-title">About</h5>
                                            <ul class="footer-list">
                                                <li><a href="{{ URL('about') }}">About Us</a></li>
                                                <li><a href="{{ URL('legal') }}">Legal & Security</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3">
                                        <div class="single-footer mb--50 mb-lg--30">
                                            <h5 class="footer-title">Contact us</h5>
                                            <ul class="footer-list contact-list">
                                                <li><a href="{{ URL('contact') }}">contact@Crypto.net </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </body>
    @yield('scripts')
    <!-- Vendor Scripts -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-4/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Plugin's Scripts -->
    <script src="{{ asset('assets/plugins/fancybox/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/nice-select/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/aos/aos.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/slick/slick.min.js') }}"></script>
    <!-- Activation Script -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

</html>