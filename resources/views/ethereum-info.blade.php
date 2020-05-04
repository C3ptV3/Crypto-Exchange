@extends('layouts.app')
@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/4.0.2/echarts-en.min.js" charset="utf-8"></script>
<div class="container">
<div id="app">
    {!! $chart->container() !!}
    {!! $chart->script() !!}
</div>
<div class="col-sm-8">
    <h2>About Ethereum</h2>
    <div class="container" id="text"><span>Ethereum (ETH) is a smart contract platform that enables developers to build
            decentralized applications (dapps) conceptualized by Vitalik Buterin in 2013. ETH is the native currency for
            the Ethereum platform and also works as the transaction fees to miners on the Ethereum network.

            Ethereum is the pioneer for blockchain based smart contracts. When running on the blockchain a smart
            contract becomes like a self-operating computer program that automatically executes when specific conditions
            are met. On the blockchain, smart contracts allow for code to be run exactly as programmed without any
            possibility of downtime, censorship, fraud or third-party interference. It can facilitate the exchange of
            money, content, property, shares, or anything of value. The Ethereum network went live on July 30th, 2015
            with 72 million Ethereum premined.</span></div>
</div>
</div>
@endsection