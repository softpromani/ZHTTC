@extends('user.layouts.layout')
@section('content')
    <section class="tup">
        <div class="brid">
            <div class="container">
                <h1>
                    College Development Committee<br>
                    <span><a href="{{ route('index') }}">Home </a>/ College Development Committee</span>
                </h1>
            </div>
        </div>
    </section>

    <section id="aboutus" class="about-us sectop">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                        Placement/Career Counselling Cell
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead style="background-color:#606060;color:white;">
                                            <tr>
                                                <th>Sr.No.</th>
                                                <th>Title</th>
                                                <th>Uploaded Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Test</td>
                                                <td>1/2/2022</td>
                                                <td>Edit | Del</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- About Us End-->
@endsection
