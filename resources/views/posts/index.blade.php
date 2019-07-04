@extends('layouts.default')

@section('title', 'Blog Posts')

@section('content')
    <h1>Blog Post</h1>
    <p><a href="{{ action('PostsController@create') }}">New Post</a></p>
    <ul>
        @forelse($posts as $post)
        <li><a href="{{ action('PostsController@show', $post) }}">{{ $post->title }}</a>
            <a href="{{ action('PostsController@edit', $post) }}">[Edit]</a>
            <a href="" data-id="{{ $post->id }}">[Delete]</a></li>
            <form method="post" action="{{ url('posts', $post->id) }} id="{{ $post->id }}" class="del">
            {{ csrf_field() }}
            {{ method_field('delete') }}
            </form>
        @empty
        <p>No Post yet</p>
        @endforelse
    </ul> 
<script src="/js/main.js"></script>
@endsection
