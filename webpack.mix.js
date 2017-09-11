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
	'node_modules/bootstrap/dist/css/bootstrap.min.css'
], common + '/css/vendors.css')
.js('resources/assets/common/js/vendors.js', common + '/js/vendors.js')
.sass('resources/assets/common/scss/header.scss', common + '/css');
