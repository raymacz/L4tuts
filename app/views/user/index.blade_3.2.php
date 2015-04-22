@extends('layouts.default') <!-- from layouts/default.blade.php -->
     

@section('content')
       @unless(!count($users))
           @foreach($users as $user)
            <p> {{{ $user->email or 'default value'}}} </p>
           @endforeach
       @endunless
 @stop {{-- stop content here  --}}       
