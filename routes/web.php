<?php

Route::get('/', 'PagesController@index');
Route::get('/about-me', 'PagesController@aboutMe');
Route::get('/about-site', 'PagesController@aboutSite');
Route::get('/reviews', 'ReviewsController@index');
Route::get('/reviews/create', 'ReviewsController@create');

Auth::routes();

Route::get('/vue', function (){
    return view('vue');
});


Route::any('adminer', '\Miroc\LaravelAdminer\AdminerController@index');
