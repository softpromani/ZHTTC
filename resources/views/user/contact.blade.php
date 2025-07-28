@extends('user.layouts.layout')
@section('content')
    <section class="tup">
        <div class="brid">
            <div class="container">
                <h1>
                    Contact Us<br>
                    <span><a href="{{ route('index') }}">Home </a>/ Contact Us</span>
                </h1>
            </div>
        </div>
    </section>

    <section id="contactus" class="contactus">
        <div class="container">

            <div class="row">
                <div class="col-sm-3 ">
                    <div class="contact-list heg">
                        <div class="center">
                            <div class="contact-icon"><i class="fa fa-map-marker"></i></div>
                        </div>
                        <h3>College Address</h3>
                        <h4>Z. H. T. T. College </h4>
                        <p>
                            VIP Rd, Allalpatti, Laheriasarai, Darbhanga, Bihar, India (Pin-846003)
                        </p>

                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="contact-list heg">
                        <div class="center">
                            <div class="contact-icon"><i class="fa fa-phone"></i></div>
                        </div>
                        <h3>College Contact No.</h3>
                        <h4>Telephone No.</h4>
                        <p>Phone: +91-080848-04912,  06272-295280</p>


                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="contact-list heg">
                        <div class="center">
                            <div class="contact-icon"><i class="fa fa-envelope"></i></div>
                        </div>
                        <h3>Our Email Contacts</h3>
                        <h4>submit your enquiry here</h4>
                        <p><a href="gdcollegebegusarai2@gmail.com">pricpzhttc@gmail.com, info@zhttc.net.in</a></p>


                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="contact-list heg">
                        <div class="center">
                            <div class="contact-icon"><i class="fa fa-commenting" aria-hidden="true"></i></div>
                        </div>
                        <h3>SOCIAL MEDIA</h3>
                        <h4>submit your enquiry here</h4>
                        <p class="center">
                            <a href="#"> <i class="fa fa-facebook-official soc m-0 p-0" aria-hidden="true"></i></a>
                            <a href="#"> <i class="fa fa-google-plus soc m-0 p-0" aria-hidden="true"></i></a>
                            <a href="#"> <i class="fa fa-twitter-square soc m-0 p-0" aria-hidden="true"></i></a>
                            <a href="#"> <i class="fa fa-youtube-square soc m-0 p-0" aria-hidden="true"></i></a>
                        </p>


                    </div>
                </div>
            </div>
            <div class="row offset-top-60">
                <div class="col-sm-6 ">
                    <div class="shadow-lg p-4 mb-5 mt-5 bg-light rounded ">
                        <form action="{{ route('savecontact') }}" method="post">
                            @csrf
                            <div class="form-group ">
                                <label for="exampleFormControlInput1">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="xxxx
          @example.com">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Your Name</label>
                                <input type="text" name="name" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Your Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Your Mobile No</label>
                                <input type="text" name="mobile" class="form-control" id="exampleFormControlInput1"
                                    placeholder="xxxx-xxxxx">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1"> Message </label>
                                <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"
                                    placeholder="Write Your Message Here "></textarea>
                            </div>
                            <br />
                            <button type="submit" class="btn btn-danger btn-lg ">Save Contact</button>
                        </form>

                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="google-map">

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3582.024559799689!2d85.90220427398606!3d26.13074219326029!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39edb85ea7b2f069%3A0xce33b29e1ced701a!2sDr.%20Zakir%20Hussain%20Teachers%20Training%20College!5e0!3m2!1sen!2sin!4v1753125760786!5m2!1sen!2sin"
                            style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>

    </section>
@section('script_area')
    <script src="{{ asset('adminlayout/plugins/toastr/toastr.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            toastr.options.timeOut = 10000;
            @if (Session::has('error'))
                toastr.error('{{ Session::get('error') }}');
            @elseif(Session::has('success'))
                toastr.success('{{ Session::get('success') }}');
            @endif
        });
    </script>
@endsection

@endsection
