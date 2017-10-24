<?php

/*
|--------------------------------------------------------------------------
| Web Routes - Frontend
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Static Pages Routes
require base_path('routes/frontend/pages/page.php');
require base_path('routes/frontend/registration/serviceprovider.php');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
