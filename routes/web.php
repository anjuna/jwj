<?php

Route::get('/', 'PagesController@index');
Route::get('/about-me', 'PagesController@aboutMe');
Route::get('/about-site', 'PagesController@aboutSite');
Route::get('/reviews', 'ReviewsController@index');

Auth::routes();

Route::get('/vue', function (){
    return view('vue');
});


Route::any('adminer', '\Miroc\LaravelAdminer\AdminerController@index');

Route::get('test', function (){

    $ob = new App\Services\Jsonifer(new App\Book);
    $ob->output();

    dd('ok');
});
