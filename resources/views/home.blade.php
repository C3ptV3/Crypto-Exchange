@extends('layouts.app')

@section('content')
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
</section><!--//hero-section-->

@endsection
