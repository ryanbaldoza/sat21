@extends( 'frontend/index' )
@section('pageTitle', 'Basic Information')
@section('body_class', 'body__applytags')

@section( 'content' )

<div id="applytags" class="">
	<div class="container-fluid">
		<div class="row __flex">
			<!-- Left Content -->
			<div class="col-xs-12 col-md-6 col-md-offset-1 page-container">
				<div class="col-xs-12">
					<h3><strong>Apply Tags</strong></h3>
					<div class="content-divider">
						<p>Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
					</div>
					<a href="{{ url('choose-category') }}" class="nav__btn gray__btn __transition" >Back</a>
					<a href="{{ url('basic-info') }}" class="nav__btn secondary__btn __transition" >Next</a>
				</div>
			</div>
			<!-- Right Content -->
			<div class="col-xs-12 col-md-4 col-md-offset-1 container-gray page-container">
				<div class="col-xs-10 col-xs-offset-1">
					<div class="text-center right__stage">
						<div class="col-xs-12">
							<h4><strong>Basic Information</strong></h4>
							<div class="content-divider">
								<div class="progress">
								  <div class="progress-bar" role="progressbar" aria-valuenow="70"
								  aria-valuemin="0" aria-valuemax="100" style="width:40%">
								  </div>
								</div>
							</div>
							<p>Step 2/4</p>
							<div class="content-divider">
								<img class="img-responsive center-block" src="{{ asset('frontend/imgs/applytags/atags_right_img.png') }}" alt="">
							</div>

							<div class="col-xs-12">
								<p><strong>APPLYING TAGS</strong><br><br>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
							</div>
							<div class="col-xs-12">
								<div class="mt-30">
									<a href="/" onclick="return false;" class="nav__btn primary__btn __transition" >Save & Exit</a>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	
	
</div>


@endsection