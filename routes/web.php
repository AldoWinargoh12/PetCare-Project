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

Auth::routes(['verify' => true]);





//Route::get('profile', function () {
    // Only verified users may enter...
Auth::routes();
Route::resource('posts','PostController'); 
    
    
    
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/homepage', function () {
    return view('homepage');
});
Route::resource('registerpets','RegisterpetController');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
//start of advertisement controller

Route::get('/about', function () {
    return view('about');
});

Route::get('/rules', function () {
    return view('rules');
});

Route::get('/advertisement', function () {
    return view('pageTemplate.showAd');
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

Route::get('/matchmaking', 'matchmaking@index');
Route::get('/matchmaking/action', 'matchmaking@action')->name('matchmaking.action');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
