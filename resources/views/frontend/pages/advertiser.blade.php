@extends( 'frontend/index' )
@section('pageTitle', 'Advertiser')
@section('body_class', 'body__advertiser')

@section( 'content' )


{{-- PAGE BANNER --}}
@include('frontend/partials/page-banner', 
			array(
				'title'		=>	'Advertiser',
				'banner'	=>	url('/').'/frontend/imgs/advertiser/advertiser-banner.jpg'
			))

<div class="page-container" id="advertiser">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1 text-center">
				<p class="lead">Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus.</p>
			</div>
		</div>
		<div class="row">
			<div class="advertiser-1">
				<div class="owl-carousel owl-theme">
				    <div class="item"><a href="#"><img src="{{ asset('frontend/imgs/advertiser/advertiser-01.jpg') }}" alt=""></a></div>
				    <div class="item"><a href="#"><img src="{{ asset('frontend/imgs/advertiser/advertiser-02.jpg') }}" alt=""></a></div>
				    <div class="item"><a href="#"><img src="{{ asset('frontend/imgs/advertiser/advertiser-03.jpg') }}" alt=""></a></div>
				    <div class="item"><a href="#"><img src="{{ asset('frontend/imgs/advertiser/advertiser-04.jpg') }}" alt=""></a></div>
				    <div class="item"><a href="#"><img src="{{ asset('frontend/imgs/advertiser/advertiser-05.jpg') }}" alt=""></a></div>
				    <div class="item"><a href="#"><img src="{{ asset('frontend/imgs/advertiser/advertiser-06.jpg') }}" alt=""></a></div>
				    <div class="item"><a href="#"><img src="{{ asset('frontend/imgs/advertiser/advertiser-07.jpg') }}" alt=""></a></div>
				    <div class="item"><a href="#"><img src="{{ asset('frontend/imgs/advertiser/advertiser-08.jpg') }}" alt=""></a></div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="advertiser-2">
				<div class="owl-carousel owl-theme">
				    <div class="item"><a href="#"><img src="{{ asset('frontend/imgs/advertiser/advertiser-01.jpg') }}" alt=""></a></div>
				    <div class="item"><a href="#"><img src="{{ asset('frontend/imgs/advertiser/advertiser-02.jpg') }}" alt=""></a></div>
				    <div class="item"><a href="#"><img src="{{ asset('frontend/imgs/advertiser/advertiser-03.jpg') }}" alt=""></a></div>
				    <div class="item"><a href="#"><img src="{{ asset('frontend/imgs/advertiser/advertiser-04.jpg') }}" alt=""></a></div>
				    <div class="item"><a href="#"><img src="{{ asset('frontend/imgs/advertiser/advertiser-05.jpg') }}" alt=""></a></div>
				    <div class="item"><a href="#"><img src="{{ asset('frontend/imgs/advertiser/advertiser-06.jpg') }}" alt=""></a></div>
				    <div class="item"><a href="#"><img src="{{ asset('frontend/imgs/advertiser/advertiser-07.jpg') }}" alt=""></a></div>
				    <div class="item"><a href="#"><img src="{{ asset('frontend/imgs/advertiser/advertiser-08.jpg') }}" alt=""></a></div>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="section get-in-touch text-center">
	<h2>Let's Work Together!</h2>
	<a href="#" class="website__btn secondary__btn __transition">Get In Touch</a>
</section>


@endsection