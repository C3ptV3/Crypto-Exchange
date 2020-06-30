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
	<div
		class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Dashboard</h1>

	</div>
	<form class="form" action="{{URL('/settings/edit')}}" method="post" id="registrationForm">
		@csrf
		<div class="form-row">
			<div class="col">
				<label for="firstname">First Name</label>
				<input type="text" class="form-control" value="{{$user['name']}}" name="first_name">
			</div>
			<div class="col">
				<label for="lastname">Last Name</label>
				<input type="text" class="form-control" value="{{$user['surname']}}" name="last_name">
			</div>
		</div>
		<div class="form-group">
			<label for="phone">Phone</label>
			<input type="text" class="form-control" id="phone" value="{{$user['phone']}}" name="phone">
		</div>
		<div class="form-group">
			<label for="inputAddress">Address</label>
			<input type="text" class="form-control" id="inputAddress" value="{{$user['address']}}" name="location">
		</div>
		<button class="btn btn--primary hvr-bounce-to-left" type="submit">Change details</button>
	</form>
	<h2>Your Trade Issues</h2>
	<div class="table-responsive">
		<table class="table table-striped table-sm">
			<thead>
				<tr>
					<th>Selling</th>
					<th>Buying</th>
					<th>Price</th>
					<th>Selling Value</th>
					<th>Buying Value</th>
					<th>Status</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($trades as $trade)
				<tr>
					<td>{{$trade['trade_from']}}</td>
					<td>{{$trade['trade_to']}} </td>
					@if ($trade['trade_from']=="USD")
					<td>{{round(1/$trade['trade_price'],5)}}</td>
					@else
					<td>{{$trade['trade_price']}}</td>
					@endif
					<td>{{$trade['trade_from_value']}}</td>
					<td>{{$trade['trade_to_value']}}</td>
					@if ($trade['sold']==0)
					<td>Not Sold</td>
					@else
					<td>Sold</td>
					@endif
					@endforeach
			</tbody>
		</table>
		<div class="row">
			<div class="col-12 text-center">
				{{$trades->links()}}
			</div>
		</div>
	</div>
</main>
@endsection