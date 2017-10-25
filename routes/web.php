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
Route::get('/', 'HomeController@index');
Route::get('/billeder', 'PhotoController@index');
Route::get('/plantegninger', 'PlanController@index');
Route::get('/byen', 'CityController@index');
Route::get('/fakta', 'AreaController@index');
Route::get('/kontakt', 'ContactController@index');
Route::post('/kontakt', 'ContactController@send')->name('email');
Route::get('/tak', 'ContactController@thanks')->name('thanks');
Route::get('/sitemap', function () {
    return response()->view('public.sitemap')->header('Content-Type', 'text/xml');
});
