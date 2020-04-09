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

//Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

//Route::resource('contacts', 'ContactController');
//Route::apiResource('contacts', 'ContactController');
Route::get('/contacts','ContactController@index');
Route::get('/contacts/create','ContactController@create');
Route::post('/contacts','ContactController@store');
Route::get('/contacts/{contact}','ContactController@show');
Route::get('/contacts/{contact}/edit','ContactController@edit');
Route::get('/contacts/{contact}/update','ContactController@update');
Route::DELETE('/contacts/{contact}','ContactController@destroy');

