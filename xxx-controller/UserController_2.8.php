<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{               
                ///create fake user /// normally this is done in model
		$users= array();
                for($i =1; $i <4; $i++) {   
                    $user = new  Stdclass;
                    $user->email = "user{$i}@tutsplus.com";
                    $user->password = Hash::make("MySecretPassword{$i}"); ///Hash makes encrypted password
                    $users[] = $user;                   /// Hash::make($value, $users)
                    
                } 
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
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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
