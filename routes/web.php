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

Route::get('/search', function () {
    return view('pageTemplate.liveSearch');
});


Route::resource('advertisements', 'AdvertisementController');

Route::get('/live_search', 'LiveSearch@index');
Route::get('/live_search/action', 'LiveSearch@action')->name('live_search.action');




Route::get('/', 'PagesController@home');
Route::get('/petregister', function () {
    return view('petregister');
});

Route::resource('contacts', 'ContactController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




