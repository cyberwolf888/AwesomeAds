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
Route::group(['middleware' => 'auth', 'as' => 'master.', 'prefix' => 'master'], function () {
    Route::get('/','Master\DashboardController@index')->name('dashboard');

    Route::group(['as' => 'inquiry.', 'prefix' => 'inquiry'], function () {
        Route::get('/','Master\InquiryController@index')->name('index');
        Route::get('/detail/{id}','Master\InquiryController@show')->name('detail');
        Route::get('/download/{id}','Master\InquiryController@downloadDesign')->name('download');
        Route::get('/confirm/{id}','Master\InquiryController@confirm')->name('confirm');
    });
    Route::group(['as' => 'price.', 'prefix' => 'price'], function () {
        Route::get('/','Master\PriceController@index')->name('index');
        Route::get('/create','Master\PriceController@create')->name('create');
        Route::post('/create','Master\PriceController@store')->name('store');
        Route::get('/edit/{id}','Master\PriceController@edit')->name('edit');
        Route::post('/edit/{id}','Master\PriceController@update')->name('update');
        Route::get('/delete/{id}','Master\PriceController@destroy')->name('delete');
    });
});