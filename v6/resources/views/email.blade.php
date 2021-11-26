@extends('layout')

@section('content')
<div class="pt-3">
    <h1>Email</h1>

    <div class="row">
        @if (session('message'))
        <p class="text-success">{{session('message')}}</p>
        @endif
        <div class="col-6">

            <form method="POST" action="/emails">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="email">Email</label>
                    <input type="text" id="email" name="email" class="form-control" placeholder="Email">
                    @error('email')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <button class="btn btn-primary">Send</button>
            </form>

        </div>
    </div>

</div>

@endsection
