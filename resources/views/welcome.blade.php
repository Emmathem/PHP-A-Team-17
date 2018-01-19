@extends('layouts.default.default')
@section('content')
   <section class = "landing">
   <div class = "overlay"></div>
      <div class = "inner-section">
         <div class = "left-circle"></div>
         <div class = "right-circle"></div>
         <article>
            This is the section that I don't know what to put there... and
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas non sint accusantium facilis assumenda aperiam vero, libero excepturi ducimus quo quod, repudiandae molestias neque tempora ex explicabo. Quibusdam, cum, accusamus.
            
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid placeat, cum quo sapiente illum minima. Vero voluptates, ab at accusamus nihil eveniet illum tenetur mollitia minima nesciunt hic culpa eum.

         </article>
         <div class = "login-signup">
            <a href="{{ route('login') }}" class = "btn btn-login">Login</a>
            <a href="{{ route('register') }}" class="btn btn-up">Sign Up</a>
         </div>
      </div>
   </section>
@stop