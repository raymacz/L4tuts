<?php

class UserControllerbug extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{               
//               $users= array();
//                for($i =1; $i <4; $i++) {   
//                    $user = new  Stdclass;
//                    $user->email = "user{$i}@tutsplus.com";
//                    $user->password = Hash::make("MySecretPassword{$i}"); ///Hash makes encrypted password
//                    $users[] = $user;                   /// Hash::make($value, $users)
//                    
//                } 
//                $xv = View::make('user.index',  compact('users')); ///path in view user/index
//                return  $xv;      ///compact create array w/ variables & values   
                //   dd($users= DB::table('users')->lists('id','email','permission'));
           //     dd($users= DB::table('users')->max('permission'));
               //dd($users = DB::table('users')->where('id','>',1)->orderBy('email', 'desc')->take(2)->skip(0)->get());
                 ///skip is offset, get() should be last to execute
                 
                 //$users= DB::table('users')->where('id',1)->orWhere('id',5)->get();
                 
                 $users= DB::table('users')->join('posts', 'users.id', '=', 'posts.user_id')->get();
                 
                 $data = array(
                     'email' => 'insert11@email.com',
                     'password' => Hash::make(12345),
                 );
                 
                 //DB::table('users')->insert($data);
                 DB::table('users')->where('id', 6)->update($data); 
                 DB::table('users')->where('id', 6)->delete();
                 
              //   dd(DB::getQueryLog()); 
                //$users= DB::table('users')->get();
               // dd(DB::getQueryLog()); ///check query syntax in the log
                //dd(DB::table('users')->count()); /// 5 users
                 
                $xv = View::make('user.index',  compact('users')); ///path in view user/index
                return  $xv;      ///compact create array w/ variables & values  
        
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
                //validator = Validator::make(Input::all(), User::$rules); ///from update re-use, its possible
	}


	/**
	 * Display the specified resource.
	 *user/1 ... user/2
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
                    // $user = DB::table('users')->where('id', $id)->first(); ///or use below
                   //$user = DB::table('users')->find($id);
                   //    dd(DB::getQueryLog());
                     //    $user = DB::table('users')->where('email','email3@gmail.com')->first(); 
                // $user = User::find($id);
                 $user = User::with('categories')->find($id);
                 return View::make('user.show',  compact('user'));///compact create array w/ variables & values   
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
            $user= User::find($id);
            return View::make('user.edit',compact('user'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
            $validator = Validator::make(Input::all(), User::$rules);
            
            if ($validator->fails()) {
                //dd($validator->failed());
                return Redirect::back()->withInput()->withErrors($validator);
                ////repopulate the form//send back the errors
                
                
            }
            ///Validator::make($data, $rules, $messages) ///all arrays
		dd(Input::all());///get all input request
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}