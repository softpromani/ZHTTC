@extends('user.layouts.layout')
@section('content')

<section class="tup">
    <div class="brid" >
        <div class="container">
        <h1>
        Tenders<br>
         <span><a href="{{route('index')}}">Home </a>/ Tenders</span>
         </h1>
       </div>
     </div>
</section>

<section id="aboutus" class="about-us sectop">
    <div class="container">

        <ol>
            <li>
                <a href="{{asset('upload/tenders/biometric_tender.jpeg')}}">Bio-Metric Tender </a>
            </li>
        </ol>

    </div>
  </section>
  <!-- About Us End-->

@endsection
