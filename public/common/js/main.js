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
/******/ 	return __webpack_require__(__webpack_require__.s = 19);
/******/ })
/************************************************************************/
/******/ ({

/***/ 19:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(20);


/***/ }),

/***/ 20:
/***/ (function(module, exports) {

$(document).ready(function () {
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

    var carousel = function carousel(options) {

        var _carousel = {

            paused: false,

            stopped: false,

            options: {
                speed: 3000,
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
});

/*!
* jquery.counterup.js 1.0
*
* Copyright 2013, Benjamin Intal http://gambit.ph @bfintal
* Released under the GPL v2 License
*
* Date: Nov 26, 2013
*/
(function ($) {
    "use strict";

    $.fn.counterUp = function (options) {

        // Defaults
        var settings = $.extend({
            'time': 400,
            'delay': 10
        }, options);

        return this.each(function () {

            // Store the object
            var $this = $(this);
            var $settings = settings;

            var counterUpper = function counterUpper() {
                var nums = [];
                var divisions = $settings.time / $settings.delay;
                var num = $this.text();
                var isComma = /[0-9]+,[0-9]+/.test(num);
                num = num.replace(/,/g, '');
                var isInt = /^[0-9]+$/.test(num);
                var isFloat = /^[0-9]+\.[0-9]+$/.test(num);
                var decimalPlaces = isFloat ? (num.split('.')[1] || []).length : 0;

                // Generate list of incremental numbers to display
                for (var i = divisions; i >= 1; i--) {

                    // Preserve as int if input was int
                    var newNum = parseInt(num / divisions * i);

                    // Preserve float if input was float
                    if (isFloat) {
                        newNum = parseFloat(num / divisions * i).toFixed(decimalPlaces);
                    }

                    // Preserve commas if input had commas
                    if (isComma) {
                        while (/(\d+)(\d{3})/.test(newNum.toString())) {
                            newNum = newNum.toString().replace(/(\d+)(\d{3})/, '$1' + ',' + '$2');
                        }
                    }

                    nums.unshift(newNum);
                }

                $this.data('counterup-nums', nums);
                $this.text('0');

                // Updates the number until we're done
                var f = function f() {
                    $this.text($this.data('counterup-nums').shift());
                    if ($this.data('counterup-nums').length) {
                        setTimeout($this.data('counterup-func'), $settings.delay);
                    } else {
                        delete $this.data('counterup-nums');
                        $this.data('counterup-nums', null);
                        $this.data('counterup-func', null);
                    }
                };
                $this.data('counterup-func', f);

                // Start the count up
                setTimeout($this.data('counterup-func'), $settings.delay);
            };

            // Perform counts when the element gets into view
            $this.waypoint(counterUpper, { offset: '100%', triggerOnce: true });
        });
    };
})(jQuery);

/***/ })

/******/ });