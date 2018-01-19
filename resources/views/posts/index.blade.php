<?php
/**
 * @Author
 * Falua Temitope Oyewole.
 * faluatemitopeo@gmail.com
 * Web Developer
 * Date: 11/15/2017
 */
?>
@extends('layouts.default.default')
@section('content')
<section class = "post-section">
    <div class = "inner-post">
        <div class="col-md-5 col-md-offset-3 _top">
            @include('layouts.message')
        </div>
        <div class="clearfix"></div>
        <div class="col-md-6 col-md-offset-1">
            <h2>Recent Post here</h2>
            @if(count($posts) > 0)
                @foreach($posts as $post)
                    <h3><a href="/posts/{{$post->id}}"> {{$post->title}} </a></h3>
                    <small>Post written on: {{ $post->created_at }} by {{ $post->users->name }} </small>
                @endforeach
                {{--{{  $post->links() }}--}}
                @else
                    <p>No Post Available</p>
                @endif
        </div>
    </div>
</section>
@stop