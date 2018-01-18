<?php
/**
 * @Author
 * Falua Temitope Oyewole.
 * faluatemitopeo@gmail.com
 * Web Developer
 * Date: 11/23/2017
 */
?>
@extends('layouts.default.default')
@section('content')
    <section class = "post-section">
        <div class = "inner-post">
            <div class="col-md-5 col-md-offset-3">
                @include('layouts.message')
            </div>
            <div class="clearfix"></div>
            <h2>Create Post</h2>
            {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'class' => 'post-form']) !!}
            <div class = "form-group">
                {{Form::label('title' , 'Title')}}
                {{Form::text('title',$post->title, ['class' => 'form-control', 'placeholder' => 'Enter Post Title', 'name' => 'title'])}}
            </div>

            <div class = "form-group">
                {{Form::label('title' , 'Post Body')}}
                {{Form::textarea('body',$post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Enter Post Body', 'name' => 'body'])}}
            </div>

            <div class = "form-group">
                {{ Form::hidden('_method','PUT') }}
                {{ Form::submit('Update Post', ['class' => 'btn btn-submit', 'value' => 'Update Post'])}}
            </div>
            {!! Form::close() !!}
        </div>
    </section>
@stop