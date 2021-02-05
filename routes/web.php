<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/ripple', function () {
    return view('ripple');
});

Route::get('/features', function () {
    return view('features');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/neptune', function () {
    return view('neptune');
});

Route::get('/newhome', function () {
    return view('home-new');
});

Route::get('/accordion', function () {
    return view('accordion');
});
