@extends('layouts.default')

@section('title',  $post->title)


@section('content')

    <h1>{{ $post->title }}</h1>
    <p>{{ $post->text }}</p> 
    <p><a href="/">Back</a></p>
@endsection