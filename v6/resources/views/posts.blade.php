@extends('layout')

@section('content')
<h1>Post List</h1>
@forelse ($posts as $post)
<a href="{{route('posts.show', $post)}}">
    <h3>{{$post->title}}</h3>
</a>
<p>{{$post->body}}</p>

@empty
<p>No Article Found!</p>
@endforelse
@endsection
