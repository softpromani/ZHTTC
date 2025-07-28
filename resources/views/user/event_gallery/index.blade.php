@extends('user.layouts.layout')
@section('content')

    <section class="tup">
        <div class="brid">
            <div class="container">
                <h1>
                    {{ $event->name }}<br>
                    <span><a href="{{ route('index') }}">Home </a>/ {{ $event->name }}</span>
                </h1>
            </div>
        </div>
    </section>

    <section id="aboutus" class="about-us sectop">
        <div class="container">

            <div class="row">
                @if ($galleries)
                    @foreach ($galleries as $gallery)
                        <div class="col-sm-3" style="margin-bottom: 15px;">
                            <a href="{{ asset($gallery->image) }}" class="fancylight popup-btn" data-fancybox-group="light">
                                <div class="box1">
                                    <img src="{{ asset($gallery->image) }}"
                                        style="height:200px !important;width:250px !important;">

                                </div>
                            </a>
                        </div>
                    @endforeach
                @else
                    <div class="col-sm-12">
                        <p>No images available for this event.</p>
                    </div>
                @endif
            </div>
        </div>
    </section>
    <!-- About Us End-->

@endsection
