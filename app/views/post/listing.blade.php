

@extends('layouts.default')

@section('content')
  @foreach ($posts as $post)
     <h1>{{{ $post->title }}} By {{{ $post->user->email }}}</h1>
     {{-- setup dynamic prop. relationship between post.php & users.php in eloquent --}}
  @endforeach
  
  
  <pre>
      {{ dd(DB::getQueryLog()) }}
  </pre>
@stop

