<header>

    <div class="logo">
    <div class="container-fluid">
        <!-- Logo -->
        <div class="row">
            <video class="img-fluid" style="max-width: 100%; height: auto;" autoplay muted loop>
                <source src="{{ asset('frontend/images/img/logo/zhtt-header.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
</div>


    <div class="logo-bar wow fadeInDown text-center" data-offset-top="197" data-spy="affix">
        <div class="container">
            <!-- Logo -->
            <div class="row">

                <div class="col-sm-12">
                    @include('user.include.menu')
                </div>
            </div>
        </div>
    </div>

</header>
