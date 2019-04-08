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

Route::get('/home', 'PostController@index')->name('home');

Route::post('/createpost', [
    'uses' => 'PostController@postCreatePost',
    'as' => 'post.create',
    'middleware' => 'auth'
]);

Route::get('/profile', [
    'uses' => 'ProfileController@view',
    'as' => 'profile.view',
    'middleware' => 'auth'
]);

Route::get('/edit_profile', [
    'uses' => 'ProfileController@edit',
    'as' => 'profile.edit',
    'middleware' => 'auth'
]);

Route::post('/update_profile', [
    'uses' => 'ProfileController@update',
    'as' => 'profile.update',
    'middleware' => 'auth'
]);

Route::get('/reset_password', [
    'uses' => 'ProfileController@changePassword',
    'as' => 'profile.change_password',
    'middleware' => 'auth'
]);

Route::post('/update_password', [
    'uses' => 'ProfileController@updatePassword',
    'as' => 'profile.update_password',
    'middleware' => 'auth'
]);
