@extends('user.layouts.layout')
@section('content')

<section class="tup">
    <div class="brid">
        <div class="container">
            <h1>
                Secretary Message<br>
                <span><a href="{{ route('index') }}">Home</a> / Secretary Message</span>
            </h1>
        </div>
    </div>
</section>
<section id="aboutus" class="about-us sectop py-5">
    <!-- Main About Us Content -->
    <div class="container">

         <div class="row">
            <div class="col-md-8">
                <p class="mt-3 text-justify">
                    Greetings to all from Dr. Zakir Hussain Teachers’ Training College, Laheriasarai, Darbhanga. As the Secretary, it is my privilege to extend a warm welcome to you. At our college, we firmly believe that excellence in education is achieved through a student-centric approach, supported by scientific and creative teaching methodologies. We emphasize training and development, which for us means imparting knowledge, sharpening skills, fostering a positive mental attitude, enhancing communication and creative abilities, providing quality education and developing management capabilities. Our distinguished educators play a pivotal role in shaping the future of education and we are consistently focused on recruiting outstanding faculty and enhancing our infrastructure to ensure the highest standards. The pillars of our college are academic excellence, holistic education, global relevance and strong values. Our mission is to cultivate an academic culture rooted in merit-based advancement by establishing well-structured systems and providing resources such as state-of-the-art laboratories and a comprehensive library. Our commitment to excellence extends beyond the classroom, as we strive to offer a nurturing environment that promotes intellectual growth, critical thinking and ethical values. We look forward to partnering with you on your educational journey and supporting you in achieving your academic and personal goals.
                </p>
            </div>
            <div class="col-md-4">

                <div class="box">
                    <img src="{{asset('frontend/images/team/secretary-image.jpg')}}">
                    <div class="box-content">
                        <span class="post">Dr. Sharique Hussain</span>
                    </div>
                </div>
                <p class="text-center mt-2"><strong>Secretary</strong></p>
            </div>
        </div>
    </div>

</section>

@endsection
