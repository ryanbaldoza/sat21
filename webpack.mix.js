let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
var common = 'public/common';

mix.styles([
	'node_modules/bootstrap/dist/css/bootstrap.min.css',
	'node_modules/owl.carousel/dist/assets/owl.carousel.min.css',
	'node_modules/owl.carousel/dist/assets/owl.theme.default.min.css'
], common + '/css/vendors.css')
.js('resources/assets/common/js/vendors.js', common + '/js/vendors.js')
.js('resources/assets/common/js/main.js', common + '/js/main.js')
.sass('resources/assets/common/scss/main.scss', common + '/css')
.copy('node_modules/font-awesome/fonts/*', 'public/fonts');

