@extends('user.layouts.layout')
@section('content')
    <section class="tup">
        <div class="brid">
            <div class="container">
                <h1>
                    Annual Quality Assurance Report<br>
                    <span><a href="{{ route('index') }}">Home </a>/ AQAR</span>
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
                                        AQAR
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
                                                <th>Session</th>
                                                <th>File</th>
                                                <th>Uploaded Date</th>
                                            </tr>
                                        </thead>
                                        @if($data == '' && $data == NULL)
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Test</td>
                                                <td>1/2/2022</td>
                                                <td>Edit | Del</td>
                                                <td>Edit | Del</td>
                                            </tr>
                                        </tbody>
                                        @else
                                        <h2>No data to be displayed</h2>
                                        @endif
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
