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
    //put your code here
    public function show() {
        $post = new StdClass();
        $post->title = 'My post title';
        return View::make('post.show')->with('post',  $post); 
       /// ->with() passes variable to $post to post/show page located in Views folder
            
    }
}
