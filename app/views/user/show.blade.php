@extends('layouts.default') <!-- from layouts/default.blade.php -->
     
        
 @section('content')
        <p> {{{ $user->email or 'default value'}}} </p>
   {{--dd($user)--}}    
        
       @foreach ($user->posts as $post) {{-- setup dynamic prop. relationship between users.php & post.php in eloquent --}}
            <li>{{{ $post->title }}} </li>
       @endforeach
        
       <h2> Categories </h2>
       @foreach ($user->categories as $catz) 
            <li>{{{ $catz->name}}}  </li>
       @endforeach
      
 @stop{{-- stop content here  --}}
 
 @section('sidebar')
   <p><a href="#">Some  Link</a></p>
   @parent {{-- found in layouts/default.blade.php --}}
   <p><a href="#">Some  Link</a></p>
   <p><a href="#">Some  Link</a></p>
 @stop <!-- stop sidebar here -->
 
 