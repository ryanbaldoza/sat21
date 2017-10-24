/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 24);
/******/ })
/************************************************************************/
/******/ ({

/***/ 24:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(25);


/***/ }),

/***/ 25:
/***/ (function(module, exports) {

$(document).ready(function () {

    //Sticky header 
    $(window).scroll(function () {
        var y = $(this).scrollTop();

        if (y > 300) {
            $('#sticky-header').css({
                'margin-top': '0px',
                'opacity': '1'
            });
        } else {
            $('#sticky-header').css({
                'margin-top': '-200px',
                'opacity': '0'
            });
        }
    });

    //Scroll to Top
    $(function () {

        $(document).on('scroll', function () {

            if ($(window).scrollTop() > 100) {
                $('.scroll-top-wrapper').addClass('show');
            } else {
                $('.scroll-top-wrapper').removeClass('show');
            }
        });

        $('.scroll-top-wrapper').on('click', scrollToTop);
    });

    function scrollToTop() {
        verticalOffset = typeof verticalOffset != 'undefined' ? verticalOffset : 0;
        element = $('body');
        offset = element.offset();
        offsetTop = offset.top;
        $('html, body').animate({ scrollTop: offsetTop }, 500, 'linear');
    }

    $('.hero-banner .owl-carousel').owlCarousel({
        autoplay: true,
        loop: true,
        margin: 10,
        nav: true,
        animateIn: 'fadeIn', // add this
        animateOut: 'fadeOut', // and this
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    if ($('body').hasClass('body__home')) {
        var carousel = function carousel(options) {

            var _carousel = {

                paused: false,

                stopped: false,

                options: {
                    speed: 5000,
                    acceleration: 5,
                    reverse: false,
                    selector: '.revolving-carousel',
                    slidesSelector: '.revolving-carousel__slides',
                    leftArrowSelector: '.revolving-carousel__arrow--left',
                    rightArrowSelector: '.revolving-carousel__arrow--right'
                },

                init: function init() {
                    var options = arguments.length <= 0 || arguments[0] === undefined ? {} : arguments[0];

                    // Copy options to this.options
                    for (var prop in options) {
                        if (!options.hasOwnProperty(prop)) break;
                        this.options[prop] = options[prop];
                    }

                    // Cache nodes
                    var carousel = document.querySelector(options.selector || this.options.selector);
                    var slides = this._slides = carousel.querySelector(this.options.slidesSelector);
                    this._leftArrow = carousel.querySelector(this.options.leftArrowSelector);
                    this._rightArrow = carousel.querySelector(this.options.rightArrowSelector);

                    // Multiply speed value by the number of slides
                    this.options.speed = this.options.speed * slides.children.length;

                    // Set slides container width
                    this.width = slides.offsetWidth;

                    // Repeat elements
                    slides.innerHTML = slides.innerHTML + slides.innerHTML + slides.innerHTML;

                    this._registerEvents();
                    this._animate();
                },
                _registerEvents: function _registerEvents() {
                    var _this = this;

                    var speed = this.options.speed;
                    var reverse = this.options.reverse;

                    this._rightArrow.addEventListener('mouseover', function () {
                        _this.options.speed = speed / _this.options.acceleration;
                        _this.options.reverse = false;
                    });
                    this._rightArrow.addEventListener('mouseleave', function () {
                        _this.options.speed = speed;
                        _this.options.reverse = reverse;
                    });
                    this._leftArrow.addEventListener('mouseover', function () {
                        _this.options.speed = speed / _this.options.acceleration;
                        _this.options.reverse = true;
                    });
                    this._leftArrow.addEventListener('mouseleave', function () {
                        _this.options.speed = speed;
                        _this.options.reverse = reverse;
                    });

                    // Pause when cursor is over carousel
                    this._slides.addEventListener('mouseover', this.pause.bind(this));
                    this._slides.addEventListener('mouseleave', this.start.bind(this));

                    // Pause when cursor is over carousel
                    window.addEventListener('resize', function () {
                        _this.width = _this._slides.offsetWidth;
                    });
                },
                pause: function pause() {
                    this.paused = true;
                },
                start: function start() {
                    this.paused = false;
                },
                stop: function stop() {
                    this.stopped = true;
                },
                _animate: function _animate() {
                    var _this2 = this;

                    var slides = this._slides;
                    var oneThird = slides.lastElementChild.getBoundingClientRect().right / 3;
                    var framesCount = 0;
                    var step = 0;
                    var posX = 0;

                    var animate = function animate() {
                        if (!_this2.paused) {

                            framesCount = _this2.options.speed * 60 / 1000;
                            step = oneThird / framesCount;

                            posX += _this2.options.reverse ? step : -step;

                            slides.style.transform = 'translateX(' + posX + 'px)';

                            if (_this2.options.reverse) {
                                if (posX >= _this2.width - oneThird) {
                                    posX = _this2.width - oneThird * 2;
                                }
                            } else {
                                if (Math.abs(posX) >= oneThird * 2) {
                                    posX = -oneThird;
                                }
                            }
                        }
                        !_this2.stopped && requestAnimationFrame(animate);
                    };
                    animate();
                }
            };

            _carousel.init(options);

            return _carousel;
        };

        window.onload = function () {
            return carousel({
                selector: '.revolving-carousel'
            });
        };
    }

    $('.three-items .owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            }
        }
    });

    $('.four-items .owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 4
            }
        }
    });

    $('.counter-num').counterUp({
        delay: 10,
        time: 2000
    });

    $('.venobox').venobox();

    $('.advertiser-1 .owl-carousel').owlCarousel({
        autoWidth: true,
        loop: true,
        margin: 10,
        pagination: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 6
            }
        }
    });

    $('.advertiser-2 .owl-carousel').owlCarousel({
        autoWidth: true,
        loop: true,
        margin: 10,
        center: true,
        startPosition: 3,
        pagination: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 6
            }
        }
    });

    if ($('body').hasClass('body__contactus')) {
        var initialize = function initialize() {

            var gmarkers = [];
            var map = null;
            var infowindow = null;

            var styles = [{
                featureType: "administrative",
                elementType: "all",
                stylers: [{ saturation: -99 }]
            }, {
                featureType: "landscape",
                elementType: "all",
                stylers: [{ saturation: -99 }]
            }, {
                featureType: "poi",
                elementType: "all",
                stylers: [{ saturation: -99 }]
            }, {
                featureType: "road",
                elementType: "all",
                stylers: [{ saturation: -99 }]
            }, {
                featureType: "transit",
                elementType: "all",
                stylers: [{ saturation: -99 }]
            }, {
                featureType: "water",
                elementType: "all",
                stylers: [{ saturation: -99 }]
            }];
            var customMarker = $('#heegus-map').data("marker");
            var mapOptions = {
                center: new google.maps.LatLng(55.869998, -4.263405),
                zoom: 13,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                mapTypeControl: false,
                zoomControl: true,
                styles: styles

            };

            map = new google.maps.Map(document.getElementById("heegus-map"), mapOptions);

            google.maps.event.addListener(map, 'click', function () {
                infowindow.close();
            });

            var locations = [['Heegus', 14.8511431, 120.8150448]];

            /*infowindow = new google.maps.InfoWindow({
              size: new google.maps.Size(150,50)
            });*/

            function setMarkers(locations) {
                for (var i = 0; i < locations.length; i++) {
                    var location = locations[i];
                    var myLatLng = new google.maps.LatLng(location[1], location[2]);
                    var marker = new google.maps.Marker({
                        position: myLatLng,
                        icon: customMarker,
                        animation: google.maps.Animation.DROP,
                        map: map,
                        title: location[0]
                    });

                    var latLng = marker.getPosition(); // returns LatLng object
                    map.setCenter(latLng); // setCenter takes a LatLng object
                    map.setZoom(17);

                    // Standard markers - if not using infobox
                    google.maps.event.addListener(marker, "click", function () {
                        map.setCenter(marker.getPosition());
                        infowindow.setContent(this.html);
                        infowindow.open(map, this);
                    });
                    gmarkers.push(marker);
                }
            }

            // Add the markers
            setMarkers(locations);
        };
        // add window listener for GMaps


        google.maps.event.addDomListener(window, 'load', initialize);
    }
});

/***/ })

/******/ });