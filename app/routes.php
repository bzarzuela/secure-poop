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

Route::group(['before' => 'auth'], function () {

  Route::get('/', function()
  {
    return "I am the homepage and this is a secret";
  });

  Route::get('/secret', function()
  {
    return "I am secret";
  });

});

Route::get('/login', function()
{
  return View::make('login');
});

Route::post('/login', function()
{
  $username = Input::get('username');
  $password = Input::get('password');

  if (Auth::attempt([
    'username' => $username,
    'password' => $password]
  )) {
    return Redirect::intended('/');
  } else {
    return Redirect::to('/login')->with('message', 'Invalid. Try again');
  }
});

