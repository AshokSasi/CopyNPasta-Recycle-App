<?php


Route::get('/','ItemsController@index');

Route::get('/home/{item}','ItemsController@show');

Route::get('/home/about,ItemsController@about')

Route::get('/posts/index','PostsController@index');

Route::get('/posts/create','PostsController@create');

Route::post('/posts','PostsController@store');


Route::get('/posts/{post}','PostsController@show');

Route::post('/posts/{post}/comments','CommentsController@store');
