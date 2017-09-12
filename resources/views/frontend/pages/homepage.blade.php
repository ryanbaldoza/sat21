@extends( 'frontend/index' )

@section( 'content' )

{{-- HERO BANNER --}}

<div id="heroBanner" class="carousel slide carousel-fade" data-ride="carousel" data-interval="4000">

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
    <a class="left carousel-control" href="#heroBanner" role="button" data-slide="prev"><span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#heroBanner" role="button" data-slide="next"><span class="sr-only">Next</span>
    </a>
</div>

<section class="section" id="services-for-you">
    <div class="section-title">
        <h2>Services for you</h2>
    </div>

    <div class="revolving-carousel">
      <div class="revolving-carousel__arrow revolving-carousel__arrow--left"></div>
      <div class="revolving-carousel__arrow revolving-carousel__arrow--right"></div>
      <ul class="revolving-carousel__slides">
        <li>
            <img src="{{ asset('frontend/imgs/service-for-you-1.jpg') }}">
            <h4 class="overlay-title">Home</h4>
            <div class="overlay"></div>
        </li>
        <li>
            <img src="{{ asset('frontend/imgs/service-for-you-2.jpg') }}">
            <h4 class="overlay-title">Transformation</h4>
            <div class="overlay"></div>
        </li>
        <li>
            <img src="{{ asset('frontend/imgs/service-for-you-3.jpg') }}">
            <h4 class="overlay-title">Healthcare</h4>
            <div class="overlay"></div>
        </li>
        <li>
            <img src="{{ asset('frontend/imgs/service-for-you-4.jpg') }}">
            <h4 class="overlay-title">Food</h4>
            <div class="overlay"></div>
        </li>
        <li>
            <img src="{{ asset('frontend/imgs/service-for-you-5.jpg') }}">
            <h4 class="overlay-title">Events</h4>
            <div class="overlay"></div>
        </li>
        <li>
            <img src="{{ asset('frontend/imgs/service-for-you-6.jpg') }}">
            <h4 class="overlay-title">Wellness</h4>
            <div class="overlay"></div>
        </li>
      </ul>
    </div>
      
</section>

<section class="section" id="featured-services">
    <div class="section-title">
        <h2>Featured Services</h2>
    </div>

    <div class="three-items featured-services-carousel">
      <div class="owl-carousel">
        <div class="item">
            <img src="{{ asset('frontend/imgs/featured-services-1.jpg') }}">
            <h4>For Dads</h4>
            <div class="gradient-overlay"></div>
            <div class="overlay"></div>
        </div>
        <div class="item">
             <img src="{{ asset('frontend/imgs/featured-services-2.jpg') }}">
            <h4>For Moms</h4>
            <div class="gradient-overlay"></div>
            <div class="overlay"></div>
        </div>
        <div class="item">
            <img src="{{ asset('frontend/imgs/featured-services-3.jpg') }}">
            <h4>For Kids</h4>
            <div class="gradient-overlay"></div>
            <div class="overlay"></div>
        </div>
        <div class="item">
            <img src="{{ asset('frontend/imgs/featured-services-4.jpg') }}">
            <h4>PWD's</h4>
            <div class="gradient-overlay"></div>
            <div class="overlay"></div>
        </div>
      </div>
    </div>

</section>

<section class="section" id="popular-services">
    <div class="section-title">
        <h2>Popular Services in your area</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="three-items popular-services-carousel">
              <div class="owl-carousel">
                <div class="item">
                    <img src="{{ asset('frontend/imgs/popular-services-1.jpg') }}">
                    <h4>Interior Design</h4>
                    <div class="gradient-overlay"></div>
                    <div class="overlay"></div>
                </div>
                <div class="item">
                     <img src="{{ asset('frontend/imgs/popular-services-2.jpg') }}">
                    <h4>Auto Detailing</h4>
                    <div class="gradient-overlay"></div>
                    <div class="overlay"></div>
                </div>
                <div class="item">
                    <img src="{{ asset('frontend/imgs/popular-services-3.jpg') }}">
                    <h4>Handyman</h4>
                    <div class="gradient-overlay"></div>
                    <div class="overlay"></div>
                </div>
                <div class="item">
                    <img src="{{ asset('frontend/imgs/popular-services-1.jpg') }}">
                    <h4>Interior Design</h4>
                    <div class="gradient-overlay"></div>
                    <div class="overlay"></div>
                </div>
                <div class="item">
                    <img src="{{ asset('frontend/imgs/popular-services-2.jpg') }}">
                    <h4>Auto Detailing</h4>
                    <div class="gradient-overlay"></div>
                    <div class="overlay"></div>
                </div>
              </div>
            </div>
        </div>
    </div>
</section>

<section class="section" id="top-rated-provider">
    <div class="section-title">
        <h2>top rated service provider</h2>
    </div>

    <div class="container">
        <div class="row">
            <div class="popular-services-carousel four-items">
              <div class="owl-carousel">
                <div class="item">
                    <img src="{{ asset('frontend/imgs/toprated-services-1.jpg') }}">
                    <h4>Interior Design</h4>
                    <div class="gradient-overlay"></div>
                    <div class="overlay"></div>
                </div>
                <div class="item">
                     <img src="{{ asset('frontend/imgs/toprated-services-2.jpg') }}">
                    <h4>Auto Detailing</h4>
                    <div class="gradient-overlay"></div>
                    <div class="overlay"></div>
                </div>
                <div class="item">
                    <img src="{{ asset('frontend/imgs/toprated-services-3.jpg') }}">
                    <h4>Handyman</h4>
                    <div class="gradient-overlay"></div>
                    <div class="overlay"></div>
                </div>
                <div class="item">
                    <img src="{{ asset('frontend/imgs/toprated-services-1.jpg') }}">
                    <h4>Interior Design</h4>
                    <div class="gradient-overlay"></div>
                    <div class="overlay"></div>
                </div>
                <div class="item">
                    <img src="{{ asset('frontend/imgs/toprated-services-2.jpg') }}">
                    <h4>Auto Detailing</h4>
                    <div class="gradient-overlay"></div>
                    <div class="overlay"></div>
                </div>
              </div>
            </div>
        </div>
        <div class="section-footer">
            <a href="#" class="website__btn secondary__btn __transition">View All</a>
        </div>
    </div>
</section>

<section class="section" id="how-it-works">
    <div class="section-title">
        <h2>how it works</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="how-it-works-wrap">
            <div class="col-md-4">
                <div class="how-it-works-col">
                    <img src="{{ asset('frontend/imgs/icon-search-select.png') }}" alt="Heegus">
                    <h3>Search and Select</h3>
                    <p>Aliquam lorem ante,dapibus in. viverra quis,feugiat a, tellus. Phase llus viverra</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="how-it-works-col">
                    <img src="{{ asset('frontend/imgs/icon-search-select.png') }}" alt="Heegus">
                    <h3>Search and Select</h3>
                    <p>Aliquam lorem ante,dapibus in. viverra quis,feugiat a, tellus. Phase llus viverra</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="how-it-works-col">
                    <img src="{{ asset('frontend/imgs/icon-search-select.png') }}" alt="Heegus">
                    <h3>Search and Select</h3>
                    <p>Aliquam lorem ante,dapibus in. viverra quis,feugiat a, tellus. Phase llus viverra</p>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>

<section class="section" id="get-connected">
<div class="col-md-offset-2 col-md-4">
            <div class="get-connected-content">
                
                 <h2>Get Connected!</h2>  
                 <p>Send project requests and hire the right pro with the Heegus Mobile App on your smartphones.</p> 
                 <div class="mobile-apps">
                     <img src="{{ asset('frontend/imgs/playstore.png') }}" alt="Google Play">
                     <img src="{{ asset('frontend/imgs/appstore.png') }}" alt="App Store">
                 </div>
                </div>
            </div>
</section>

<section class="section" id="videos">
    <div class="section-title">
        <h2>videos</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                
            </div>
            <div class="col-md-6">
                
            </div>
        </div>
    </div>
</section>
<section id="project-counter">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="counter-content">
                    <h2>82+</h2>
                    <p>projects</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="counter-content">
                    <h2>10500+</h2>
                    <p>happy customers</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="counter-content">
                    <h2>11+</h2>
                    <p>new accounts today</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection