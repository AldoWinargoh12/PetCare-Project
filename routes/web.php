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


Route::get('/petregister', function () {
    return view('petregister');
});


Auth::routes(['verify'=> true]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profilePost/create','profilePostController@create')->name('profilePost.create');
Route::get('/profilePost/store','profilePostController@store')->name('profilePost.store');
Route::get('/viewPost','profilePostController@index')->name('viewPost');
Route::get('/profilePost/view/{id}','profilePostController@show')->name('profilePost.view');

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

