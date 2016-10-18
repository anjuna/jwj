<?php

Route::get('/', 'PagesController@index');
Route::get('/about-me', 'PagesController@aboutMe');
Route::get('/about-site', 'PagesController@aboutSite');
Route::get('/reviews', 'ReviewsController@index');
Route::get('/reviews/create', 'ReviewsController@create');

Auth::routes();
//Workaround so dont have to post a logout form
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/vue', function (){
    return view('vue');
});


Route::any('adminer', '\Miroc\LaravelAdminer\AdminerController@index');

Route::get('test', function (){
    $type = App\Type::find(2);

    $reviews = $type->reviewables()->with('reviews')->get();

    dd(json_encode($reviews));
});
