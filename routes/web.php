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
Route::get('roomsoverview/{id}', 'RoomsoverviewController@index');

Route::resource('about', 'AboutController');
Route::post('villa/trysign', 'VillaController@trysign');
Route::get('villa/logout', 'VillaController@logout');
Route::post('villa/show', 'VillaController@show');
Route::post('villa/region', 'VillaController@region');
Route::get('villa/region', 'VillaController@region');
Route::get('villa/dashboard', 'VillaController@dashboard');
Route::post('villa/analytics', 'VillaController@analytics');
Route::resource('villa', 'VillaController');

Route::resource('facility', 'FacilityController');
Route::resource('blogcategory', 'BlogcategoryController');
Route::resource('blogitem', 'BlogitemController');
Route::resource('gallery', 'GalleryController');

Route::post('/getmsg','EmailController@index');

Route::resource('/', 'IndexController');

/*
Route::get('/', function () {
    return view('welcome');
});*/
