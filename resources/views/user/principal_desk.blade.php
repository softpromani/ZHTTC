@extends('user.layouts.layout')
@section('content')
    <section class="tup">
        <div class="brid">
            <div class="container">
                <h1>Principal Desk<br>
                    <span><a href="{{ route('index') }}">Home </a>/ Principal Desk</span>
                </h1>
            </div>
        </div>
    </section>

    <section id="aboutus" class="about-us sectop">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="text-effect" style="margin-bottom: 20px;">
                        <span>Principal's Message</span>
                    </div>

                    <p class="text-justify">
                        It is a great privilege to serve as the Principal of Dr. Zakir Hussain Teachers’ Training College, Laheriasarai, Darbhanga, and to welcome you to an institute dedicated to excellence in training programs and academic achievement within a strong pastoral framework. True education aims at the holistic development of a child, encompassing educational, moral, ethical, intellectual, cultural and emotional growth. We are wholeheartedly committed to strengthening the future of tomorrow. In this era of knowledge explosion, teachers and parents share a significant responsibility towards the younger generation. Let us come together and join hands in this noble endeavor. The faculty is the backbone of our institute. I personally believe that value-based learning holds greater relevance in a dynamic work environment. We ensure that our students foster a special relationship with the institution, offering faculty guidance and providing a caring and nurturing environment. Education is a tripolar process involving the teacher, the pupil and the learning environment. We welcome all visitors and extend a warm invitation to see and experience it firsthand.
                    </p>
                </div>

                <div class="col-sm-4 pull-right hidden-sm imgmar">
                    <img src="{{ asset('frontend/images/team/principal-sir.jpg') }}">
                </div>
                <div class="col-sm-12 col-md-12">

                    <h3><i>With best wishes</i></h3>
                    <h4> <b>Prof. (Dr.) Mozammil Hassan </b> </h4>
                    <h4>Principal </h4>
                    <h4>Z.H.T.T. College, Laheriasarai, Darbhanga </h4>
                </div>


            </div>

        </div>
    </section>
    <!-- About Us End-->
@endsection
