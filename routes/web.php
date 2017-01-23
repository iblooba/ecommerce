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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/cartproduct', function () {
    return view('showproduct');
});

Route::get('/home/showproduct', 'ProductsController@selectinproduct');
Route::get('/home/orders/{ProductID}', 'ProductsController@orders');

Route::get('/single_product', function () {
    return view('single_product');
});
Route::get('/home/show', 'ProductsController@selectproducts');
Route::get('/home/products/{id}', 'ProductsController@showproducts');
Route::get('/home/update/{id}', 'ProductsController@update');
Route::get('/backendupdateinfo/{id}', 'ProductsController@updateinfo');
Route::get('/home/updateinfo', 'ProductsController@updateinfo');
Route::post('/updatecart', 'ProductsController@updatecart');
Route::post('/checkoutprocess', 'ProductsController@checkoutprocess');




Route::get('/cart', function () {
    return view('cart');
});
Route::post('/checkout', function () {
    return view('checkout');
});
Route::get('/header', function () {
    return view('header');
});
Route::get('/footter', function () {
    return view('footter');
});
Route::get('/slide', function () {
    return view('slide');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

 Session::put('email', 'bloo@gmail.com');
