@extends('user.layouts.layout')
@section('content')
    <section class="tup">
        <div class="brid">
            <div class="container">
                <h1>
                    Mandatory Disclosure<br>
                    <span><a href="{{ route('index') }}">Home</a> / Mandatory Disclosure</span>
                </h1>
            </div>
        </div>
    </section>

    <section id="aboutus" class="about-us sectop">
        <div class="container">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Name</th>
                        <th>Downloads</th>
                    </tr>
                    <tr>
                        <td>Fire Certificate</td>
                        <td><a target="_blank" href="{{ asset('frontend/data/pdf/fire_certificate.pdf') }}"><i
                                    class="fa fa-file-pdf-o"></i></a></td>
                    </tr>
                    <tr>
                        <td>Earthquake Certificate</td>
                        <td><a target="_blank" href="{{ asset('frontend/data/pdf/earthquake_certificate.pdf') }}"><i
                                    class="fa fa-file-pdf-o"></i></a></td>
                    </tr>
                    <tr>
                        <td>Building Completion Certificate</td>
                        <td><a target="_blank"
                                href="{{ asset('frontend/data/pdf/building-completion-certificate.pdf') }}"><i
                                    class="fa fa-file-pdf-o"></i></a></td>
                    </tr>
                    <tr>
                        <td>PAR</td>
                        <td><a target="_blank" href="{{ asset('frontend/data/pdf/par-file.pdf') }}"><i
                                    class="fa fa-file-pdf-o"></i></a></td>
                    </tr>
                    <tr>
                        <td>PAR Replica</td>
                        <td><a target="_blank" href="{{ asset('frontend/data/pdf/par-replica.pdf') }}"><i
                                    class="fa fa-file-pdf-o"></i></a></td>
                    </tr>
                    <tr>
                        <td>PAR Detail Report</td>
                        <td><a target="_blank" href="{{ asset('frontend/data/pdf/par-detail-report.pdf') }}"><i
                                    class="fa fa-file-pdf-o"></i></a></td>
                    </tr>
                    <tr>
                        <td>PAR Profile Certificate</td>
                        <td><a target="_blank" href="{{ asset('frontend/data/pdf/no-profile-certificate.pdf') }}"><i
                                    class="fa fa-file-pdf-o"></i></a></td>
                    </tr>
                    <tr>
                        <td>Counter List for Teacher B.ED 2017</td>
                        <td><a target="_blank"
                                href="{{ asset('frontend/data/pdf/counter_list_for_teacher_b.ed_2017.pdf') }}"><i
                                    class="fa fa-file-pdf-o"></i></a></td>
                    </tr>
                    <tr>
                        <td>Counter List for Teacher M.ED 2017</td>
                        <td><a target="_blank"
                                href="{{ asset('frontend/data/pdf/counter_list_for_teacher_m.ed_2017.pdf') }}"><i
                                    class="fa fa-file-pdf-o"></i></a></td>
                    </tr>
                    <tr>
                        <td>Counter List for Teacher D.El.Ed 2017</td>
                        <td><a target="_blank"
                                href="{{ asset('frontend/data/pdf/counter_list_for_teacher_d.el.ed_2017.pdf') }}"><i
                                    class="fa fa-file-pdf-o"></i></a></td>
                    </tr>
                    <tr>
                        <td>AISHE Report 2016 - 2017</td>
                        <td><a target="_blank" href="{{ asset('frontend/data/pdf/aishe_report_2016-2017.pdf') }}"><i
                                    class="fa fa-file-pdf-o"></i></a></td>
                    </tr>
                    <tr>
                        <td>AISHE Report 2018 - 2019</td>
                        <td><a target="_blank" href="{{ asset('frontend/data/pdf/aishe_report_2018-2019.pdf') }}"><i
                                    class="fa fa-file-pdf-o"></i></a></td>
                    </tr>
                    <tr>
                        <td>DCF-II Dr. Z.H.T.T. College 18-19</td>
                        <td><a target="_blank"
                                href="{{ asset('frontend/data/pdf/dcf-II_dr.z.h.t.t.college_18-19.pdf') }}"><i
                                    class="fa fa-file-pdf-o"></i></a></td>
                    </tr>
                    <tr>
                        <td>TIF Dr. Z.H.T.T. College 18-19</td>
                        <td><a target="_blank" href="{{ asset('frontend/data/pdf/tif_dr.z.h.t.t.college_18-19.pdf') }}"><i
                                    class="fa fa-file-pdf-o"></i></a></td>
                    </tr>
                    <tr>
                        <td>AISHE Report 2019 - 2020</td>
                        <td><a target="_blank" href="{{ asset('frontend/data/pdf/aishe_report_2019-2020.pdf') }}"><i
                                    class="fa fa-file-pdf-o"></i></a></td>
                    </tr>
                    <tr>
                        <td>AISHE Report 2020 - 2021</td>
                        <td><a target="_blank" href="{{ asset('frontend/data/pdf/aishe_report_2020-2021.pdf') }}"><i
                                    class="fa fa-file-pdf-o"></i></a></td>
                    </tr>
                    <tr>
                        <td>AISHE Report 2021 - 2022</td>
                        <td><a target="_blank" href="{{ asset('frontend/data/pdf/aishe_report_2021-2022.pdf') }}"><i
                                    class="fa fa-file-pdf-o"></i></a></td>
                    </tr>
                    <tr>
                        <td>List of 2017 IQAC Committee Cell</td>
                        <td><a target="_blank" href="#"><i class="fa fa-file-pdf-o"></i></a></td>
                    </tr>
                    <tr>
                        <td>List of 2018 IQAC Committee Cell</td>
                        <td><a target="_blank"
                                href="{{ asset('frontend/data/pdf/List of 2018 IQAC Committee Cell.pdf') }}"><i
                                    class="fa fa-file-pdf-o"></i></a></td>
                    </tr>
                    <tr>
                        <td>List of 2019 IQAC Committee Cell</td>
                        <td><a target="_blank"
                                href="{{ asset('frontend/data/pdf/List of 2019 IQAC Committee Cell.pdf') }}"><i
                                    class="fa fa-file-pdf-o"></i></a></td>
                    </tr>
                    <tr>
                        <td>List of 2020 IQAC Committee Cell</td>
                        <td><a target="_blank"
                                href="{{ asset('frontend/data/pdf/List of 2020 IQAC Committee Cell.pdf') }}"><i
                                    class="fa fa-file-pdf-o"></i></a></td>
                    </tr>
                    <tr>
                        <td>List of 2021 IQAC Committee Cell</td>
                        <td><a target="_blank"
                                href="{{ asset('frontend/data/pdf/List of 2020 IQAC Committee Cell.pdf') }}"><i
                                    class="fa fa-file-pdf-o"></i></a></td>
                    </tr>
                </tbody>
            </table>

            <div class="accordion text-center" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingthree">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse"
                                data-target="#collapsethree" aria-expanded="false">
                                <span>All Teachers Appointment Letter</span> <i class="fa fa-plus"></i>
                            </button>
                        </h2>
                    </div>
                    <div id="collapsethree" class="col-md-12 collapse" aria-labelledby="headingthree"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>Name</th>
                                        <th>Downloads</th>
                                    </tr>
                                    <tr>
                                        <td>All Teachers Qualification Letter</td>
                                        <td><a target="_blank"
                                                href="{{ asset('frontend/data/pdf/teacher/All Teachers P.hD. Appotment Letter.pdf') }}"><span><i
                                                        class="fa fa-file-pdf-o" aria-hidden="true"></i></span></a></td>
                                    </tr>
                                    <tr>
                                        <td>All Teachers Appointment Letter</td>
                                        <td><a target="_blank" href="{{ asset('frontend/data/pdf/teacher/all-teacher.pdf') }}"><span><i
                                                        class="fa fa-file-pdf-o" aria-hidden="true"></i></span></a></td>
                                    </tr>
                                    <tr>
                                        <td>Aman Singh</td>
                                        <td><a target="_blank" href="{{ asset('frontend/data/pdf/teacher/Aman_Singh.pdf') }}"><span><i
                                                        class="fa fa-file-pdf-o" aria-hidden="true"></i></span></a></td>
                                    </tr>
                                    <tr>
                                        <td>Aziz Fatma Tarannum</td>
                                        <td><a target="_blank" href="{{ asset('frontend/data/pdf/teacher/.pdf') }}"><span><i class="fa fa-file-pdf-o"
                                                        aria-hidden="true"></i></span></a></td>
                                    </tr>
                                    <tr>
                                        <td>C. N. Jha</td>
                                        <td><a target="_blank" href="{{ asset('frontend/data/pdf/teacher/C._N._Jha.pdf') }}"><span><i
                                                        class="fa fa-file-pdf-o" aria-hidden="true"></i></span></a></td>
                                    </tr>
                                    <tr>
                                        <td>Dr. Absarul Haque</td>
                                        <td><a target="_blank" href="{{ asset('frontend/data/pdf/teacher/Dr._Absarul_Haque.pdf') }}"><span><i
                                                        class="fa fa-file-pdf-o" aria-hidden="true"></i></span></a></td>
                                    </tr>
                                    <tr>
                                        <td>Dr. Afaque Hashmi</td>
                                        <td><a target="_blank" href="{{ asset('frontend/data/pdf/teacher/Dr._Afaque_Hashmi.pdf') }}"><span><i
                                                        class="fa fa-file-pdf-o" aria-hidden="true"></i></span></a></td>
                                    </tr>
                                    <tr>
                                        <td>Dr. D. N. Singh</td>
                                        <td><a target="_blank" href="{{ asset('frontend/data/pdf/teacher/Dr._D._N._Singh.pdf') }}"><span><i
                                                        class="fa fa-file-pdf-o" aria-hidden="true"></i></span></a></td>
                                    </tr>
                                    <tr>
                                        <td>Dr. Firoz Akram</td>
                                        <td><a target="_blank" href="{{ asset('frontend/data/pdf/teacher/Dr._Firoz_Akram.pdf') }}"><span><i
                                                        class="fa fa-file-pdf-o" aria-hidden="true"></i></span></a></td>
                                    </tr>
                                    <tr>
                                        <td>Dr. Kalpana Kumari</td>
                                        <td><a target="_blank" href="{{ asset('frontend/data/pdf/teacher/.pdf') }}"><span><i class="fa fa-file-pdf-o"
                                                        aria-hidden="true"></i></span></a></td>
                                    </tr>
                                    <tr>
                                        <td>Dr. Kalyani Kumari</td>
                                        <td><a target="_blank" href="{{ asset('frontend/data/pdf/teacher/Dr._Kalyani_Kumari.pdf') }}"><span><i
                                                        class="fa fa-file-pdf-o" aria-hidden="true"></i></span></a></td>
                                    </tr>
                                    <tr>
                                        <td>Dr. Kumud Kumari</td>
                                        <td><a target="_blank" href="{{ asset('frontend/data/pdf/teacher/.pdf') }}"><span><i class="fa fa-file-pdf-o"
                                                        aria-hidden="true"></i></span></a></td>
                                    </tr>
                                    <tr>
                                        <td>Dr. M. A. Khan Sir</td>
                                        <td><a target="_blank" href="{{ asset('frontend/data/pdf/teacher/Dr._M._A._Khan Sir.pdf') }}"><span><i
                                                        class="fa fa-file-pdf-o" aria-hidden="true"></i></span></a></td>
                                    </tr>
                                    <tr>
                                        <td>Dr. Manoj Kumar Singh</td>
                                        <td><a target="_blank" href="{{ asset('frontend/data/pdf/teacher/Dr._Manoj_Kumar_Singh.pdf') }}"><span><i
                                                        class="fa fa-file-pdf-o" aria-hidden="true"></i></span></a></td>
                                    </tr>

                                    <tr>
                                        <td>Dr. Md. Imbesatul Haque</td>
                                        <td><a target="_blank" href="{{ asset('frontend/data/pdf/teacher/Dr._Md._Imbesatul_Haque.pdf') }}"><span><i
                                                        class="fa fa-file-pdf-o" aria-hidden="true"></i></span></a></td>
                                    </tr>
                                    <tr>
                                        <td>Dr. Md. Manzer Sulaiman</td>
                                        <td><a target="_blank" href="{{ asset('frontend/data/pdf/teacher/Dr._Md._Manzer_Sulaiman.pdf') }}"><span><i
                                                        class="fa fa-file-pdf-o" aria-hidden="true"></i></span></a></td>
                                    </tr>
                                    <tr>
                                        <td>Dr. Pratibha Rani Singh</td>
                                        <td><a target="_blank" href="{{ asset('frontend/data/pdf/teacher/Dr._Razia_Nasreen.pdf') }}"><span><i
                                                        class="fa fa-file-pdf-o" aria-hidden="true"></i></span></a></td>
                                    </tr>
                                    <tr>
                                        <td>Dr. Razia Nasreen</td>
                                        <td><a target="_blank" href="{{ asset('frontend/data/pdf/teacher/Dr._Razia_Nasreen.pdf') }}"><span><i
                                                        class="fa fa-file-pdf-o" aria-hidden="true"></i></span></a></td>
                                    </tr>
                                    <tr>
                                        <td>Dr. Renu Kumari</td>
                                        <td><a target="_blank" href="{{ asset('frontend/data/pdf/teacher/.pdf') }}"><span><i class="fa fa-file-pdf-o"
                                                        aria-hidden="true"></i></span></a></td>
                                    </tr>
                                    <tr>
                                        <td>Dr. S. H. Bazmi</td>
                                        <td><a target="_blank" href="{{ asset('frontend/data/pdf/teacher/Dr._S._H._Bazmi.pdf') }}"><span><i
                                                        class="fa fa-file-pdf-o" aria-hidden="true"></i></span></a></td>
                                    </tr>
                                    <tr>
                                        <td>Dr. S. M. Mahmood Farid</td>
                                        <td><a target="_blank" href="{{ asset('frontend/data/pdf/teacher/Dr._S._M._Mahmood_Farid.pdf') }}"><span><i
                                                        class="fa fa-file-pdf-o" aria-hidden="true"></i></span></a></td>
                                    </tr>
                                    <tr>
                                        <td>Dr. Shahid Hassan</td>
                                        <td><a target="_blank" href="{{ asset('frontend/data/pdf/teacher/Dr._Shahid_Hassan.pdf') }}"><span><i
                                                        class="fa fa-file-pdf-o" aria-hidden="true"></i></span></a></td>
                                    </tr>
                                    <tr>
                                        <td>F. A. T. Saba</td>
                                        <td><a target="_blank" href="{{ asset('frontend/data/pdf/teacher/F._A._T._Saba.pdf') }}"><span><i
                                                        class="fa fa-file-pdf-o" aria-hidden="true"></i></span></a></td>
                                    </tr>
                                    <tr>
                                        <td>Farkhunda Jabeen</td>
                                        <td><a target="_blank" href="{{ asset('frontend/data/pdf/teacher/Farkhunda_Jabeen.pdf') }}"><span><i
                                                        class="fa fa-file-pdf-o" aria-hidden="true"></i></span></a></td>
                                    </tr>
                                    <tr>
                                        <td>Ganga Prasad Jha</td>
                                        <td><a target="_blank" href="{{ asset('frontend/data/pdf/teacher/Ganga_Prasad_Jha.pdf') }}"><span><i
                                                        class="fa fa-file-pdf-o" aria-hidden="true"></i></span></a></td>
                                    </tr>
                                    <tr>
                                        <td>Irteza Ahmad</td>
                                        <td><a target="_blank" href="{{ asset('frontend/data/pdf/teacher/Irteza_Ahmad.pdf') }}"><span><i
                                                        class="fa fa-file-pdf-o" aria-hidden="true"></i></span></a></td>
                                    </tr>
                                    <tr>
                                        <td>Kalam Hussain</td>
                                        <td><a target="_blank" href="{{ asset('frontend/data/pdf/teacher/Kalam_Hussain.pdf') }}"><span><i
                                                        class="fa fa-file-pdf-o" aria-hidden="true"></i></span></a></td>
                                    </tr>
                                    <tr>
                                        <td>Kumari Sarita</td>
                                        <td><a target="_blank" href="{{ asset('frontend/data/pdf/teacher/.pdf') }}"><span><i class="fa fa-file-pdf-o"
                                                        aria-hidden="true"></i></span></a></td>
                                    </tr>
                                    <tr>
                                        <td>Manisha Hera</td>
                                        <td><a target="_blank" href="{{ asset('frontend/data/pdf/teacher/Manisha_Hera.pdf') }}"><span><i
                                                        class="fa fa-file-pdf-o" aria-hidden="true"></i></span></a></td>
                                    </tr>
                                    <tr>
                                        <td>Md. Farooque Azam</td>
                                        <td><a target="_blank" href="{{ asset('frontend/data/pdf/farooq.pdf') }}"><span><i class="fa fa-file-pdf-o"
                                                        aria-hidden="true"></i></span></a></td>
                                    </tr>
                                    <tr>
                                        <td>Md. Shamim Haider</td>
                                        <td><a target="_blank" href="{{ asset('frontend/data/pdf/teacher/Md._Shamim_Haider.pdf') }}"><span><i
                                                        class="fa fa-file-pdf-o" aria-hidden="true"></i></span></a></td>
                                    </tr>
                                    <tr>
                                        <td>Md. Zafir</td>
                                        <td><a target="_blank" href="{{ asset('frontend/data/pdf/teacher/Md._Zafir.pdf') }}"><span><i
                                                        class="fa fa-file-pdf-o" aria-hidden="true"></i></span></a></td>
                                    </tr>
                                    <tr>
                                        <td>Md. Zaifi</td>
                                        <td><a target="_blank" href="{{ asset('frontend/data/pdf/teacher/Md._Zaifi.pdf') }}"><span><i
                                                        class="fa fa-file-pdf-o" aria-hidden="true"></i></span></a></td>
                                    </tr>
                                    <tr>
                                        <td>Nazma Baby</td>
                                        <td><a target="_blank" href="{{ asset('frontend/data/pdf/teacher/Nazma_Baby.pdf') }}"><span><i
                                                        class="fa fa-file-pdf-o" aria-hidden="true"></i></span></a></td>
                                    </tr>
                                    <tr>
                                        <td>Quisar Jahan</td>
                                        <td><a target="_blank" href="#"><span><i class="fa fa-file-pdf-o"
                                                        aria-hidden="true"></i></span></a></td>
                                    </tr>
                                    <tr>
                                        <td>Rahat Jahan</td>
                                        <td><a target="_blank" href="{{ asset('frontend/data/pdf/teacher/Rahat_Jahan.pdf') }}"><span><i
                                                        class="fa fa-file-pdf-o" aria-hidden="true"></i></span></a></td>
                                    </tr>
                                    <tr>
                                        <td>Rekha Kumari</td>
                                        <td><a target="_blank" href="{{ asset('frontend/data/pdf/teacher/Rekha_Kumari.pdf') }}"><span><i
                                                        class="fa fa-file-pdf-o" aria-hidden="true"></i></span></a></td>
                                    </tr>
                                    <tr>
                                        <td>Sabiha Perween</td>
                                        <td><a target="_blank" href="{{ asset('frontend/data/pdf/teacher/Sabiha_Perween.pdf') }}"><span><i
                                                        class="fa fa-file-pdf-o" aria-hidden="true"></i></span></a></td>
                                    </tr>
                                    <tr>
                                        <td>Sanjeev Kumar Jha</td>
                                        <td><a target="_blank" href="{{ asset('frontend/data/pdf/teacher/Sanjeev_Kumar_Jha.pdf') }}"><span><i
                                                        class="fa fa-file-pdf-o" aria-hidden="true"></i></span></a></td>
                                    </tr>
                                    <tr>
                                        <td>Tushmit Jahan</td>
                                        <td><a target="_blank" href="{{ asset('frontend/data/pdf/teacher/Tushmit_Jahan.pdf') }}"><span><i
                                                        class="fa fa-file-pdf-o" aria-hidden="true"></i></span></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
