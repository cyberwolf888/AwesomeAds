<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index')->name('home');

Route::get('/pricing', 'HomeController@pricing')->name('pricing');

Route::get('/contact', 'HomeController@contact')->name('contact');

Route::get('/about', 'HomeController@about')->name('about');

Route::get('/articles', 'HomeController@articles')->name('articles');

Route::get('/faq', 'HomeController@faq')->name('faq');

Route::get('/placeads', 'HomeController@placeads')->name('ads');
Route::get('/placeads/{ad}', 'HomeController@placeads')->name('ads');
Route::post('/placeads', 'HomeController@storeads')->name('ads');

Route::get('/getprice/{type}', 'HomeController@getPrice')->middleware('ajax');

Route::get('/payment/{id}', 'HomeController@payment')->name('payment');
Route::get('/landing/paypal', 'HomeController@getPaymentStatus')->name('payment.status');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/sendemail', 'HomeController@sendemail');


//Admin routes
Route::group(['middleware' => 'auth', 'as' => 'master', 'prefix' => 'master'], function () {
    Route::get('/', function ()    {
        // Uses Auth Middleware
    });

    Route::get('user/profile', function () {
        // Uses Auth Middleware
    });
});