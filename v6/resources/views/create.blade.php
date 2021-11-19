@extends('layout')

@section('content')
    <h1>Create Post</h1>

    <form method="POST" action="/posts">
        @csrf
        <div class="field">
            <label for="title" class="label">Title</label>
            <div class="control">
                <input type="text" name="title" id="title">
            </div>
        </div>
        <div class="field">
            <label for="title" class="label">Slug</label>
            <div class="control">
                <textarea class="textarea" name="slug" id="slug"></textarea>
            </div>
        </div>
        <div class="field">
            <label for="title" class="label">Body</label>
            <div class="control">
                <textarea class="textarea" name="body" id="body"></textarea>
            </div>
        </div>
        <div class="field is-grouped">
            <button class="button is-link" type="submit">Submit</button>
        </div>
    </form>
@endsection
