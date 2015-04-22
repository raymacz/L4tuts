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

Route::get('/', 'HomeController@showWelcome'); ///HomeController class with method showWelcome
 
Route::get('post', 'PostController@show');

///Route::get($uri, $action) $uri = means url, $action= execute function in controller or anonymous function