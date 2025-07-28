@extends('user.layouts.layout')
@section('content')

<section class="tup">
    <div class="brid" >
        <div class="container">
        <h1>
        Non Teaching Staff<br>
         <span><a href="{{route('index')}}">Home </a>/ Non Teaching Staff</span>
         </h1>
       </div>
     </div>
</section>

<section id="staff" class="staff sectop">
    <div class="container">
        <div class="row">
            @if ($non_teachings)
                @foreach ($non_teachings as $non_teaching)
                    <div class="col-sm-3" style="margin-bottom: 15px;">
                        <div class="box2">
                            <img src="{{ asset('upload/non_teachers/') . '/' . $non_teaching->pic_name }}" style="height:250px !important;width:250px !important;">
                            <div class="box-content">
                                <h3 class="title">{{ $non_teaching->name }}</h3>
                                <span class="post">{{ $non_teaching->designation }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
  </section>
  <!-- About Us End-->

@endsection
