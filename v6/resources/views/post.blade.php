@extends('layout')

@section('content')
<h1>{{$post->title}}</h1>
<p>{{$post->body}}</p>
@foreach ($post->tags as $tag)
<a href="/posts?tag={{$tag->name}}">{{$tag->name}}</a>
@endforeach
@endsection
