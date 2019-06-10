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
    return view('home');
});

Route::get('menu', function () {
    return view('menu');
});

Route::get('services', function () {
    return view('services');
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('about', function () {
    return view('about');
});

Route::get('shop', function () {
    return view('shop');
});

Route::get('single-product', function () {
    return view('single-product');
});

Route::get('checkout', function () {
    return view('checkout');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('cart', function () {
    return view('cart');
});