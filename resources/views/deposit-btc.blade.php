@extends('layouts.app')
@section('content')
<link href="{{ asset('css/account-settings.css') }}" rel="stylesheet">
<div class="container">
	<div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						{{$user['name']." ".$user['surname']}}
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="#">
								<i class="glyphicon glyphicon-home"></i>
								Overview </a>
						</li>
						<li>
							<a href="{{ url('/deposit') }}">
								<i class="glyphicon glyphicon-user"></i>
								Deposit </a>
						</li>
						<li>
							<a href="withdraw">
								<i class="glyphicon glyphicon-user"></i>
								Withdraw </a>
						</li>
					</ul>
				</div>
				<!-- END MENU -->

				<div class="portlet light bordered">
					<!-- STAT -->
					<div class="row list-separated profile-stat">
						<div class="col-md-4 col-sm-4 col-xs-6">
							<div class="uppercase profile-stat-title"> {{$user['USD']}} </div>
							<div class="uppercase profile-stat-text"> USD </div>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-6">
							<div class="uppercase profile-stat-title"> {{$user['BTC']}} </div>
							<div class="uppercase profile-stat-text"> BTC </div>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-6">
							<div class="uppercase profile-stat-title"> {{$user['ETH']}} </div>
							<div class="uppercase profile-stat-text"> ETH </div>
						</div>
					</div>
					<!-- END STAT -->
				</div>



			</div>
		</div>
		<div class="col-md-9">
			<div class="profile-content">
				<div class="tab-content">
					<div class="tab-pane active" id="home">
                        <p> Please send the desired amount of BTC to this </p>
						<h1>{{$address}}</h1>
						<p> Press done when you sent. </p>
						<button type="button" class="btn btn-lg btn-block btn-primary" style="margin-top: 53px; width: auto;" onclick="window.location='{{ url('/deposit/btc') }}'">Done</button>
					</div>
					<!--/tab-pane-->

					
				</div>

			</div>
			<!--/tab-pane-->
		</div>
		<!--/tab-content-->
	</div>
</div>
@endsection
