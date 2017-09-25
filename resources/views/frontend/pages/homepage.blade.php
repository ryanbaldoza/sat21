@extends( 'frontend/index' )
@section('pageTitle', 'Home')
@section('body_class', 'body__home')

@section( 'content' )

{{-- HERO BANNER --}}
<div class="hero-banner">
    <div class="owl-carousel">
      <div class="item">
        <img src="{{ asset('frontend/imgs/slide1.png') }}" />
      </div>
      <div class="item">
        <img src="{{ asset('frontend/imgs/slide2.png') }}" />
      </div>
      <div class="item">
        <img src="{{ asset('frontend/imgs/slide3.png') }}" />
      </div>
    </div>
     <div class="slide-content">
            <div class="banner-logo"><img src="{{ asset('frontend/imgs/heegus-tagline.png') }}" alt="Heegus"></div>
              <form class="form-inline">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search Services"  name="services" id="services">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Location" name="location" id="location">
                </div>
                <button type="submit" class="search__btn primary__btn __transition">Search</button>
              </form>
        </div>
</div>

<section class="section" id="services-for-you">
    <div class="section-title">
        <h2>Services for you</h2>
    </div>

    <div class="revolving-carousel">
      <div class="revolving-carousel__arrow revolving-carousel__arrow--left"><i class="fa fa-chevron-left"></i></div>
      <div class="revolving-carousel__arrow revolving-carousel__arrow--right"><i class="fa fa-chevron-right"></i></div>
      <ul class="revolving-carousel__slides">
        <li>
            <img src="{{ asset('frontend/imgs/service-for-you-1.jpg') }}">
            <h4 class="overlay-title">Home</h4>
            <div class="gradient-overlay"></div>
            <div class="overlay"></div>
        </li>
        <li>
            <img src="{{ asset('frontend/imgs/service-for-you-2.jpg') }}">
            <h4 class="overlay-title">Transformation</h4>
            <div class="gradient-overlay"></div>
            <div class="overlay"></div>
        </li>
        <li>
            <img src="{{ asset('frontend/imgs/service-for-you-3.jpg') }}">
            <h4 class="overlay-title">Healthcare</h4>
            <div class="gradient-overlay"></div>
            <div class="overlay"></div>
        </li>
        <li>
            <img src="{{ asset('frontend/imgs/service-for-you-4.jpg') }}">
            <h4 class="overlay-title">Food</h4>
            <div class="gradient-overlay"></div>
            <div class="overlay"></div>
        </li>
        <li>
            <img src="{{ asset('frontend/imgs/service-for-you-5.jpg') }}">
            <h4 class="overlay-title">Events</h4>
            <div class="gradient-overlay"></div>
            <div class="overlay"></div>
        </li>
        <li>
            <img src="{{ asset('frontend/imgs/service-for-you-6.jpg') }}">
            <h4 class="overlay-title">Wellness</h4>
            <div class="gradient-overlay"></div>
            <div class="overlay"></div>
        </li>
      </ul>
    </div>
      
</section>

<section class="section" id="featured-services">
    <div class="section-title">
        <h2>Featured Services</h2>
    </div>

    <div class="container">
      <div class="row">
            <div class="four-items featured-services-carousel">
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
                    <div class="gradient-overlay"></div>
                    <div class="overlay-box">
                        <div class="box-content">
                            <h3>Big Ben's Auto Detailing</h3>
                          <!-- Rating Stars Box -->
                            <div class='rating-stars text-center'>
                                <ul id='stars'>
                                  <li class='star selected' title='Poor' data-value='1'>
                                    <i class='fa fa-star fa-fw'></i>
                                  </li>
                                  <li class='star selected' title='Fair' data-value='2'>
                                    <i class='fa fa-star fa-fw'></i>
                                  </li>
                                  <li class='star selected' title='Good' data-value='3'>
                                    <i class='fa fa-star fa-fw'></i>
                                  </li>
                                  <li class='star selected' title='Excellent' data-value='4'>
                                    <i class='fa fa-star fa-fw'></i>
                                  </li>
                                  <li class='star' title='WOW!!!' data-value='5'>
                                    <i class='fa fa-star fa-fw'></i>
                                  </li>
                                </ul>
                            </div>
                            <p>(20 reviews)</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                     <img src="{{ asset('frontend/imgs/toprated-services-2.jpg') }}">
                    <div class="gradient-overlay"></div>
                    <div class="overlay-box">
                        <div class="box-content">
                            <h3>Cindy's Cleaner</h3>
                              <!-- Rating Stars Box -->
                            <div class='rating-stars text-center'>
                                <ul id='stars'>
                                  <li class='star selected' title='Poor' data-value='1'>
                                    <i class='fa fa-star fa-fw'></i>
                                  </li>
                                  <li class='star selected' title='Fair' data-value='2'>
                                    <i class='fa fa-star fa-fw'></i>
                                  </li>
                                  <li class='star selected' title='Good' data-value='3'>
                                    <i class='fa fa-star fa-fw'></i>
                                  </li>
                                  <li class='star selected' title='Excellent' data-value='4'>
                                    <i class='fa fa-star fa-fw'></i>
                                  </li>
                                  <li class='star' title='WOW!!!' data-value='5'>
                                    <i class='fa fa-star fa-fw'></i>
                                  </li>
                                </ul>
                            </div>
                            <p>(20 reviews)</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('frontend/imgs/toprated-services-3.jpg') }}">
                    <div class="gradient-overlay"></div>
                    <div class="overlay-box">
                        <div class="box-content">
                            <h3>6th Media Studio</h3>
                              <!-- Rating Stars Box -->
                            <div class='rating-stars text-center'>
                                <ul id='stars'>
                                  <li class='star selected' title='Poor' data-value='1'>
                                    <i class='fa fa-star fa-fw'></i>
                                  </li>
                                  <li class='star selected' title='Fair' data-value='2'>
                                    <i class='fa fa-star fa-fw'></i>
                                  </li>
                                  <li class='star selected' title='Good' data-value='3'>
                                    <i class='fa fa-star fa-fw'></i>
                                  </li>
                                  <li class='star selected' title='Excellent' data-value='4'>
                                    <i class='fa fa-star fa-fw'></i>
                                  </li>
                                  <li class='star' title='WOW!!!' data-value='5'>
                                    <i class='fa fa-star fa-fw'></i>
                                  </li>
                                </ul>
                            </div>
                            <p>(20 reviews)</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('frontend/imgs/toprated-services-1.jpg') }}">
                    <div class="gradient-overlay"></div>
                    <div class="overlay-box">
                        <div class="box-content">
                              <h3>Fitness 32</h3>
                              <!-- Rating Stars Box -->
                            <div class='rating-stars text-center'>
                                <ul id='stars'>
                                  <li class='star selected' title='Poor' data-value='1'>
                                    <i class='fa fa-star fa-fw'></i>
                                  </li>
                                  <li class='star selected' title='Fair' data-value='2'>
                                    <i class='fa fa-star fa-fw'></i>
                                  </li>
                                  <li class='star selected' title='Good' data-value='3'>
                                    <i class='fa fa-star fa-fw'></i>
                                  </li>
                                  <li class='star selected' title='Excellent' data-value='4'>
                                    <i class='fa fa-star fa-fw'></i>
                                  </li>
                                  <li class='star' title='WOW!!!' data-value='5'>
                                    <i class='fa fa-star fa-fw'></i>
                                  </li>
                                </ul>
                            </div>
                            <p>(20 reviews)</p>
                        </div>
                       
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('frontend/imgs/toprated-services-2.jpg') }}">
                    <div class="gradient-overlay"></div>
                    <div class="overlay-box">
                        <div class="box-content">
                            <h3>Big Ben's Auto Detailing</h3>
                          <!-- Rating Stars Box -->
                        <div class='rating-stars text-center'>
                            <ul id='stars'>
                              <li class='star selected' title='Poor' data-value='1'>
                                <i class='fa fa-star fa-fw'></i>
                              </li>
                              <li class='star selected' title='Fair' data-value='2'>
                                <i class='fa fa-star fa-fw'></i>
                              </li>
                              <li class='star selected' title='Good' data-value='3'>
                                <i class='fa fa-star fa-fw'></i>
                              </li>
                              <li class='star selected' title='Excellent' data-value='4'>
                                <i class='fa fa-star fa-fw'></i>
                              </li>
                              <li class='star' title='WOW!!!' data-value='5'>
                                <i class='fa fa-star fa-fw'></i>
                              </li>
                            </ul>
                        </div>
                        <p>(20 reviews)</p>
                        </div>
                    </div>
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
                <div class="how-it-works-col after">
                    <img src="{{ asset('frontend/imgs/icon-search-select.png') }}" alt="Heegus">
                    <h3>Search and Select</h3>
                    <p>Aliquam lorem ante,dapibus in. viverra quis,feugiat a, tellus. Phase llus viverra</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="how-it-works-col after">
                    <img src="{{ asset('frontend/imgs/icon-contact-book.png') }}" alt="Heegus">
                    <h3>Contact/Book ISP</h3>
                    <p>Aliquam lorem ante,dapibus in. viverra quis,feugiat a, tellus. Phase llus viverra</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="how-it-works-col">
                    <img src="{{ asset('frontend/imgs/icon-payment.png') }}" alt="Heegus">
                    <h3>Payment</h3>
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
                <div class="video-wrapper">
                 <a class="venobox" data-autoplay="true" data-overlay="rgba(239,74,35,0.7)" data-vbtype="video" href="https://www.youtube.com/watch?v=5NfMCj8VCak">
                    <img src="{{ asset('frontend/imgs/thumbnail-videos-1.jpg') }}" alt="">
                    <svg class="video-overlay-play-button" viewBox="0 0 200 200" alt="Play video">\
                    <circle cx="100" cy="100" r="90" fill="none" stroke-width="15" stroke="#fff"/>\
                    <polygon points="70, 55 70, 145 145, 100" fill="#fff"/>\
                    </svg>
                  </a>  
                </div>
                    <div class="video-description">
                        <h2>How to become a Service Provider</h2>
                        <p>sit amet adipiscing sem neque ipsum.
Nam nunc, blandit  vel, luctus pulvinar, hendrerit
id, lorem</p>
                    </div>
            </div>
            <div class="col-md-6">
                <div class="video-wrapper">
                    <a class="venobox" data-autoplay="true" data-overlay="rgba(239,74,35,0.7)" data-vbtype="video" href="https://www.youtube.com/watch?v=5NfMCj8VCak">
                        <img src="{{ asset('frontend/imgs/thumbnail-videos-2.jpg') }}" alt="">
                        <svg class="video-overlay-play-button" viewBox="0 0 200 200" alt="Play video">\
                        <circle cx="100" cy="100" r="90" fill="none" stroke-width="15" stroke="#fff"/>\
                        <polygon points="70, 55 70, 145 145, 100" fill="#fff"/>\
                        </svg>
                    </a>
                </div>
                    <div class="video-description">
                        <h2>Easy way to be a Freelancer</h2>
                        <p>sit amet adipiscing sem neque ipsum.
Nam nunc, blandit  vel, luctus pulvinar, hendrerit
id, lorem</p>
                    </div>
            </div>

        </div>

         <div class="section-footer">
            <a href="#" class="website__btn secondary__btn __transition">View All</a>
        </div>

    </div>
</section>
<section id="project-counter">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="counter-content">
                    <h2><span class="counter-num">82</span>+</h2>
                    <p>projects</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="counter-content">
                    <h2><span class="counter-num">10500</span>+</h2>
                    <p>happy customers</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="counter-content">
                    <h2><span class="counter-num">11</span>+</h2>
                    <p>new accounts today</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection