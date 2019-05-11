<?php
//31240
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


Auth::routes();

Route::get('/email', function() {
    return new \App\Mail\NewUserWelcomeMail();
});

Route::post('/follow/{user}', 'FollowsController@store');

Route::get('/', 'PostsController@index');
Route::get('/p/create', 'PostsController@create')->name('post.create');
Route::post('/p/store', 'PostsController@store');
Route::get('/p/show/{post}', 'PostsController@show')->name('post.show');
Route::get('/profile/{username}', 'ProfilesController@index')->name('profile.show');
Route::get('/profile/{username}/edit', 'ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/{username}', 'ProfilesController@update')->name('profile.update');
