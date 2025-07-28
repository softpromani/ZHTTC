@extends('user.layouts.layout')
@section('content')

<section class="tup">
    <div class="brid">
        <div class="container">
            <h1>
                About Us<br>
                <span><a href="{{ route('index') }}">Home</a> / About Us</span>
            </h1>
        </div>
    </div>
</section>
<section id="aboutus" class="about-us sectop py-5">
    <!-- Accordion Section -->
    <section class="py-5">
        <div class="container">
            @include('user.partials.about-accordion')
        </div>
    </section>

    <!-- Main About Us Content -->
    <div class="container">
        <div class="row">
           <div class="text-effect" style="margin-bottom: 20px;">
                <span>Founder Secretary</span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <p class="mt-3 text-justify">
                    Great men did not reach their heights in a single, sudden leap. While others rested, they labored tirelessly through the night, steadily climbing upwards.<br>
                    The stories of these exceptional individuals teach us that we too can lead extraordinary lives. When we leave this world, we have the power to leave behind lasting imprints, etched into the sands of time.
                </p>
                <span class="d-block mb-3 h5">Welcome to Dr. Zakir Hussain Teachers’ Training College</span>

                <p>Dr. Zakir Hussain Teachers’ Training College, Laheriasarai (Darbhanga), established in 1982, has grown significantly in vocational and teacher education. Managed by the Board of Trustees of Shafi Muslim High School, the college emphasizes both academic excellence and cultural values.</p>

                <p>The college offers D.El.Ed., B.Ed., and M.Ed. programs, approved by NCTE and affiliated with LNMU. The campus spans 5,000 m² and houses classrooms, labs, a well-equipped library, and more.</p>

                <p>The management supports merit and need-based scholarships and hosts lectures, cultural events, and co-scholastic activities to support student growth. With qualified faculty and active administration, the college remains committed to academic and infrastructural excellence.</p>
            </div>
            <div class="col-md-4">

                <div class="box">
                    <img src="{{asset('frontend/images/team/foundar-secretary.jpg')}}">
                    <div class="box-content">
                        <span class="post">Professor M. K. Hussain</span>
                    </div>
                </div>
                <p class="text-center mt-2"><strong>Dr. Zakir Hussain Teachers’ Training College</strong></p>
            </div>
        </div>
    </div>

</section>



@endsection
