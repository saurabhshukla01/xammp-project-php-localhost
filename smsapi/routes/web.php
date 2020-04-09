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

Route::get('/welcome', function () {
    return view('welcome');
});

//Route::get('/', function (Request $request) {
//    echo "Data inserted successfully";
//});

//Route::get('','TaskController@create');
//Route::post('/','TaskController@store');

//Route::get('/', 'TasksController@index');

//Auth::routes();

//Route::get('/task','TasksController@create');
//Route::post('/task','TasksController@store');

Route::get('/','TaskController@insertform');
Route::get('/create','TaskController@insert');

