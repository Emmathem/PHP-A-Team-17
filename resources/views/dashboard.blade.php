@extends('layouts.default.default')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 _top">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h4>Your Post</h4>
                    @if(count($posts) > 0 )
                    <table class="table table-stripped">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        @foreach($posts as $post)
                            <tbody>
                                <tr>
                                    <td>{{ $post->title }}</td>
                                    <td> {!! $post->body !!}</td>
                                    <td><a href="/posts/{{$post->id}}/edit">Edit</a> | <a href="">Delete</a> </td>
                                </tr>
                            </tbody>

                        @endforeach
                    </table>
                        @else
                        <div class = "alert alert-warning">
                            <strong>You have no post </strong>
                            <a class = "pull-right btn-btn-default" href = "{{ route ('posts.create') }}">Create a Post</a>
                        </div>
                        @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
