<?php

Route::get('home', function () {
    return redirect(route('admin.home'));
});

Route::get('/', 'ContentController@homePage')->name('home');

Route::resource('news', 'NewsController', ['only' => ['show', 'index']]);

Route::resource('product', 'ProductController', ['only' => ['show', 'index']]);

Route::get('about-us', 'ContentController@aboutUs')->name('about-us');

Route::get('contact-us', 'ContentController@contactUs')->name('contact-us');
Route::post('contact-us', 'ContentController@storeContactUs')->name('contact-us');

// Admin routes
Route::group(['namespace' => 'Admin', 'as' => 'admin.', 'middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::get('home', 'AdminController@home')->name('home');
});
Auth::routes();
