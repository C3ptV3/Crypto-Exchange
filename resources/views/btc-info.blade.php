@extends('layouts.app')
@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/4.0.2/echarts-en.min.js" charset="utf-8"></script>
<div class="container">
<div id="app">
    {!! $chart->container() !!}
    {!! $chart->script() !!}
</div>
<div class="col-sm-8">
    <h2>About Bitcoin</h2>
    <div class="container" id="text"><span>Bitcoin (BTC) is a consensus network that enables a new payment system and a
            completely digital currency. Powered by its users, it is a peer to peer payment network that requires no
            central authority to operate. On October 31st, 2008, an individual or group of individuals operating under
            the pseudonym "Satoshi Nakamoto" published the Bitcoin Whitepaper and described it as: "a purely
            peer-to-peer version of electronic cash, which would allow online payments to be sent directly from one
            party to another without going through a financial institution."</span></div>
</div>
</div>
@endsection