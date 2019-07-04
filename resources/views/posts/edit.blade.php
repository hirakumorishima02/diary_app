@extends('layouts.default')

@section('title', 'Edit Post')

@section('content')
<h1>New Post</h1>
<form method="post" action="{{ url('/posts', $post->id) }}">
    {{ csrf_field() }}
    {{ method_field('patch') }}
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
    <input type="text" name="title" placeholder="enter title" value="{{ old('title', $post->title) }}"><br>
    <textarea type="text" name="text" placeholder="ente text">{{ old('text', $post->text) }}</textarea><br>
    <input type="submit" value="Update Post">
</form>
<p><a href="/">Back</a></p>
@endsection