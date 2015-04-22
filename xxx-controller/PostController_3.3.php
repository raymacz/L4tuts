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
          return View::make('post.listing'); ///getz.post.lising is not allowed (based in route.php)post/lising is a path in view
    }
    
    public function single($id) {  //passed $id from routes ///view for single post
   //     return  View::make('post.single');
         return  View::make('post.single')->with('id', $id);
        
    }



    public function update($id) {  //passed $id from routes
        dd($_POST); ///vardump & exit /// helper form Laravel
        
    }
    
    
    
}
    
