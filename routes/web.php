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
Route::get('/annotate', 'AnnotationController@displayForm');
Route::post('/annotate', 'AnnotationController@annotateImage');

//Authentication Routes.
Auth::routes();


//----After login routes.----

//Home
Route::get('/home', 'HomeController@index')->name('home');

//Paper routes


//view paper
Route::get('/papers/','PapersController@index');

//Add a paper
Route::get('/papers/create','PapersController@create');
Route::post('/papers/create','PapersController@add');

//Add a question
Route::get('/papers/{id}','PapersController@addQuestions');
Route::post('/papers/{id}','PapersController@submitQuestions');

//Check paper
Route::post('/papers/{id}/check','CheckController@checkmate');

Route::get('/papers/{id}/result','PapersController@viewresult');










