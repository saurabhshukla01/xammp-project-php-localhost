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

//Route::get('test/{fname}','Hellocontroller@index');
Route::get('test/{fname}','Hellocontroller@index')->where(['fname'=>"[a-zA-Z]+"]);

Route::get('profile','TestController@showview');
Route::get('test','HelloAllController@siteview');
Route::get('helloblade','Hellocontroller@data');
Route::get('subject','SubjectController@index');
Route::get('testview','ViewController@index');
Route::get('testdata','ViewController@data');
Route::get('modelview','modelviewController@index');
Route::get('modelview1','modelviewController@data');
Route::get('form','contactcontoller@index');
Route::post('/contact','contactcontoller@store')->name('contactstore');
Route::get('/validation','ValidationController@form');
Route::post('/validation','ValidationController@validateform');


Route::get('register','RegisterController@adduser');
Route::post('store','RegisterController@store');

// not using controller method only use for view purpose alternative way :

Route::get('demo/{price}', function ($price) {
    echo "Price is $price";
})->where(['price'=>"[0-9]+"]);

// Required Parameter of url pass all value print on browser output ..
Route::get('filter/{min}/{max}', function ($min,$max) {
    echo "reqiured parameter : man is $min And max is $max";
});

// optional Parameter of url pass all value print on browser output ..
Route::get('filter/{max}/{min?}', function ($max,$min='0') {
    echo "Optional Parameter : max is $max And min is $min";
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello',function(){
    return view ('hello');
})->middleware('test');

?>
