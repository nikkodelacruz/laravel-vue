<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/test', function () {
    return 'hello test';
});

// About page
Route::get('/about', function () {
    return view('pages.about');
});

// Dynamic route
Route::get('/users/{id}/{name}', function ($id, $name) {
	return 'This is user id:'.$id.$name;
});


// Pages controller
Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');

// shortcut
// map routes to controller
//can add param /{id}will get index($id)
Route::resource('/posts','PostsController'); //only get index