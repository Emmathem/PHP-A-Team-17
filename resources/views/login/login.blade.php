<?php
/**
 * @Author
 * Falua Temitope Oyewole.
 * faluatemitopeo@gmail.com
 * Web Developer
 * Date: 10/31/2017
 */
?>
@extends('layouts.default.default')

@section('content')
    <section class = "login-section">
      {{--  <div class="big-circle"></div>--}}
        <div class = "inner-login">
            <div class="form-section">
                <header class = "header">Authenticate Yourself</header>
                <form class = "login-form" method="post" action="">
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="text" name="useremail" class="form-input" placeholder="Enter Email Address">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="userpass" class="form-input" placeholder="Enter Password">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-submit" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </section>
    {{--<div class = "main-wrapper">
        <div class="nav-2">
            <nav class = "menu">
                <ul>
                    <li><a href="./">Home</a></li>
                    <li>
                        <a href="#">Project<span class = "arrow"> &#9660;</span></a>
                        <ul class = "sub-menu">
                            <li><a href="">Aloma</a></li>
                            <li><a href="">Paul</a></li>
                            <li><a href="">Ayo</a></li>
                            <li><a href="">Emi</a></li>
                        </ul>
                    </li>
                    <li><a href="">Shop</a></li>
                    <li><a href="">Contact us</a></li>
                </ul>
            </nav>

        </div>
    </div>--}}
@stop
