@extends( 'frontend/index' )
@section('pageTitle', 'Basic Information')
@section('body_class', 'body__basicone')

@section( 'content' )

<div id="choosecategory" class="">
	<div class="container-fluid">
		<div class="row __flex">
			<!-- Left Content -->
			<div class="col-xs-12 col-md-6 col-md-offset-1 page-container">
				<div class="col-xs-12">
					<h3><strong>Choose Category</strong></h3>
					<div class="col-xs-12">
						<!-- categories -->
						<div class="content-divider">
							<!-- basicone categories -->
							<ul class="list-inline text-center">
								<li class="ccategory-cat active">
									<a href="#">
										<div class="ccc_img">
											<img src="{{ asset('frontend/imgs/choosecategory/ccategory_p1.png') }}" class="center-block" alt="">
										</div>
										<div class="ccc_txt">
											<div class="container-table">
												<div class="container-cell">
													<p>Home</p>
												</div>
											</div>
										</div>
									</a>
									<div class="ccc_arrow"></div>
								</li>
								<li class="ccategory-cat">
									<a href="#">
										<div class="ccc_img">
											<img src="{{ asset('frontend/imgs/choosecategory/ccategory_p2.png') }}" class="center-block" alt="">
										</div>
										<div class="ccc_txt">
											<div class="container-table">
												<div class="container-cell">
													<p>Food & Groceries</p>
												</div>
											</div>
										</div>
									</a>
									<div class="ccc_arrow"></div>
								</li>
								<li class="ccategory-cat"><a href="#">
										<div class="ccc_img">
											<img src="{{ asset('frontend/imgs/choosecategory/ccategory_p3.png') }}" class="center-block" alt="">
										</div>
										<div class="ccc_txt">
											<div class="container-table">
												<div class="container-cell">
													<p>Healthcare</p>
												</div>
											</div>
										</div>
									</a>
									<div class="ccc_arrow"></div>
								</li>
								<li class="ccategory-cat"><a href="#">
										<div class="ccc_img">
											<img src="{{ asset('frontend/imgs/choosecategory/ccategory_p4.png') }}" class="center-block" alt="">
										</div>
										<div class="ccc_txt">
											<div class="container-table">
												<div class="container-cell">
													<p>Education / Art & Sports</p>
												</div>
											</div>
										</div>
									</a>
									<div class="ccc_arrow"></div>
								</li>
								<li class="ccategory-cat"><a href="#">
										<div class="ccc_img">
											<img src="{{ asset('frontend/imgs/choosecategory/ccategory_p5.png') }}" class="center-block" alt="">
										</div>
										<div class="ccc_txt">
											<div class="container-table">
												<div class="container-cell">
													<p>Automobile</p>
												</div>
											</div>
										</div>
									</a>
									<div class="ccc_arrow"></div>
								</li>
							</ul>
						</div>
						<!-- category services -->
						<div class="content-divider">
							<div class="ccategory-services">
								<!-- <div class="col-xs-12">
									<div class="col-xs-12 col-sm-4">{{ form::radio('service', 'Laundry Services', true) }}</div>
									<div class="col-xs-12 col-sm-4">{{ form::radio('service', 'Electrical') }}</div>
									<div class="col-xs-12 col-sm-4">{{ form::radio('service', 'Glass/ Aluminum Installation') }}</div>
								</div>
								<div class="col-xs-12">
									<div class="col-xs-12 col-sm-4">{{ form::radio('service', 'CCTV & Sercurity Installation') }}</div>
									<div class="col-xs-12 col-sm-4">{{ form::radio('service', 'Roof repair & Installatio') }}n</div>
									<div class="col-xs-12 col-sm-4">{{ form::radio('service', 'Floor Repair & Installation') }}</div>
								</div>
								<div class="col-xs-12">
									<div class="col-xs-12 col-sm-4">{{ form::radio('service', 'Upholstery') }}</div>
									<div class="col-xs-12 col-sm-4">{{ form::radio('service', 'Furniture') }}</div>
									<div class="col-xs-12 col-sm-4">{{ form::radio('service', 'Landscaping') }}</div>
								</div>
								<div class="col-xs-12">
									<div class="col-xs-12 col-sm-4">{{ form::radio('service', 'Ironworks') }}</div>
									<div class="col-xs-12 col-sm-4">{{ form::radio('service', 'Carpentry') }}</div>
									<div class="col-xs-12 col-sm-4">{{ form::radio('service', 'Pest Control') }}</div>
								</div>
								<div class="col-xs-12">
									<div class="col-xs-12 col-sm-4">{{ form::radio('service', 'House Painting') }}</div>
								</div>
								<div class="clearfix"></div> -->
							</div>

						</div>
						<!-- action btns -->
						<a href="{{ url('create-service') }}" class="nav__btn gray__btn __transition" >Back</a>
						<a href="/" onclick="return false;" class="nav__btn secondary__btn __transition" >Next</a>
					</div>
					<div class="cleafix"></div>
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
								  aria-valuemin="0" aria-valuemax="100" style="width:25%">
								  </div>
								</div>
							</div>
							<p>Step 1/4</p>
							<div class="content-divider">
								<img class="img-responsive center-block" src="{{ asset('frontend/imgs/choosecategory/ccategory_right_img.png') }}" alt="">
							</div>

							<div class="col-xs-12">
								<p><strong>CHOOSE INDUSTRY</strong><br><br>Lets create your first service Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
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