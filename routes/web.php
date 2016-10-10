<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'PagesController@index');
Route::get('/about-me', 'PagesController@aboutMe');
Route::get('/about-site', 'PagesController@aboutSite');
Route::get('/reviews', 'ReviewsController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/vue', function (){
    return view('vue');
});
