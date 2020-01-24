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

Route::get('/', 'PostsController@index');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'PostsController@index');

Route::get('/users/edit', 'UsersController@edit');

Route::post('/users/update', 'UsersController@update');

Route::get('/users/{user_id}', 'UsersController@show');

Route::get('/posts/new', 'PostsController@new')->name('new');

Route::post('/posts', 'PostsController@store');

Route::get('/postsdelete/{post_id}', 'PostsController@destroy');

Route::get('/posts/{post_id}/likes', 'LikesController@store');

Route::get('/likes/{like_id}', 'LikesController@destroy');