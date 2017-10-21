@extends( 'frontend/index' )
@section('pageTitle', 'Service Provider Sign-up')
@section('body_class', 'body__signup_service_provider')
@section( 'content' )
<div class="page-container">
	<div class="container">
		<div class="signup-page" id="sign-up-service-provider">
			<h2 class="signup-title text-center">Select Class of Service</h2>
			<section>
				<div class="col-sm-4">
					<div class="pricing-table">
						<div class="pricing-head">
							<h3>Basic</h3>
						</div>
						<div class="pricing-content">
							<ul class="list-unstyled">
								<li>
									<p>Map</p>
									<img src="{{ asset('frontend/imgs/registration/plan-1-star.png') }}" alt="Heegus Packages">
								</li>
								<li>
									<p>Notification Services</p>
									<img src="{{ asset('frontend/imgs/registration/plan-1-star.png') }}" alt="Heegus Packages">
								</li>
								<li>
									<p>Other Services Nearby</p>
									<img src="{{ asset('frontend/imgs/registration/plan-1-star.png') }}" alt="Heegus Packages">
								</li>
								<li>
									<p>Point of Interest</p>
									<img src="{{ asset('frontend/imgs/registration/plan-1-star.png') }}" alt="Heegus Packages">
								</li>
								<li>
									<p class="no-star">Featured Service</p>
									<img src="{{ asset('frontend/imgs/registration/plan-0-star.png') }}" alt="Heegus Packages">
								</li>
								<li>
									<p class="no-star">Highlighted</p>
									<img src="{{ asset('frontend/imgs/registration/plan-0-star.png') }}" alt="Heegus Packages">
								</li>
								<li>
									<p>5 Photo/Video</p>
								</li>
							</ul>
						</div>
						<div class="pricing-footer">
							<p class="price-title">Price</p>
							<p class="price">PHP XXX</p>
							<p class="per-month">per month</p>
							<p class="days-trial">Free 10 days Trial</p>
							<a href="#" class="rounded __transition secondary__bordered__btn website__btn">Choose</a>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="pricing-table featured">
						<div class="pricing-head">
							<h3>Premium</h3>
						</div>
						<div class="pricing-content">
							<ul class="list-unstyled">
								<li>
									<p>Map</p>
									<img src="{{ asset('frontend/imgs/registration/plan-1-star.png') }}" alt="Heegus Packages">
								</li>
								<li>
									<p>Notification Services</p>
									<img src="{{ asset('frontend/imgs/registration/plan-1-star.png') }}" alt="Heegus Packages">
								</li>
								<li>
									<p>Other Services Nearby</p>
									<img src="{{ asset('frontend/imgs/registration/plan-2-star.png') }}" alt="Heegus Packages">
								</li>
								<li>
									<p>Point of Interest</p>
									<img src="{{ asset('frontend/imgs/registration/plan-2-star.png') }}" alt="Heegus Packages">
								</li>
								<li>
									<p>Featured Service</p>
									<img src="{{ asset('frontend/imgs/registration/plan-1-star.png') }}" alt="Heegus Packages">
								</li>
								<li>
									<p>Highlighted</p>
									<img src="{{ asset('frontend/imgs/registration/plan-1-star.png') }}" alt="Heegus Packages">
								</li>
								<li>
									<p>10 Photo/Video</p>
								</li>
							</ul>
						</div>
						<div class="pricing-footer">
							<p class="price-title">Price</p>
							<p class="price">PHP XXX</p>
							<p class="per-month">per month</p>
							<p class="days-trial">Free 20 days Trial</p>
							<a href="#" class="rounded __transition secondary__bordered__btn website__btn">Choose</a>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="pricing-table">
						<div class="pricing-head">
							<h3>Gold</h3>
						</div>
						<div class="pricing-content">
							<ul class="list-unstyled">
								<li>
									<p>Map</p>
									<img src="{{ asset('frontend/imgs/registration/plan-1-star.png') }}" alt="Heegus Packages">
								</li>
								<li>
									<p>Notification Services</p>
									<img src="{{ asset('frontend/imgs/registration/plan-1-star.png') }}" alt="Heegus Packages">
								</li>
								<li>
									<p>Other Services Nearby</p>
									<img src="{{ asset('frontend/imgs/registration/plan-3-star.png') }}" alt="Heegus Packages">
								</li>
								<li>
									<p>Point of Interest</p>
									<img src="{{ asset('frontend/imgs/registration/plan-3-star.png') }}" alt="Heegus Packages">
								</li>
								<li>
									<p>Featured Service</p>
									<img src="{{ asset('frontend/imgs/registration/plan-2-star.png') }}" alt="Heegus Packages">
								</li>
								<li>
									<p>Highlighted</p>
									<img src="{{ asset('frontend/imgs/registration/plan-2-star.png') }}" alt="Heegus Packages">
								</li>
								<li>
									<p>20 Photo/Video</p>
								</li>
							</ul>
						</div>
						<div class="pricing-footer">
							<p class="price-title">Price</p>
							<p class="price">PHP XXX</p>
							<p class="per-month">per month</p>
							<p class="days-trial">Free 30 days Trial</p>
							<a href="#" class="rounded __transition secondary__bordered__btn website__btn">Choose</a>
						</div>
					</div>
				</div>
			</section>
			
		</div>
	</div>
</div>
@endsection