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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/*
Route::get('/posts','PostController@index');
Route::get('/posts/{id}','PostController@show');
Route::get('/posts/create','PostController@create');
Route::post('/posts','PostController@store');
Route::post('posts/{id}','PostController@edit'); 
Route::put('/posts/{id}','PostController@update');
Route::delete('/posts/{id}','PostController@destroy');
*/

# Route::resource('posts','PostController');

Route::resource('posts','PostController',['only' => ['index','show','create','store','destroy']]);

Route::get('posts/edit/{id}','PostController@edit');
Route::post('posts/edit/{id}','PostController@update');
Route::post('posts/delete/{id}','PostController@destroy');