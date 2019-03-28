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


//Home Route
Route::get('/', function () {
    return view('welcome');
});


// Text Recog routes.


//Authentication Routes.
Auth::routes();

Route::get('/Ambs/create', function () {
    return view('add');
});


//----After login routes.----

//Home
Route::get('/home', 'HomeController@index')->name('home');




//view ambu
Route::get('/Ambs/','AmbsController@index');
Route::post('/Ambs/create','AmbsController@add');
Route::get('/Ambs/{id}','AmbsController@view');
Route::get('/Ambs/{aid}/b/{uid}','AmbsController@book');

Route::get('/login1', function () {
    return view('auth.login1');
});












