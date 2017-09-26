@extends( 'frontend/index' )
@section('pageTitle', 'How It Works')
@section('body_class', 'body__howitworks')

@section( 'content' )


{{-- PAGE BANNER --}}
@include('frontend/partials/page-banner', 
			array(
				'title'		=>	'How It Works',
				'banner'	=>	url('/').'/frontend/imgs/howitworks/howitworks-banner.jpg'
			))

<div id="howitworks">
	<div class="white-overlay"></div>
	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3 howitworks-section">
					<img src="{{ asset('frontend/imgs/howitworks/icon-search.png') }}" alt="Heegus Search">
					<h2>Search and Select</h2>
					<p>Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
					<img src="{{ asset('frontend/imgs/howitworks/gray-dots-vertical.png') }}" alt="Heegus" class="gray-dots-vertical">
				</div>
				<div class="col-sm-6 col-sm-offset-3 howitworks-section">
					<img src="{{ asset('frontend/imgs/howitworks/icon-contact.png') }}" alt="Heegus Search">
					<h2>Contact/Book ISP</h2>
					<p>Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
					<img src="{{ asset('frontend/imgs/howitworks/gray-dots-vertical.png') }}" alt="Heegus" class="gray-dots-vertical-last">
				</div>
				<div class="col-sm-6 col-sm-offset-3 howitworks-section">
				<img src="{{ asset('frontend/imgs/howitworks/icon-payment.png') }}" alt="Heegus Search">
					<h2>Payment</h2>
					<p>Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
				</div>
				
			</div>
		</div>
	</section>
</div>


@endsection