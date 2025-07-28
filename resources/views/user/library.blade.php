@extends('user.layouts.layout')
@section('content')
    <section class="tup">
        <div class="brid">
            <div class="container">
                <h1>
                    Library<br>
                    <span><a href="{{ route('index') }}">Home </a>/ Library</span>
                </h1>
            </div>
        </div>
    </section>

    <section id="aboutus" class="about-us sectop">
        <div class="container">

 <object data="{{ asset('frontend/data/library.pdf') }}" type="application/pdf" width="100%" height="900px">
            <p>Alternative text - include a link <a href="{{ asset('frontend/data/library.pdf') }}">to the PDF!</a></p>
        </object>
        </div>
    </section>
    <!-- About Us End-->
@endsection
