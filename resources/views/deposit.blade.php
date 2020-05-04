@extends('layouts.app')
@section('sidebar')
<div>
</div>
@endsection
@section('content')

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div
	class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">Deposit</h1>

</div>
		<div class="card-deck mb-3 text-center" >
			<div class="card mb-4 box-shadow" >
				<div class="card-header" >
					<h4 class="my-0 font-weight-normal">Deposit Cash</h4>
				</div>
				<div class="card-body" >
					<ul class="list-unstyled mt-3 mb-4">
						<li>Type the Amount</li>
						<form class="form" action="deposit/cash" method="post" id="cash">
							@csrf
							<div class="form-group">
								<input type="number" class="form-control" name="cash" id="cash" value="0"
									title="Enter the amount.">

							</div>
							<button type="submit" class="btn btn-lg btn-block btn-primary">Deposit</button>
						</form>
					</ul>
				</div>
			</div>
			<div class="card mb-4 box-shadow" >
				<div class="card-header" >
					<h4 class="my-0 font-weight-normal">Deposit BTC</h4>
				</div>
				<div class="card-body" >
					<ul class="list-unstyled mt-3 mb-4">
						<li>Click the button below</li>
					</ul>
					<button type="button" class="btn btn-lg btn-block btn-primary">Get started</button>
				</div>
			</div>
			<div class="card mb-4 box-shadow" >
				<div class="card-header" >
					<h4 class="my-0 font-weight-normal">Deposit ETH</h4>
				</div>
				<div class="card-body" >
					<ul class="list-unstyled mt-3 mb-4">
						<li>Click the button below</li>
					</ul>
					<button type="button" class="btn btn-lg btn-block btn-primary">Contact us</button>
				</div>
			</div>
		</div>


	
</main>
@endsection