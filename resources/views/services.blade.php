@extends('layouts.app')
@section('content')

<link href="{{ asset('css/bundles.css') }}" rel="stylesheet">
<div class="single-bundle-container" id="single-bundle-container" bis_skin_checked="1">

    <div id="bundle-flow-entry" bis_skin_checked="1">
        <h1 class="single-bundle-title-big">
            Buy
            <span id="currentCryptoName">Bitcoin</span> with VISA or Mastercard in
            <span id="currentFiatName">USD</span>
        </h1>
        <div class="single-bundle-wrapper" bis_skin_checked="1">
            <div class="single-bundle-body" bis_skin_checked="1">
                <div class="single-bundle-item" bis_skin_checked="1">
                    <div class="bundle-item-price" bis_skin_checked="1">
                        <i class="icn icn-USD" aria-hidden="true"></i><span id="bundle-entry-symbol2-amount1">200</span>
                    </div>
                    <div class="bundle-item-body" bis_skin_checked="1">
                        <div class="bundle-item-timer-wrapper" bis_skin_checked="1">
                            <div class="bundle-timer-container" bis_skin_checked="1"><svg class="bundle-timer"><circle r="48%" cx="50%" cy="50%" style="stroke-dashoffset: 495.625%;"></circle></svg><svg class="bundle-timer-bg-circle"><circle r="48%" cx="50%" cy="50%" style="stroke-dasharray: 300%; stroke-dashoffset: 0;"></circle></svg></div>
                            <div class="bundle-item-text" bis_skin_checked="1">
                                <p class="bundle-item-title">Get</p>
                                <p class="bundle-item-amount">
                                    <span id="bundle-entry-symbol1-amount1">0.0273</span>
                                    <span class="bundle-entry-current-symbol1">BTC</span>
                                </p>
                            </div>
                        </div>
                        <div id="bundle-entry-buy-1" class="bundle-item-button" bis_skin_checked="1">Buy</div>
                    </div>
                </div>
                <div class="single-bundle-item popular" bis_skin_checked="1">
                    <div class="bundle-item-price" bis_skin_checked="1">
                        <i class="icn icn-USD" aria-hidden="true"></i><span id="bundle-entry-symbol2-amount2">500</span>
                    </div>
                    <div class="bundle-item-body" bis_skin_checked="1">
                        <div class="bundle-item-timer-wrapper" bis_skin_checked="1">
                            <div class="bundle-timer-container" bis_skin_checked="1"><svg class="bundle-timer"><circle r="48%" cx="50%" cy="50%" style="stroke-dashoffset: 495.625%;"></circle></svg><svg class="bundle-timer-bg-circle"><circle r="48%" cx="50%" cy="50%" style="stroke-dasharray: 300%; stroke-dashoffset: 0;"></circle></svg></div>
                            <div class="bundle-item-text" bis_skin_checked="1">
                                <p class="bundle-item-title">Get</p>
                                <p class="bundle-item-amount">
                                    <span id="bundle-entry-symbol1-amount2">0.0683</span>
                                    <span class="bundle-entry-current-symbol1">BTC</span>
                                </p>
                            </div>
                        </div>
                        <div id="bundle-entry-buy-2" class="bundle-item-button" bis_skin_checked="1">Buy</div>
                    </div>
                </div>
                <div class="single-bundle-item" bis_skin_checked="1">
                    <div class="bundle-item-price" bis_skin_checked="1">
                        <i class="icn icn-USD" aria-hidden="true"></i><span id="bundle-entry-symbol2-amount3">1,000</span>
                    </div>
                    <div class="bundle-item-body" bis_skin_checked="1">
                        <div class="bundle-item-timer-wrapper" bis_skin_checked="1">
                            <div class="bundle-timer-container" bis_skin_checked="1"><svg class="bundle-timer"><circle r="48%" cx="50%" cy="50%" style="stroke-dashoffset: 495.625%;"></circle></svg><svg class="bundle-timer-bg-circle"><circle r="48%" cx="50%" cy="50%" style="stroke-dasharray: 300%; stroke-dashoffset: 0;"></circle></svg></div>
                            <div class="bundle-item-text" bis_skin_checked="1">
                                <p class="bundle-item-title">Get</p>
                                <p class="bundle-item-amount">
                                    <span id="bundle-entry-symbol1-amount3">0.1366</span>
                                    <span class="bundle-entry-current-symbol1">BTC</span>
                                </p>
                            </div>
                        </div>
                        <div id="bundle-entry-buy-3" class="bundle-item-button" bis_skin_checked="1">Buy</div>
                    </div>
                </div>
                <div class="single-custom-bundle-item " bis_skin_checked="1">
                    <div class="bundle-item-price" bis_skin_checked="1">
                        Your Amount
                    </div>
                    <div class="bundle-item-body" bis_skin_checked="1">
                        <div class="custom-bundle-input-wrapper" bis_skin_checked="1">
                            <div class="custom-bundles-input symbol2 input-holder" bis_skin_checked="1">
                                <span class="bundle-entry-current-symbol2">USD</span><input id="bundle-entry-symbol2-amount4" class="current" type="text" name="symbol2" numbers-and-one-dot-only="">
                            </div>
                            <div class="custom-bundles-input symbol1 input-holder" bis_skin_checked="1">
                                <span class="bundle-entry-current-symbol1">BTC</span><input id="bundle-entry-symbol1-amount4" type="text" name="symbol1" numbers-and-one-dot-only="">
                            </div>
                        </div>
                        <div id="bundle-entry-buy-4" class="bundle-item-button" bis_skin_checked="1">Buy</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
