@extends('layouts.default') <!-- from layouts/default.blade.php -->
     

@section('content')
       @unless(!count($users))
           @foreach($users as $user)
           <p> <strong>{{{ $user->title or 'default value'}}}</strong> By {{{$user->email}}} </p>
           @endforeach
       @endunless
 @stop {{-- stop content here  --}}       
