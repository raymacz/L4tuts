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
 |
*/

Route::get('/', 'HomeController@showWelcome');
 
//-----------------------

//Route::get('post/listing', array('uses'=>'PostController@listing', 'as' => 'getz.post.listing')); 
///// post/listing can be changed with blog/listing  in routes, with no hassle of changing controller & view 
////Route::get('post/{id}', array('uses'=>'PostController@single', 'as' => 'getz.post.single', 'before' => 'auth'))
////        ->where(array ('id' =>'[0-9][0-9]*',));
///// 'before' means run the filter before routing to the controller & goes back to public/login page
//
//Route::get('post/{id}', array('uses'=>'PostController@single', 'as' => 'getz.post.single'))
//        ->where(array ('id' =>'[0-9][0-9]*',)); 
//
// Route::post('post/{id}', array('uses'=>'PostController@update', 'as' => 'postz.post.single'))->where('id', '[1-9][0-9]*');
 
 
 //--------------------------
//  //Route::group($attributes, $callback); ///group uri routes w/ shared attrib 
 //Route::group($attributes, $callback);
//Route::group(array('before'=> 'auth'), function(){
//        //this route uses that Postcontroller method listing  //Route::post($uri, $action) 
//       Route::get('post/listing', array('uses'=>'PostController@listing', 'as' => 'getz.post.listing')); 
//       Route::get('post/{id}', array('uses'=>'PostController@single', 'as' => 'getz.post.single'))->where(array ( 
//               'id' =>'[0-9][0-9]*',
//          ) );
//        Route::post('post/{id}', array('uses'=>'PostController@update', 'as' => 'postz.post.single'))->where('id', '[1-9][0-9]*');
//});
 
 //-------------------
 
 

//Route::group(array('prefix'=> 'admin','before'=> 'auth'), function(){ ///experiment
Route::group(array('prefix'=> 'admin'), function(){ ///means admin/post/1 or admin/post/lsting  
       Route::get('post/listing', array('uses'=>'PostController@listing', 'as' => 'getz.post.listing')); 
       Route::get('post/{id}', array('uses'=>'PostController@single', 'as' => 'getz.post.single'))
               ->where(array ('id' =>'[0-9][0-9]*',) );
        //Route::post($uri, $action) 
        Route::post('post/{id}', array('uses'=>'PostController@update', 'as' => 'postz.post.single'))
                ->where('id', '[1-9][0-9]*');
});
 
//----------------
 

 //redirects to login page
 Route::get('login',function(){
     return "login page";
 });
 