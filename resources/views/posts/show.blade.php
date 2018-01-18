<?php
/**
 * @Author
 * Falua Temitope Oyewole.
 * faluatemitopeo@gmail.com
 * Web Developer
 * Date: 11/22/2017
 */
?>
@extends('layouts.default.default')
@section('content')
    <section class = "post-section">
        <div class = "inner-post small-btn">
            <a href="/posts" class = "btn btn-default">Go back</a>
            <h3>{{$post->title}}</h3>
            <small>Written on {{$post->created_at }}</small>
            <div class = "container">
                {!! $post->body !!}
            </div>
            <div class = "pull-left"><a href="/posts/{{$post->id}}/edit" class = "btn btn-edit">Edit</a></div>
            {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete', ['class' => 'btn btn-delete']) }}
                {{--<div class="pull-right"><a href="" class="btn btn-delete">Delete</a></div>--}}
            {!! Form::close() !!}
        </div>
    </section>
@stop
