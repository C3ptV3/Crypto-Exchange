@extends('layouts.app')
@section('sidebar')
<div>
</div>
@endsection
@section('content')


<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Issue New Trade</h1>

  </div>
  <div class="row">
    <div class="col">
      <div class="container">
        <div class="row">
          <div class="col" id="btc-usd">Column</div>
          <div class="col" id="btc-eth">Column</div>
          <div class="w-100"></div>
          <div class="col" id="eth-usd">Column</div>
          <div class="col" id="eth-btc">Column</div>
        </div>
      </div>
    </div>
    <div class="col">
      <form class="form" action="{{URL('/trade/newtrade')}}" method="post" id="registrationForm">
        @csrf
        <div class="input-group">
          <input type="text" class="form-control" name="amount" id="amount" value="1" onchange="amountbuy()">
          <div class="input-group-append">
            <div class="input-group-append">
              <select id="currency_from" onchange="changebuy()" name="currency_from">
                <option value="BTC">BTC</option>
                <option value="ETH">ETH</option>
                <option value="USD">USD</option>
              </select>
            </div>
          </div>
          <div class="input-group">
            <input type="text" class="form-control" id="total" onchange="amountsell()" name="total">
            <select id="currency_to" onchange="changebuy()" name="currency_to">
              <option value="USD">USD</option>
              <option value="BTC">BTC</option>
              <option value="ETH">ETH</option>
            </select>

          </div>
        </div>
        <input type="hidden" id="price" name="price" value="0">
        <button class="btn btn--primary hvr-bounce-to-left" type="submit">Submit</button>
      </form>
    </div>
  </div>
</main>
@endsection
@section('scripts')
<script>
  var from = document.getElementById("currency_from");
var to = document.getElementById("currency_to");
var buyamountid = document.getElementById("amount");
var sellamountid = document.getElementById("total");
var price = document.getElementById("price");
function request() {
  if(from.value == "USD"){
  var theUrl = "https://cex.io/api/last_price/".concat(
    to.value,
    "/",
    from.value,
    "/"
  );}else{
  var theUrl = "https://cex.io/api/last_price/".concat(
    from.value,
    "/",
    to.value,
    "/"
  );}
  if(from.value == "BTC" && to.value == "ETH"){
  var theUrl = "https://cex.io/api/last_price/".concat(
    to.value,
    "/",
    from.value,
    "/"
  );}
  var xmlHttp = new XMLHttpRequest();
  xmlHttp.open("GET", theUrl, false);
  xmlHttp.send(null);
  var response = JSON.parse(xmlHttp.responseText);
  if((from.value == "BTC" && to.value == "ETH")||(from.value == "USD")){
  price.value=Math.round(((1 / response["lprice"]) + Number.EPSILON) * 100000) / 100000;
  }else{
    price.value=response["lprice"];
  }

  return response;
}
function onloadFunction() {
  var response = request();
  if (from.value == "BTC") {
    var items = ["USD","ETH"];
    var str = "";
    for (var i = 0; i < items.length; i++) {
      str +=
        "<option value=" + '"' + items[i] + '"' + ">" + items[i] + "</option>";
    }
    if (to.innerHTML != str) {
      to.innerHTML = str;
    }
  }
  sellamountid.value = response["lprice"] * buyamountid.value;

  var btcusd = document.getElementById("btc-usd");
  var btceth = document.getElementById("btc-eth");
  var ethusd = document.getElementById("eth-usd");
  var ethbtc = document.getElementById("eth-btc");

  var theUrl1 = "https://cex.io/api/last_price/".concat(
    "BTC",
    "/",
    "USD",
    "/"
  );
  var xmlHttp = new XMLHttpRequest();
  xmlHttp.open("GET", theUrl1, false);
  xmlHttp.send(null);
  var response = JSON.parse(xmlHttp.responseText);
  btcusd.innerHTML="BTC/USD:".concat(response['lprice']);

  var theUrl3 = "https://cex.io/api/last_price/".concat(
    "ETH",
    "/",
    "USD",
    "/"
  );
  var xmlHttp = new XMLHttpRequest();
  xmlHttp.open("GET", theUrl3, false);
  xmlHttp.send(null);
  var response = JSON.parse(xmlHttp.responseText);
  ethusd.innerHTML="ETH/USD:".concat(response['lprice']);

  var theUrl4 = "https://cex.io/api/last_price/".concat(
    "ETH",
    "/",
    "BTC",
    "/"
  );
  var xmlHttp = new XMLHttpRequest();
  xmlHttp.open("GET", theUrl4, false);
  xmlHttp.send(null);
  var response = JSON.parse(xmlHttp.responseText);
  ethbtc.innerHTML="ETH/BTC:".concat(response['lprice']);
  btceth.innerHTML="BTC/ETH:".concat(Math.round(((1 / response["lprice"]) + Number.EPSILON) * 100000) / 100000);

}
function changebuy() {
  var response = request();
  sellamountid.value = 0;
  buyamountid.value = 0;
  var items = [];
  var str = "";
  if (from.value == "BTC") {
    items = ["USD","ETH"];
    str = "";
    for (var i = 0; i < items.length; i++) {
      str +=
        "<option value=" + '"' + items[i] + '"' + ">" + items[i] + "</option>";
    }
    if (to.innerHTML != str) {
      to.innerHTML = str;
    }
  }
  if (from.value == "ETH") {
    items = ["USD", "BTC"];
    str = "";
    for (var i = 0; i < items.length; i++) {
      str +=
        "<option value=" + '"' + items[i] + '"' + ">" + items[i] + "</option>";
    }
    if (to.innerHTML != str) {
      to.innerHTML = str;
    }
  }
  if (from.value == "USD") {
    items = ["ETH", "BTC"];
    str = "";
    for (var i = 0; i < items.length; i++) {
      str +=
        "<option value=" + '"' + items[i] + '"' + ">" + items[i] + "</option>";
    }
    if (to.innerHTML != str) {
      to.innerHTML = str;
    }
  }
}
function amountbuy() {
  var response = request();
  if (from.value == "USD") {
    sellamountid.value =
      Math.round(
        ((1 / response["lprice"]) * buyamountid.value + Number.EPSILON) *
          100000
      ) / 100000;
  }else{
  sellamountid.value = response["lprice"] * buyamountid.value;
  }
  if (from.value == "BTC"&& to.value=="ETH") {
    sellamountid.value =
      Math.round(
        ((1 / response["lprice"]) * buyamountid.value + Number.EPSILON) *
          100000
      ) / 100000;
  }
}
function amountsell() {
  var response = request();
  if (from.value == "USD") {
    buyamountid.value = response["lprice"] * sellamountid.value;
}else{
  buyamountid.value =
    Math.round(
      ((1 / response["lprice"]) * sellamountid.value + Number.EPSILON) * 100000
    ) / 100000;
}
if (from.value == "BTC"&& to.value=="ETH") {
  buyamountid.value =
    Math.round(
      ((1 / response["lprice"]) * sellamountid.value + Number.EPSILON) * 100000
    ) / 100000;
}
}

</script>
@endsection