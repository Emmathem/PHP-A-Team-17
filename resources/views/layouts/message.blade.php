<?php
/**
 * @Author
 * Falua Temitope Oyewole.
 * faluatemitopeo@gmail.com
 * Web Developer
 * Date: 11/22/2017
 */
?>

@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class = "alert alert-danger">
            {{ $error }}
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class = "alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class = "alert alert-warning">
        {{ session('success') }}
    </div>
@endif

@if(session('danger'))
    <div class = "alert alert-danger">
        {{ session('success') }}
    </div>
@endif
