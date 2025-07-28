@extends('user.layouts.layout')
@section('content')

<section class="tup">
    <div class="brid" >
        <div class="container">
        <h1>
        Community Resources<br>
         <span><a href="{{route('index')}}">Home </a>/ Community Resources</span>
         </h1>
       </div>
     </div>
</section>

<section id="aboutus" class="about-us sectop">
    <div class="container">

        <img src="{{ asset('userlayout/images/routine.jpeg') }}" />

    </div>
  </section>
  <!-- About Us End-->

@endsection
