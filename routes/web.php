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

Route::get('/posts','PostController@getPostsList')->name('post.list');
Route::get('/posts/{id}','PostController@read')->name('post.view');
Route::get('/posts/create','PostController@create');
Route::get('/posts/update','PostController@update');
Route::get('/posts/delete','PostController@delete');
