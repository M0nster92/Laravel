@extends('layout')

@section('content')
    <h1>Post List</h1>
        @foreach ($posts as $post)
        <a href="/posts/{{$post->slug}}"><h3>{{$post->title}}</h3></a>
        <p>{{$post->body}}</p>
    @endforeach
@endsection
