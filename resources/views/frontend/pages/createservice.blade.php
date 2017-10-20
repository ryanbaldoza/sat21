@extends( 'frontend/index' )
@section('pageTitle', 'Create New Service')
@section('body_class', 'body__createservice')

@section( 'content' )

<div id="createservice" class="">
	<div class="container-fluid">
		<div class="row __flex">
			<!-- Left Content -->
			<div class="col-xs-12 col-md-5 col-md-offset-1 page-container">
				<div class="col-xs-12">
					<div class="row">
						<div class="col-xs-12">
							<h3><strong>Create New Service</strong></h3>
							<p>Lets create your first service Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. </p>
						</div>
						<div class="col-xs-12">
							<div class="content-divider">
								<div class="cservice-stage __flex">
									<div class="col-xs-12 col-md-8 col-lg-9">
										<div class="cservice-stat "></div>
										<div class="cservice-img">
											<img src="{{ asset('frontend/imgs/createservice/service_p1.png') }}" alt="" class="center-block">
										</div>
										<h4><strong>Basic Information</strong></h4>
										<p>STEP 1 OF 5</p>
									</div>
									<div class="col-xs-12 col-md-4 col-lg-3">	
										<a href="{{ url('create-service/choose-category') }}" class="link__btn secondary__btn  __transition " >CONTINUE</a>
									</div>
									<div class="cleafix"></div>
								</div>
								<!-- <div class="cservice-stage __flex">
									<div class="col-xs-12 col-md-8 col-lg-9">

										<div class="cservice-stat"></div>
										<div class="cservice-img">
											<img src="{{ asset('frontend/imgs/createservice/service_p2.png') }}" alt="" class="center-block">
										</div>
										<h4><strong>Media Gallery</strong></h4>
										<p>STEP 1 OF 2</p>
									</div>
									<div class="col-xs-12 col-md-4 col-lg-3">	
										<a href="/" onclick="return false;" class="link__btn secondary__btn __transition disable" >CONTINUE</a>
									</div>
									<div class="cleafix"></div>
								</div> -->
								<div class="cservice-stage __flex">
									<div class="col-xs-12 col-md-8 col-lg-9">
										<div class="cservice-stat"></div>
										<div class="cservice-img">
											<img src="{{ asset('frontend/imgs/createservice/service_p3.png') }}" alt="" class="center-block">
										</div>
										<h4><strong>Availability & Pricing</strong></h4>
										<p>STEP 1 OF 4</p>
									</div>
									<div class="col-xs-12 col-md-4 col-lg-3">	
											<a href="/" onclick="return false;" class="link__btn secondary__btn __transition disable" >CONTINUE</a>
									</div>
									<div class="cleafix"></div>
								</div>
								
							</div>
						</div>
						<div class="cleafix"></div>
					</div>
					<a href="/" onclick="return false;" class="nav__btn primary__btn __transition disable" >Publish</a>
					<!-- <a href="/" onclick="return false;" class="nav__btn secondary__btn __transition disable" >Preview</a> -->
				</div>
			</div>
			<!-- Right Content -->
			<div class="col-xs-12 col-md-5 col-md-offset-1 container-gray page-container">
				<div class="container-table">
					<div class="container-cell">
						<img class="img-responsive center-block" src="{{ asset('frontend/imgs/createservice/service_right_img.png') }}" alt="">
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	
	
</div>


@endsection