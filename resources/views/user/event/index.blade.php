@extends('user.layouts.layout')
@section('content')

    <section class="tup">
        <div class="brid">
            <div class="container">
                <h1>
                    Our Events<br>
                    <span><a href="{{ route('index') }}">Home </a>/ Our Events</span>
                </h1>
            </div>
        </div>
    </section>

    <section id="aboutus" class="about-us sectop">
        <div class="container">

            <div class="row">
                @if ($events)
                    @foreach ($events as $event)
                        <div class="col-sm-3" style="margin-bottom: 15px;">
                            <a href="{{ route('event-gallery.index', ['event_id'=>$event->id]) }}" class="fancylight popup-btn" data-fancybox-group="light">
                                <div class="box1">
                                    <img src="{{ asset($event->images) }}"
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
    <!-- About Us End-->

@endsection
