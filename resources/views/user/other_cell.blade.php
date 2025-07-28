@extends('user.layouts.layout')
@section('content')
    <section class="tup">
        <div class="brid">
            <div class="container">
                <h1>
                    Other Cell<br>
                    <span><a href="{{ route('index') }}">Home </a>/ Other Cell</span>
                </h1>
            </div>
        </div>
    </section>

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
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    College Development Commitee
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
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
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Disciplinary/Admission Committee
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingThree">
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

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFour">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour"
                                    aria-controls="collapseFour">
                                    Grievance Redressal/Anti Ragging Cell
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse in" role="tabpanel"
                            aria-labelledby="headingFour">
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
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFive">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Internal Quality Assurance Cell
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
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
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingSix">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Advisory Committee for Central Library
                                </a>
                            </h4>
                        </div>
                        <div id="collapseSix" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingSix">
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

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingSeven">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven"
                                    aria-controls="collapseSeven">
                                    Women Cell/Anti Sexual Harassment Cell
                                </a>
                            </h4>
                        </div>
                        <div id="collapseSeven" class="panel-collapse collapse in" role="tabpanel"
                            aria-labelledby="headingSeven">
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
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingEight">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    Steering Committee for NAAC of the college
                                </a>
                            </h4>
                        </div>
                        <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
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
@endsection
