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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/test', function() {
// 	return view('This is testring');
// });
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
	
	Route::get("/test/user", function(){
		return "This is test";
	});

	Route::get("/test/{firstname}/{age}", function($test){
		return "welcome".$test."";
	});

	Route::get("/test/{name}", function($test){
		return "welcome hello from test";
	});

	Route::get("/Controller", "BookController@hello");	