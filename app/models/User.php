<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');
        
        public static $rules = array(
                        'email' => 'required|email',
                        'password' => 'size:5',
                        'active' =>  'required',
                        );
                    
        
        public function Posts() { /// reserved word Posts & Post
            return $this->hasMany('Post'); // one to many relationship 
        }

//        public function phone() {
//            return $this->hasOne('Phone'); //one-to-one
//        }
        
        public function categories() {
            return $this->belongsToMany('Category');
        }
        
            
        
}
