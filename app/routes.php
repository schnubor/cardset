<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', [
    'as' => 'home',
    'uses' => 'HomeController@home'
  ]);

// Unauthenticated Group
//-----------------------------------------------------

Route::group(array('before' => 'guest'), function()
{
  Route::get('/register', [
    'as' => 'register',
    'uses' => 'UsersController@create'
  ]);

  Route::post('/register', [
    'as' => 'register',
    'uses' => 'UsersController@store'
  ]);

  Route::get('/login', [
    'as' => 'login',
    'uses' => 'SessionsController@create'
  ]);

  Route::post('/login', [
    'as' => 'login',
    'uses' => 'SessionsController@store'
  ]);
});

// Authenticated Group
//-----------------------------------------------------

Route::group(array('before' => 'auth'), function()
{
  Route::get('/dashboard', [
    'as' => 'dashboard',
    'uses' => 'UsersController@show'
  ]);
});