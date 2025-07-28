@extends('user.layouts.layout')
@section('header_area')
<style>
.panel{
    font-family: 'Roboto', sans-serif;
    padding: 0;
    border: none;
    box-shadow: 0 .3rem .8rem rgba(0, 0, 0, .12);
}
.panel .panel-heading{
    background: #fff;
    padding: 25px 25px 10px;
    border-radius: 0;
}
.panel .panel-heading .title{
    color: #32393f;
    font-size: 28px;
    font-weight: 400;
    line-height: 30px;
    text-transform: capitalize;
    margin: 0;
}
.panel .panel-heading .btn{
    font-size: 15px;
    padding: 6px 15px;
    border-radius: 50px;
    border: none;
    transition: all 0.3s ease 0s;
}
.panel .panel-heading .btn:hover{ box-shadow: 0 0 10px rgba(0,0,0,0.2); }
.panel .panel-body{ border-radius: 0; }
.panel .panel-body .table thead tr th{
    color: white;
    font-size: 16px;
    font-weight: 400;
    padding: 12px;
    background-color: #BE0E14;
}
.panel .panel-body .table thead tr th:last-child{ width: 120px; }
.panel .panel-body .table tbody tr td{
    color: #555;
    background: #fff;
    font-size: 15px;
    font-weight: 500;
    padding: 10px;
    vertical-align: middle;
    border-color: #e7e7e7;
}
.panel .panel-body .table .user_icon{
    width: 50px;
    height: 50px;
    margin: 0 5px 0 0;
    border-radius: 100px;
    display: inline-block;
}
.panel .panel-body .table .user_icon img{
    width: 100%;
    height: auto;
    border-radius: 50%;
}
.panel .panel-body .table tbody td span.label{ font-size: 13px; }
.panel .panel-body .table tbody .action-list{
    padding: 0;
    margin: 0;
    list-style: none;
}
.panel .panel-body .table tbody .action-list li{
    margin: 0 3px;
    display: inline-block;
}
.panel .panel-body .table tbody .action-list li a{
    color: #f41127;
    background-color: rgb(244 17 39 / 0.11);
    font-size: 18px;
    border: none;
    transition: all 0.3s ease;
}
.panel .panel-body .table tbody .action-list li:last-child a{
    color: #0d6efd;
    background-color: rgb(13 110 253 / 0.11);
}
.panel .panel-body .table tbody .action-list li a:hover{ box-shadow: 0 0 5px rgba(0,0,0,0.3); }
.panel .panel-footer{
    background-color: #fff;
    padding: 10px 25px 25px;
    border: none;
}
.pagination{ margin: 0; }
.pagination li a{
    color: #999;
    font-size: 14px;
    font-weight: 500;
    text-align: center;
    line-height: 32px;
    width: 30px;
    height: 30px;
    padding: 0;
    margin: 0 2px;
    border-radius: 30px;
    border: none;
    transition: all 0.3s ease 0s;
}
.pagination li a:hover,
.pagination li a:focus,
.pagination li.active a{
    color: #fff;
    background-color: #286090;
}
.pagination li:first-child a,
.pagination li:last-child a{
    border-radius: 50%;
}
@media only screen and (max-width:767px){
    .panel .panel-heading{ text-align: center; }
    .panel .panel-heading .title{ margin: 0 0 15px; }
    .panel .panel-heading .text-right{ text-align: center; }
}
</style>

@endsection
@section('content')

<section class="tup">
    <div class="brid" >
        <div class="container">
        <h1>
        Teaching Staff<br>
         <span><a href="{{route('index')}}">Home </a>/ Teaching Staff</span>
         </h1>
       </div>
     </div>
</section>

<section id="staff" class="staff sectop">
    <!--<div class="container">-->
    <!--    <div class="row">-->
    <!--        @if ($teachings)-->
    <!--            @foreach ($teachings as $teaching)-->
    <!--                <div class="col-sm-3" style="margin-bottom: 15px;">-->
    <!--                    <div class="box2">-->
    <!--                        <img src="{{ asset('upload/teachers/') . '/' . $teaching->pic_name }}" style="height:300px;width:300px;">-->
    <!--                        <div class="box-content">-->
    <!--                            <h3 class="title">{{ $teaching->name }}</h3>-->
    <!--                            <span class="post">{{ $teaching->designation }}</span>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            @endforeach-->
    <!--        @else-->
    <!--            <h4>Content to be uploaded soon...</h4>-->
    <!--        @endif-->
    <!--    </div>-->
    <!--</div>-->
    
    
    
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Faculty Name</th>
                                <th>Designation</th>
                                <th>Department</th>
                                <th>Qualifications</th>
                                <th>Email</th>
                                <th>Phone</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($teachings as $teaching)
                            <tr>
                                <td>
                                    <div class="user_icon">
                                        <img class="img-rounded" src="{{ asset('upload/teachers/') . '/' . $teaching->pic_name }}" alt="{{ $teaching->name }}" style="height:100px;width:100px;">
                                    </div><br/><br/><br/>
                                    {{ $teaching->name }}
                                </td>
                                <td>{{ $teaching->designation ?? '' }}</td>
                                <td>{{ $teaching->department->name ?? '' }}</td>
                                <td>{{ $teaching->qualification ?? '' }}</td>
                                 <td>{{ $teaching->email ?? '' }}</td>
                                 <td>+91 {{ substr($teaching->mobile ?? '', 0, -4) . str_repeat('X', 4) }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7">No data available</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
    
    
  </section>
  <!-- About Us End-->

@endsection
@section('script-area')


@endsection