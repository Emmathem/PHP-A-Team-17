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
        <div class = "inner-post">
            <div class="col-md-5 col-md-offset-3">
                @include('layouts.message')
            </div>
            <div class="clearfix"></div>
            <div class = "col-md-6 col-md-offset-3">
            <h2>Create Post</h2>
            {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'class' => 'post-form']) !!}
                <div class = "form-group">
                    {{Form::label('title' , 'Title')}}
                    {{Form::text('title','', ['class' => 'form-control', 'placeholder' => 'Enter Post Title', 'name' => 'title'])}}
                </div>

            <div class = "form-group">
                {{Form::label('title' , 'Post Body')}}
                {{Form::textarea('body','', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Enter Post Body', 'name' => 'body'])}}
            </div>

            <div class = "form-group">
                {{--{{Form::label('title' , 'Title')}}--}}
                {{Form::submit('Submit', ['class' => 'btn btn-submit', 'value' => 'Submit'])}}
            </div>
            {!! Form::close() !!}
        </div>
        </div>
    </section>
@stop
