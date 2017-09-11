@extends( 'frontend/index' )

@section( 'content' )

{{-- HERO BANNER --}}
<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="4000">

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
        	<img src="{{ asset('frontend/imgs/slide1.png') }}" alt="Chania">
        </div>
        <div class="item">
        	<img src="{{ asset('frontend/imgs/slide2.png') }}" alt="Chania">
        </div>
        <div class="item">
        	<img src="{{ asset('frontend/imgs/slide3.png') }}" alt="Flower">
        </div>
        <div class="slide-content">
    		<div class="banner-logo"><img src="{{ asset('frontend/imgs/heegus-tagline.png') }}" alt="Heegus"></div>
			  <form class="form-inline" action="/action_page.php">
			    <div class="form-group">
			      <input type="text" class="form-control" placeholder="Search Services"  name="services">
			    </div>
			    <div class="form-group">
			      <input type="text" class="form-control" placeholder="Location" name="location">
			    </div>
			    <button type="submit" class="search__btn primary__btn __transition">Search</button>
			  </form>
    	</div>
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="sr-only">Next</span>
    </a>
</div>

@endsection