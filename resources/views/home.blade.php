@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}

                        @can('isAdmin')
                            <p>Admin</p>
                        @endcan

                        @can('isUser')
                            <p>User</p>
                        @endcan

                        @can('isEditor')
                            <p>Editor</p>
                        @endcan

                        <h3 class="">Posts</h3>
                        <a href="{{ route('post.index') }}" class="btn btn-success">See Post</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
