@extends('layout')

@section('content')

<div class="row mt-3">
    <h1>Create Post</h1>
    <div class="col-md-6">
        <form method="POST" action="/posts">
            @csrf
            <!--<div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input class="form-control" type="text" name="title" id="title">
                <div class="invalid-feedback">{{$errors->first('title')}}</div>
            </div> -->
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" id="title" class="form-control @error('title') is-invalid @enderror" name="title" value="{{old('title')}}">

                <!--<div class="text-danger">

                    </div> -->
                <!--<div id="validationServerUsernameFeedback" class="invalid-feedback">
                        {{$errors->first('title')}}
                    </div> -->
                @error('title')
                <div class="text-danger">{{ $message }}</div>
                @enderror


            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>

                <textarea class="form-control @error('slug') is-invalid @enderror" name="slug" id="slug">{{old('slug')}}</textarea>
                @error('slug')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <textarea class="form-control @error('body') is-invalid @enderror" name="body" id="body">{{old('body')}}</textarea>
                @error('body')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>
    </div>

</div>

@endsection
