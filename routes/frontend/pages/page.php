<?php

// Route::get('/', function () {
//     return view('frontend/pages/homepage');
// });

Route::get('/', 'PageController@home')->name('home');
Route::get('/about-us', 'PageController@aboutus')->name('about-us');
Route::get('/how-it-works', 'PageController@howitworks')->name('how-it-works');
Route::get('/advertiser', 'PageController@advertiser')->name('advertiser');
Route::get('/policy', 'PageController@policy')->name('policy');
Route::get('/contact-us', 'PageController@contactus')->name('contact-us');
Route::get('/create-service', 'PageController@createservice')->name('create-service');
Route::get('/choose-category', 'PageController@choosecategory')->name('choose-category');
Route::get('/apply-tags', 'PageController@applytags')->name('apply-tags');
Route::get('/sign-up-for-service-provider', 'PageController@signup_for_serviceprovider')->name('signup-serviceprovider');
Route::get('/sign-up-for-service-provider/basic', 'PageController@signup_for_serviceprovider_form')->name('signup-serviceprovider-form');