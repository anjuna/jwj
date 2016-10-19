<?php

Route::get('/', 'PagesController@index');
Route::get('/about-me', 'PagesController@aboutMe');
Route::get('/about-site', 'PagesController@aboutSite');
Route::get('/reviews', 'ReviewsController@index');
Route::get('/reviews/create', 'ReviewsController@create');
Route::post('/reviews/create', 'ReviewsController@save');

Auth::routes();
//Workaround so dont have to post a logout form...silly 5.3
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/vue', function (){
    return view('vue');
});


Route::any('adminer', '\Miroc\LaravelAdminer\AdminerController@index');

Route::get('test', function (){
    $review = App\Review::find(1);
    $review->update([
        'body' => 'back again'
    ]);

    return redirect('/reviews');
});
