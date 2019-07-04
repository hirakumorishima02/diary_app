@extends('layouts.default')

@section('title', 'New Post')

@section('content')
<h1>New Post</h1>
<form method="post" action="{{ url('/posts') }}">
    {{ csrf_field() }}
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
    <input type="text" name="title" placeholder="enter title" value="{{ old('title') }}"><br>
    <textarea type="text" name="text" placeholder="ente text">{{ old('text') }}</textarea><br>
    <input type="submit" value="Add New Post">
</form>
<p><a href="/">Back</a></p>
@endsection