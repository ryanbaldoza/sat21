@extends( 'frontend/index' )
@section('pageTitle', 'About Us')
@section('body_class', 'body__aboutus')

@section( 'content' )

{{-- PAGE BANNER --}}
@include('frontend/partials/page-banner', 
			array(
				'title'		=>	'About Us',
				'banner'	=>	url('/').'/frontend/imgs/aboutus/aboutus.jpg'
			))


<div id="aboutus">
	<section class="first-row">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-md-offset-1 col-lg-5 col-lg-offset-1 text-content">
					<img src="/frontend/imgs/aboutus/logo.png" alt="Heegus">
					<p>Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.</p>
					<p> Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet.Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel,</p>
				</div>
				<div class="col-md-5 col-lg-6 diagonal-left">
					<img src="/frontend/imgs/aboutus/aboutus-diagonal.jpg" alt="Heegus About Us">
				</div>
			</div>
		</div>
	</section>

	<section class="section second-row">
		<div class="container">
			<div class="row">
				<div class="section-title">
					<h2>Mission</h2>
				</div>
				
				<p> Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.</p>
			</div>
		</div>
	</section>

	<section class="section third-row">
		<div class="white-overlay"></div>
		<div class="container">
			<div class="row">
					<div class="col-sm-12">
						<div class="section-title">
						<h2>Vision</h2>
					</div>
					<p> Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.</p>
				</div>
			</div>
		</div>
	</section>	

</div>


@endsection