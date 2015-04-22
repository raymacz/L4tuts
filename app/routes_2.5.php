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

Route::get('/', 'HomeController@showWelcome');
 
//Route::get('post/listing', 'PostController@listing');




//this route uses that Postcontroller that method listing
Route::get('post/listing', array('uses'=>'PostController@listing', 'as' => 'getz.post.listing')); 
/// post/listing can be changed with blog/listing  in routes, with no hassle of changing controller & view 
//Route::get('post/single', array('uses'=>'PostController@single', 'as' => 'post.single'));
// Route::get('post/{id}', array('uses'=>'PostController@single', 'as' => 'get.post.single'))->where('id', '[0-8][0-2]*');
 //where($name, $expression)  //[0-9]means mandatory [0-9]+mandatory [0-9]* optional

Route::get('post/{id}/{slug}', array('uses'=>'PostController@single', 'as' => 'getz.post.single'))->where(array (
        'id' =>'[0-9][0-9]*',
        'slug' => '[a-zA-Z0-9-_]*', //'slug' => '[a-zA-Z0-9-_]+',
   ) );
 
//Route::get('post/{id}', array('uses'=>'PostController@single', 'as' => 'get.post.single'))->where(array (
//        'id' =>'[0-9][0-9]*',
//        //'slug' => '[a-zA-Z0-9-_]+',
//   ) );

 Route::post('post/{id}', array('uses'=>'PostController@update', 'as' => 'postz.post.single'))->where('id', '[1-9][0-9]*');
 
 
 //regular expressions: up and running  /// 'as' serves as a unique key