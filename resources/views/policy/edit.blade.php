@extends('layouts.app')


@section('content')
    <div class="container">
        <h3>{{ Auth::user()->name }}</h3>
        <hr>
        <form action="{{ route('post.update', $post) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="form-group mb-3">
                    <strong>Name:</strong>
                    <input type="text" name="title" value="{{ $post->title }}" class="form-control" placeholder="Name">
                </div>

                <div class="form-group mb-3">
                    <strong>Description:</strong>
                    <textarea class="form-control" style="height:150px" name="description" placeholder="Detail">{{ $post->description }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
