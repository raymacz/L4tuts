<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
  
 routes action from controller to views, and uses filters.php for authentication
 Route::get($uri, $action); $action array('uses'=>'anycontroller@anymethod', 'as' ='any.key.for.views', 'before/after'='auth'))-where(array('key1'='value1','key1'='value1'));

resource countroller  for handling APIs, CRUD functionality like CMS
 -contains pre-defined set of methods that adhere to the rest pattern 
  
 
 on terminal use the command:
  $ php artisan controller:make UserController
 -creates resource controller "UserController" w/ pre-defined resource methods (on app/controllers)

   on terminal use the command:
 php artisan routes -> display all your uri & routes with keys
*/


Route::get('/', 'HomeController@showWelcome');
  //Route::group($attributes, $callback);

Route::get('post/listing', array('uses'=>'PostController@listing', 'as' => 'getz.post.listing')); 
Route::get('post/{id}', array('uses'=>'PostController@single', 'as' => 'getz.post.single'))->where(array ('id' =>'[0-9][0-9]*', ) );
//Route::post($uri, $action) 
Route::get('post/update/{id}', array('uses'=>'PostController@update', 'as' => 'postz.post.single'))->where('id', '[1-9][0-9]*');
Route::get('post/insert', array('uses'=>'PostController@insert', 'as' => 'getz.post.insert'));
Route::get('post/delete/{id}', array('uses'=>'PostController@destroy', 'as' => 'delz.post.single'))->where('id', '[1-9][0-9]*');


//Route::resource($name, $controller, $options)
//Route::resource('user','UserController', array('except' => array('show')));
//Route::resource('user','UserController', array('except' => array('edit','update','destroy')));
Route::resource('user','UserControllerbug');
/// '/user' uri route a resource to a controller ("UserController") with CRUDE methods
/// 'only' use methods edit,update, destroy & hold other methods u dont need

