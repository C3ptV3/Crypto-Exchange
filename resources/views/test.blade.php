<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Omega - Landing Page Template</title>
  <link rel="shortcut icon" href="{{ asset('assets/image/png/favicon.png') }}" type="image/x-icon">
  <!-- Bootstrap , fonts & icons  -->
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

<body>
  <div id="loading">
    <div class="load-circle"><span class="one"></span></div>
  </div>
  <div class="site-wrapper overflow-hidden">
    <div class="landing-5 position-relative">
      <!-- Header Area -->
      <header class="site-header bg--conflower-blue ">
        <div class="container-fluid pr-lg--30 pl-lg--30">
          <nav class="navbar site-navbar offcanvas-active navbar-expand-lg navbar-light">
            <!-- Brand Logo-->
            <div class="brand-logo mr--30"><a href="{{ asset('assets/javascript:') }}"><img src="{{ asset('assets/image/png/logo-white.png') }}" alt=""></a></div>
            <div class="collapse navbar-collapse" id="mobile-menu">
              <div class="navbar-nav mr--10 ml-lg-auto">
                <ul class="navbar-nav main-menu">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown2" href="{{ asset('assets/#features') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                    <ul class="menu-dropdown dropdown-menu" aria-labelledby="navbarDropdown2">
                      <li class="drop-menu-item">
                        <a href="{{ asset('assets/about.html') }}">
                          About us
                        </a>
                      </li>
                      <li class="drop-menu-item dropdown">
                        <a class="dropdown-toggle" id="navbarDropdown21" href="{{ asset('assets/#') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Career
                        </a>
                        <ul class="menu-dropdown dropdown-menu dropdown-right" aria-labelledby="navbarDropdown21">
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
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <a class="dropdown-item" href="{{ route('settings') }}">Account settings</a>

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
      <!-- Hero Area -->
      <div class="hero-area ">
        <div class="container">
          <div class="row position-relative">
            <div class="col-md-5 order-md-2 position-static">
              <div class="hero-image">
                <img src="{{ asset('assets/image/png/3x-hero.png') }}" alt="" data-aos="fade-left" data-aos-duration="500" data-aos-delay="2200" data-aos-once="true">
              </div>
            </div>
            <div class="col-md-7 order-md-1">
              <div class="hero-content py-lg--50">
                <h1 class="title">A trusted and secure bitcoin <br class="d-none d-sm-block">exchange. </h1>
                  <p>Your guide to the world of an open financial system. Get started with the easiest and most secure platform to buy and trade cryptocurrency.</p>
                  <div class="hero-btn">
                    <a href="{{ asset('assets/') }}" class="btn--primary">Sign up</a>
                    <span class="button-bottom-text">Registration is Free</span>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Feature section -->
      <div class="feature-section">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-5 col-sm-6 mb--30">
              <div class="feature-widget">
                <div class="widget-icon">
                  <img src="{{ asset('assets/image/png/icon-layout.png') }}" alt="">
                </div>
                <div class="widget-texts">
                  <h3 class="title">Payment options</h3>
                  <p>Multiple payment methods: Visa, Mastercard, bank transfer (SWIFT, SEPA, ACH, Faster Payments), cryptocurrency</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-6 offset-md-1 offset-lg-0 mb--30">
              <div class="feature-widget">
                <div class="widget-icon">
                  <img src="{{ asset('assets/image/png/icon-layers.png') }}" alt="">
                </div>
                <div class="widget-texts">
                  <h3 class="title">Strong security</h3>
                  <p>Protection against DDoS attacks, full data encryption, cryptocurrency cold storage, and compliance with PCI DSS standards to safeguard your funds</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-6 mb--30">
              <div class="feature-widget">
                <div class="widget-icon">
                  <img src="{{ asset('assets/image/png/icon-responsive.png') }}" alt="">
                </div>
                <div class="widget-texts">
                  <h3 class="title">24/7 support</h3>
                  <p>Dedicated support via email, phone, and live chat around the clock to answer your questions at any time</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- CTA section -->
      <div class="cta-section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-7 col-xl-8">
              <div class="section-title text-center aos-init aos-animate" data-aos="zoom-out" data-aos-duration="500" data-aos-once="true">
                <h2 class="title">Start Trading Now</h2>
                <p>Become part of a global community of people who have  <br class="d-none d-md-block"> found their path to the crypto world with Crypto-Exchange</p>
                  <div class="cta-btn">
                    <a class="btn--primary" href="{{ asset('assets/#') }}">Sign Up</a>
                    <span class="btn-bottom-text">Registration is free</span>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer section -->
      <div class="footer-section section-padding">
        <div class="container">
          <div class="row justify-content-center">

            <div class="col-lg-9 col-md-8">
              <div class="row">
                <div class="col-6 col-lg-3">
                  <div class="single-footer mb--50 mb-lg--30">
                    <h5 class="footer-title">Services</h5>
                    <ul class="footer-list">
                      <li><a href="{{ asset('assets/') }}">Buy Bitcoins</a></li>
                      <li><a href="{{ asset('assets/') }}">Buy Ethereum</a></li>
                      <li><a href="{{ asset('assets/') }}">Trade</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-6 col-lg-3">
                  <div class="single-footer mb--50 mb-lg--30">
                    <h5 class="footer-title">Tools</h5>
                    <ul class="footer-list">
                      <li><a href="{{ asset('assets/') }}">Ethereum Info</a></li>
                      <li><a href="{{ asset('assets/') }}">Bitcoin Info</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-6 col-lg-3">
                  <div class="single-footer mb--50 mb-lg--30">
                    <h5 class="footer-title">About</h5>
                    <ul class="footer-list">
                      <li><a href="{{ asset('assets/') }}">About Us</a></li>
                      <li><a href="{{ asset('assets/') }}">Legal & Security</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-6 col-lg-3">
                  <div class="single-footer mb--50 mb-lg--30">
                    <h5 class="footer-title">Contact us</h5>
                    <ul class="footer-list contact-list">
                      <li><a href="{{ asset('assets/') }}">contact@Crypto.net </a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
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
</body>

</html>