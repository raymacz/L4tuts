@extends('layouts.default')

@section('content')
<h1>{{{ $post->title}}} </h1>
<p>{{{ $post->body}}} </p>

<?php echo 'arggg '. $post->title; ?>