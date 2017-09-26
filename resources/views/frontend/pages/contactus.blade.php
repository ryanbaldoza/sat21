@extends( 'frontend/index' )
@section('pageTitle', 'Contact Us')
@section('body_class', 'body__contactus')
@section('scripts')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNTSMEOij97Zpc3vSSkP1pXOIWg8tH-gA&sensor=false"></script>
@section( 'content' )


{{-- PAGE BANNER --}}
@include('frontend/partials/page-banner', 
			array(
				'title'		=>	'Contact Us',
				'banner'	=>	url('/').'/frontend/imgs/contactus/contactus-banner.jpg'
			))

<div class="page-container" id="contactus">

<section class="contactus white-bg">	
			<div class="container">
				    <div class="row">
				    	<div class="col-sm-6">
				    		<img class="contactus-img img-responsive" src="{{ asset('frontend/imgs/contactus/contactus-img.jpg') }}" alt="Heegus">
				    		<div class="contact-left-panel">
				    			<h3>Address</h3>
				    			<p>Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi</p>
				    		</div>
				    		<div class="contact-left-panel">
				    			<h3>Email</h3>
				    			<p>heegus@heegus.com</p>
				    		</div>
				    		<div class="contact-left-panel">
				    			<nav class="footer-social">	
									<ul class="list-unstyled list-inline">	
										<li><a href="#"><img src="{{ asset('frontend/imgs/contactus/icon-facebook.png') }}" alt="Facebook"></a></li>
										<li><a href="#"><img src="{{ asset('frontend/imgs/contactus/icon-instagram.png') }}" alt="Instagram"></a></li>
										<li><a href="#"><img src="{{ asset('frontend/imgs/contactus/icon-google.png') }}" alt="Google"></a></li>
									</ul>
								</nav>
				    		</div>
				    	</div>
				    <div class="col-sm-6 contact-right-panel">
				    		<h3>Get In Touch</h3>

				      <form role="form" class="clearfix">
	    				<div class="row">
	    					<div class="col-sm-12">
	    						<div class="form-group">
		    						<label class="sr-only" for="contact-name">Name</label>
									<input type="text" class="form-control input-lg" id="contact-name" placeholder="Name*">
	    						</div>
	    					</div><!-- end col -->
	    					
	    					<div class="col-sm-12">
	    						<div class="form-group">
		    						<label class="sr-only" for="contact-company">Company</label>
									<input type="text" class="form-control input-lg" id="contact-company" placeholder="Company*">
	    						</div>
	    					</div><!-- end col -->

	    					<div class="col-sm-12">
	    						<div class="form-group">
		    						<label class="sr-only" for="contact-email">Email</label>
									<input type="email" class="form-control input-lg" id="contact-email" placeholder="Email Address*">
	    						</div>
	    					</div><!-- end col -->
	    					
							<div class="col-sm-12">
	    						<div class="form-group">
		    						<label class="sr-only" for="contact-phone">Phone Number</label>
									<input type="text" class="form-control input-lg" id="contact-phone" placeholder="Phone Number*">
	    						</div>
	    					</div><!-- end col -->

	    					<div class="col-sm-12">
	    						<div class="form-group">
		    						<label class="sr-only" for="contact-words">Message</label>
		    						<textarea class="form-conrol input-lg" id="contact-words" placeholder="Message" rows="8"></textarea>
	    						</div>
	    					</div><!-- end col -->
	    				</div><!-- row -->
						<input type="submit" class="website__btn secondary__btn __transition" value="Send Message &raquo;">
			        </form>
				    	</div>
				    </div><!-- primary -->
			    </div><!-- container -->
		</section>

	
	

</div>

	<div id="heegus-map" data-marker="{{ asset('frontend/imgs/contactus/icon-marker.png') }}"></div>
		
		
@endsection