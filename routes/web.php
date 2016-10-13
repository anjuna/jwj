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
// use Zf2Basket\Basket as Zf2Basket;
// use Zf2Basket\Storage\Adapter\Cookie as StorageAdapterCookie;
// use Zf2Basket\Storage\StorageAdapterInterface;

Route::get('test', function (){


    // $basket = new Zf2Basket(new StorageAdapterCookie(session_id(), array(StorageAdapterInterface::CONFIG_NAME => 'SOME_COOKIE_NAME')));

    app()->bind(
        'Zf2Basket\Storage\StorageAdapterInterface',
        'Zf2Basket\Storage\Adapter\Cookie'
    );

    $basket = app()->make(Zf2Basket\Zf2Basket::class);

    dd($basket);
});
