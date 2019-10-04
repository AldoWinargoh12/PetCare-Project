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
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/rules', function () {
    return view('rules');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/advertisement', function () {
    return view('showAd');
});

Route::get('/createAdvertisement', function () {
    return view('pageTemplate.createAd');
});

Route::get('/editcredentials', function () {
    return view('pageTemplate.editcredentials');
});

Route::resource('advertisements', 'AdvertisementController');

