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

Route::resource('contact', 'ContactController');
Route::resource('rooms', 'RoomsController');
//Route::resource('roomsoverview', 'RoomsoverviewController');
Route::get('roomsoverview/{id}', 'RoomsoverviewController@index');

Route::resource('about', 'AboutController');
Route::resource('facility', 'FacilityController');
Route::resource('blogcategory', 'BlogcategoryController');
Route::resource('blogitem', 'BlogitemController');
Route::resource('gallery', 'GalleryController');

Route::post('/getmsg','EmailController@index');

Route::get('login', array(
    'uses' => 'LoginController@showLogin'));

// route to process the form
Route::post('login', array(
    'uses' => 'LoginController@doLogin'
));
Route::get('logout', array(
    'uses' => 'LoginController@doLogout'
));

Route::resource('/', 'IndexController');

/*
Route::get('/', function () {
    return view('welcome');
});*/
