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
Auth::routes();
Route::get('/home', 'HomeController@index');
Route::get('/', 'HomeController@index');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::resource('advertisements', 'AdvertisementController');
Route::get('/about', function () {
    return view('about');
});
Route::get('/rules', function () {
    return view('rules');
});
Route::get('/advertisement', function () {
    return view('advertisement.showAd')->name('home');
});


Route::get('/search', function () {
    return view('advertisement.liveSearch');
});
Route::get('/live_search', 'LiveSearch@index');
Route::get('/live_search/action', 'LiveSearch@action')->name('live_search.action');




Route::resource('registerpets','RegisterpetController')->middleware('auth');


Route::get('/createAdvertisement', function () {
    return view('advertisement.createAd');
})->middleware('auth');
Route::resource('posts','PostController')->middleware('auth');
