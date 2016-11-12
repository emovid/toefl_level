<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/stories', function () {
    return view('stories');
});

Route::get('/listening', function () {
    return view('listeing');
});

Route::get('/writing', function () {
    return view('writing');
});

Route::get('/reading', function () {
    return view('reading');
});

Route::get('/speaking', function () {
    return view('speaking');
});

Route::get('/about', function () {
    return view('about');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/catalog', 'HomeController@catalog');
Route::get('/learn_reading', 'HomeController@learn_reading');
Route::get('/learn_speaking', 'HomeController@learn_speaking');
Route::get('/learn_listening', 'HomeController@learn_listening');
Route::get('/learn_writing', 'HomeController@learn_writing');