@extends('user.layouts.layout')
@section('header_area')
    <style>

.notice-links-section {
    margin-top: 0 !important; /* reset */
    padding-top: 0 !important;
    clear: both;
}

/* Ensure on mobile that it pushes down */
@media (max-width: 767.98px) {
    .notice-links-section {
        margin-top: 100px !important; /* increase if needed */
    }
}


        .notice-board {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 30px;
            height: auto;
        }

        .notice-list {
            max-height: 300px;
            /* overflow-y: auto; */
        }

        .notice-item {
            padding: 15px;
            border-bottom: 1px solid #eee;
            transition: all 0.3s ease;
        }

        .notice-item:hover {
            background: #f8f9fa;
            transform: translateX(5px);
        }

        .notice-date {
            color: #3ea347;
            font-size: 0.9rem;
            font-weight: 600;
        }

        .important-links {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }

        .link-item {
            display: block;
            padding: 12px 15px;
            color: #333;
            text-decoration: none;
            border-radius: 8px;
            margin-bottom: 10px;
            transition: all 0.3s ease;
            border-left: 4px solid #3ea347;
        }

        .link-item:hover {
            background: #3ea347;
            color: white;
            transform: translateX(5px);
        }
    </style>
@endsection
@section('content')
    <!-- Banner Wrapper Start -->
    <div class="banner-wrapper" style="position: relative; z-index: 2;">
        <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
            <!-- Overlay -->
            <div class="overlay"></div>
            <!-- Indicators -->
            <ol class="carousel-indicators">
                @forelse($sliders as $slider)
                    <li data-target="#bs-carousel" data-slide-to="{{ $loop->index }}"
                        class="{{ $loop->index == 1 ? 'active' : '' }}"></li>
                @empty
                    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
                @endforelse
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                @forelse($sliders as $slider)
                    <div class="item slides {{ $loop->index == 1 ? 'active' : '' }}">
                        <div class="slide-{{ $loop->index + 1 }}"
                            style="background-image: url({{ asset( $slider->banner) }});"></div>
                        <div class="hero">
                            <h1 class="animated1">{{ $slider->title1 }} <br>
                            </h1>
                            <h3 class="animated2">{{ $slider->title2 }}</h3>
                            <a class="animated3" href="{{ $slider->link ?? '' }}" target="_blank">Read More <i class="fa fa-caret-right"
                                    aria-hidden="true"></i></a>
                        </div>
                    </div>
                @empty
                    <div class="item slides active">
                        <div class="slide-1"></div>
                        <div class="hero">
                            <h1 class="animated1">Z.H.T.T. College, Laheriasarai, Darbhanga, Bihar <br>
                            </h1>
                            <h3 class="animated2">(Affiliated to Lalit Narayan Mithila University, Darbhanga)</h3>
                            <a class="animated3" href="#aboutus">Read More <i class="fa fa-caret-right"
                                    aria-hidden="true"></i></a>
                        </div>
                    </div>
                @endforelse
            </div>
            <a class="left carousel-control" href="#bs-carousel" data-slide="prev"><span
                    class="transition3s glyphicon glyphicon-chevron-left fa fa-angle-left"></span></a> <a
                class="right carousel-control" href="#bs-carousel" data-slide="next"><span
                    class="transition3s glyphicon glyphicon-chevron-right fa fa-angle-right"></span></a>
        </div>
    </div>
    <!-- Banner Wrapper End -->

    <!-- Notice and Important Links Section -->
    <section class="notice-links-section mt-5 py-4" style="position: relative; z-index: 1;" >
        <div class="container">
            <div class="row">
                <div class="col-lg-8" data-aos="fade-right">
                    <div class="notice-board" style="font-family: 'Poppins', sans-serif;">
                        <h3 class=" mb-4">
                            <i class="fas fa-bullhorn text-primary me-2"></i> Latest Announcements
                        </h3>

                        <div class="notice-list">

                            @foreach ($notices as $notice)
                                @if ($notice->type == 'link')
                                    <div class="notice-item mb-3">
                                        <a href="{{ $notice->filename }}" target="_blank">
                                            <h6 style="font-weight: 500; margin: 0;">{{ $notice->title }} <img src="{{ asset('frontend/images/new3.gif') }}" /></h6>
                                        </a>
                                    </div>
                                @elseif($notice->type == 'file')
                                    <div class="notice-item mb-3">
                                        <a href="{{ asset($notice->filename) }}" target="_blank">
                                            <h6 style="font-weight: 500; margin: 0;">{{ $notice->title }} <img src="{{ asset('frontend/images/new3.gif') }}" /></h6>
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <a class="btn btn-primary">View more</a>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-left">
                    <div class="important-links">
                        <h3 class="typewriter mb-4"><i class="fas fa-link text-primary me-2"></i>Important Links</h3>
                        <a href="#" class="link-item">
                            <i class="fas fa-file-pdf me-2"></i>Application Form
                        </a>
                        <a href="#" class="link-item">
                            <i class="fas fa-book me-2"></i>Library
                        </a>
                        <a href="#" class="link-item">
                            <i class="fas fa-graduation-cap me-2"></i>Academic Calendar
                        </a>
                        <a href="{{ route('event.index') }}" class="link-item">
                            <i class="fas fa-chart-line me-2"></i>College Events
                        </a>
                          <a href="{{ route('contact-us') }}" class="link-item">
                            <i class="fas fa-users me-2"></i>Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="aboutus" class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-8 ">
                    <div class="text-effect" style="margin-bottom: 20px;">
                        <span>Welcome to Z.H.T.T. College</span>
                    </div>
                    <p>
                        Dr. Zakir Hussain, a renowned educationist, especially in the field of Basic Education as visualized by Mahatma Gandhi, Father of the Nation, a great humanist, a distinguished exponent of composite culture and a real secularist, who ultimately adored the coveted chair of the President of india, has been the real moving spirit for the guidance of the management of Dr. Zakir Hussain Teachers' Training College, Darbhanga. His academic philosophy has always helped us in moulding this institution. The Training College will perpetually serve as a tribute to the great departed soul, whose name will constantly inspire us and shine in the annual of Indian History.
                    </p>
                    <p>
                        Darbhanga is the administrative headquarters of the revenue division, and is situated at a distance of 120 km. by road from Patna, the capital of Bihar towards the North-East. It is also the headquarters of the two well reputed Universities of Bihar Le. Lalit Narayan Mithila University and Kameshwar Singh Darbhanga Sanskrit University, Darbhanga. Moreover, Darbhanga is the heart-land of Mithilanchal-acultural centre known for its art, paintings and music, and above all for its scholastic and rich tradition of highly philosophic approach to life. Dr. Zakir Hussain Teachers' Training College is 3kms away from Darbhanga Junction and is quite adjacent to Darbhanga Medical College, one of the oldest Medical Colleges of the country.
                    </p>
                    <a href="#" class="btn btn-danger">View More </a>

                </div>
                <div class="col-sm-12 col-md-4 pull-right hidden-sm">
                    <div class="box">
                        <img src="{{ asset('frontend/images/team/principal-sir.jpg') }}" style="height:43rem;">
                        <div class="box-content">
                            <h3 class="title">Prof. (Dr.) Mozammil Hassan</h3>
                            <span class="post">Principal</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Faculty Start -->
    <section id="faculty" class="faculty">
        <div class="container">
            <div class="text-effect" style="margin-bottom: 20px;">
                <span>Our Mentors</span>
            </div>
            <div id="team" class="owl-carousel owl-theme">
                <div class="item">
                    <div class="box" style="height: 281px;">
                        <img src="{{ asset('frontend/images/team/bihar-governorr-new.jpeg') }}" style="height: 28rem;">
                        <div class="box-content">
                            <h3 class="title">Shri Arif Mohammed Khan</h3>
                            <span class="post">Governer</span>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <img src="{{ asset('frontend/images/team/nitish.jpg') }}" style="height: 28rem;">
                        <div class="box-content">
                            <h3 class="title">Nitish Kumar</h3>
                            <span class="post">Chief Minister</span>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <img src="{{ asset('frontend/images/team/vc_prof_sanjay_kumar_choudhary.jpeg') }}" style="height: 28rem;">
                        <div class="box-content">
                            <h3 class="title">Prof. S. K. Choudhary</h3>
                            <span class="post">Vice-Chancellor</span>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <img src="{{ asset('frontend/images/team/principal-sir.jpg') }}" style="height: 28rem;">
                        <div class="box-content">
                            <h3 class="title">Prof. (Dr.) Mozammil Hassan</h3>
                            <span class="post">Principal</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Faculty End --}}



    <!-- Testimonials Start -->
    <section id="testimonials" class="testimonials d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">

                    <div class="text-effect" style="margin-bottom: 20px;">
                        <span>Our Testimonials</span>
                    </div>
                    <div class="tab-panel">
                        <ul class="nav nav-tabs ">
                            <li class="active"> <a href="#tab_default_1" data-toggle="tab">Students</a> </li>
                            <li> <a href="#tab_default_2" data-toggle="tab">Parents</a> </li>
                            <li> <a href="#tab_default_3" data-toggle="tab">Faculty</a> </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_default_1">
                                <div class="testimonials-list owl-carousel owl-theme">
                                    <div class="item">
                                        <h4><strong>Ayush Singh</strong> BSc. - Maths<br>
                                        </h4>
                                        <p>I have had a very good time at Women's College. All the teachers are very
                                            friendly and enthusiastic. The lessons are very varied and inspiring. Thank you
                                            very much!!!.</p>
                                        <div class="tes-img"><img
                                                src="{{ asset('frontend/images/testimonials1.png') }}"
                                                alt="Testimonial">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <h4><strong>Khushi Pandey</strong> BA. - Hindi<br>
                                        </h4>
                                        <p>Helpful and ample material, motivated and inspirational faculty. Great feedback….
                                            Constructive and helpful. Thank you.</p>
                                        <div class="tes-img"><img
                                                src="{{ asset('frontend/images/testimonials2.png') }}"
                                                alt="Testimonial">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <h4><strong>Abhay Kumar</strong> M.Sc - Math<br>
                                        </h4>
                                        <p>It was a unique and special experience – something inbetween Science lessons and
                                            holidays. Moreover, I never had such an honest insight into English mentality
                                            and culture. Great!!.</p>
                                        <div class="tes-img"><img
                                                src="{{ asset('frontend/images/testimonials1.png') }}"
                                                alt="Testimonial">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane" id="tab_default_2">
                                <div class="testimonials-list owl-carousel owl-theme">

                                    <div class="item">
                                        <h4><strong>Amal Prakash</strong> Parent<br>
                                        </h4>
                                        <p>I liked the small number of people attending my course (Creative Teaching). All
                                            the lessons were well-prepared and well-structured. The 2 teachers co-operated
                                            very well with each other and there was always a friendly and encouraging
                                            atmosphere.</p>
                                        <div class="tes-img"><img
                                                src="{{ asset('frontend/images/testimonials1.png') }}"
                                                alt="Testimonial">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <h4><strong>Sajjan Pandey</strong> Parent<br>
                                        </h4>
                                        <p>Everybody here is so kind and nice. Thanks a billion for your excellent &amp;
                                            professional work.</p>
                                        <div class="tes-img"><img
                                                src="{{ asset('frontend/images/testimonials2.png') }}"
                                                alt="Testimonial">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <h4><strong>Abhiskek</strong> Parent<br>
                                        </h4>
                                        <p>It was incredible, time flew and I can’t wait to be back here with you.</p>
                                        <div class="tes-img"><img
                                                src="{{ asset('frontend/images/testimonials2.png') }}"
                                                alt="Testimonial">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane" id="tab_default_3">
                                <div class="testimonials-list owl-carousel owl-theme">
                                    <div class="item">
                                        <h4><strong>Sajjan Pandey</strong> <br>
                                        </h4>
                                        <p>It was a unique and special experience – something inbetween Science lessons and
                                            holidays. Moreover, I never had such an honest insight into English mentality
                                            and culture. Great!!.</p>
                                        <div class="tes-img"><img
                                                src="{{ asset('frontend/images/testimonials1.png') }}"
                                                alt="Testimonial">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <h4><strong>Abha Mishra</strong> <br>
                                        </h4>
                                        <p>It was incredible, time flew and I can’t wait to be back here with you.</p>
                                        <div class="tes-img"><img
                                                src="{{ asset('frontend/images/testimonials1.png') }}"
                                                alt="Testimonial">
                                        </div>
                                    </div>

                                    <div class="item">
                                        <h4><strong>Saumya</strong><br>
                                        </h4>
                                        <p>Everybody here is so kind and nice. Thanks a billion for your excellent &amp;
                                            professional work.</p>
                                        <div class="tes-img"><img
                                                src="{{ asset('frontend/images/testimonials2.png') }}"
                                                alt="Testimonial">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </section>
    <!-- Testimonials End -->



    <section>
        <div class="container">
            <div class="text-effect" style="margin-bottom: 20px;">
                <span>Events</span>
            </div>
            <div class="row">
                @if ($events)
                    @foreach ($events as $event)
                        <div class="col-sm-3" style="margin-bottom: 15px;">
                            <a href="{{ route('event-gallery.index', ['event_id'=> $event->id]) }}"
                                class="fancylight" data-fancybox-group="light">
                                <div class="box1">
                                    <img src="{{ asset( $event->images) }}"
                                        style="height:200px !important;width:250px !important;">
                                    <div class="box-content1">
                                        <h3 class="title">{{ $event->name }}</h3>

                                        {{-- @if ($event->text2)
                                            <span class="post">{{ $event->text2 }}</span>
                                        @endif --}}
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>

    <!-- Gallery End -->
    @section('script_area')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>

        <script>
            $('.portfolio-menu ul li').click(function() {
                $('.portfolio-menu ul li').removeClass('active');
                $(this).addClass('active');

                var selector = $(this).attr('data-filter');
                $('.portfolio-item').isotope({
                    filter: selector
                });
                return false;
            });
            $(document).ready(function() {
                var popup_btn = $('.popup-btn');
                popup_btn.magnificPopup({
                    type: 'image',
                    gallery: {
                        enabled: true
                    }
                });
            });
        </script>
    @endsection
@endsection
