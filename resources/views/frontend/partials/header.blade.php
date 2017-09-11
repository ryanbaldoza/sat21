<!DOCTYPE html>
<html>
	<head>
		<title>Heegus | Your Nearby ServiceHub</title>
		<link rel="icon" href="{{ asset('frontend/imgs/logo-heegus.png') }}">
		<link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="{{ asset('common/css/vendors.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('common/css/header.css') }}">
	</head>
	<body>
		<header>
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<a href="#">
							<img src="{{ asset('frontend/imgs/logo-heegus.png') }}" class="__logo img-responsive">
						</a>
						<a href="#" class="website__btn primary__btn __transition">
							What's Nearby
						</a>

						<div class="user__action pull-right">
							<a href="#" id="sign__up">
								<img src="{{ asset('frontend/imgs/icon-signup.png') }}" class="img-responsive">
								Sign Up
							</a>
							<a href="#" id="sign__in">
								<img src="{{ asset('frontend/imgs/icon-signin.png') }}" class="img-responsive">
								Sign In
							</a>
							<a href="#" class="website__btn secondary__btn __transition">
								Join as Service Provider
							</a>
							<a href="#" class="website__btn secondary__btn __transition">
								Join as Freelancer
							</a>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</header>