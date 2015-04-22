<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PostController
 *
 * @author owner
 */
class PostController extends BaseController {
    //put your code here  /// shows post with different views
    public function listing() { ///view for list of post
          // $posts =Post::where('title', 'LIKE', '%body%')->take(1)->skip(1)->get(); 
     //   $posts = Post::all();
       // $posts = Post::with('User')->get();
        $posts = Post::with('user')->get(); ///querying a model with eager loading 
/// 'user' must be the same with public method in models/Post.php user() function
          return View::make('post.listing', compact('posts'));
    }
    
    public function single($id) {  //passed $id from routes ///view for single post
   //    
        $post =Post::find($id); 
         //return  View::make('post.single')->with('id', $id);
        return  View::make('post.single')->with('post', $post); 
        
    }

    public function insert() {
//        $post = new Post;
//        $post->title = 'INSERT title1';
//        $post->body = 'INSERT body1';
//        $post->save();
        
        $data =array(
            'title' => 'INSERT title1 post array',
            'body' => 'INSERT body1 post array',
            'user_id' => 1,
        );
        
        Post::create($data);
        
        dd('Post Inserted');
    }

    public function update($id) {  //passed $id from routes
      //  dd($_POST); ///vardump & exit /// helper form Laravel
      $post = Post::find($id);
      $post->user_id = 1;
      $post->save(); 
       dd('Post updated'); 
    }
    
     public function destroy($id) {  //passed $id from routes
      //  dd($_POST); ///vardump & exit /// helper form Laravel
      $post = Post::find($id);
      $post->delete(); 
       dd('Post deleted'); 
    }
    
    
    
}
    
