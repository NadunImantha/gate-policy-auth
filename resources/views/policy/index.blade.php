@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>{{ Auth::user()->name }}</h3>
        <hr>
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-8">

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">User</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($posts as $post)
                            <tr>
                                <th scope="row">{{ $post->id }}</th>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->description }}</td>
                                <td>{{ $post->user->name }}</td>
                                <td>
                                    <div class="d-flex gap-2 h-100">
                                        @can('view', $post)
                                            <a href="{{ route('post.show', $post) }}" class="btn btn-sm btn-success">View</a>
                                        @endcan

                                        @can('update', $post)
                                            <a href="{{ route('post.edit', $post) }}" class="btn btn-sm btn-warning">Edit</a>
                                        @endcan

                                        @can('delete', $post)
                                            <a href="{{ route('post.destroy', $post) }}"
                                                class="btn btn-sm btn-danger">Delete</a>
                                        @endcan
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
