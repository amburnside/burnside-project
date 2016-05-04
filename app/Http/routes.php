<?php


Route::group(['middleware' => 'web'], function () {
    Route::get('/', 'PagesController@home');
    Route::resource('flyers', 'FlyersController');
    Route::get('{postcode}/{street}', 'FlyersController@show');
    Route::post('{postcode}/{street}/photos', ['as' => 'store_photo_path', 'uses' => 'PhotosController@store']);
    Route::auth();
});
