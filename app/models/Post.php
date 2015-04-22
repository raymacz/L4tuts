<?php

class Post extends \Eloquent {
	protected $fillable = ['title','body']; ///if column not specified, it won't be inserted in DB
        //protected $guarded = ['user_id'];
   
   public function User() { ////  reserved word User
       return $this->belongsTo('User');   ///inverse one-to-many relationship
       
   }
        
}