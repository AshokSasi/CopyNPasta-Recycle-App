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

Route::get('/','BlogsController@index');

Route::get('/blogs/create','BlogsController@create');

Route::post('/blogs','BlogsController@store');


Route::get('/blogs/{blog}','BlogsController@show');

//Route::post('/posts/{post}/comments','CommentsController@store');
