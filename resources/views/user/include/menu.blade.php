<nav class="navbar navbar-default">
    <div class="row">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle
                    navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span
                    class="icon-bar"></span> </button>
            <a class="navbar-brand" href="#home">
                <h3 style="color: white;font-weight:bold;text-align: center;font-size:25px;">Z. H. T. T. College </h3>
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav text-center">

                <li><a href="{{ route('index') }}">Home</a></li>

                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                        aria-haspopup="true" aria-expanded="false">About us <i class="fa fa-angle-down"></i></a>

                    <ul class="dropdown-menu">

                        <li><a href="{{ route('about-college') }}">About College</a></li>

                        <li><a href="{{ route('about-management') }}">About Management</a></li>

                        <li><a href="{{ route('vision-mission') }}">Vision and Mission</a></li>

                        <li><a href="{{ route('secretary-message') }}" target="_blank">Secretary Message</a></li>

                        <li><a href="https://governor.bih.nic.in/" target="_blank">Hon'ble Chancellor</a></li>

                        <li><a href={{ route('vice-chancellor-desk') }}>Vice Chancellor's Desk</a></li>

                        <li><a href="{{ route('principal-desk') }}">Principals Desk</a></li>

                        <li><a href="{{ route('strategic-plan') }}">Strategic Plan</a></li>

                    </ul>

                </li>



                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                        aria-haspopup="true" aria-expanded="false">Academics <i class="fa fa-angle-down"></i></a>

                    <ul class="dropdown-menu">

                        <li><a href="{{ route('academics') }}">Academics</a></li>

                        {{-- <li><a href="{{ route('admission') }}">Admission</a></li> --}}

                        <li><a href="{{ route('courses') }}">Courses</a></li>

                        <li><a href="{{ route('our-pride') }}" target="_self">Our Pride</a></li>

                        <li><a href="{{ route('scholarly') }}" target="_self">Scholarly</a></li>

                        <li><a href="{{ route('co-curricular-activities') }}" target="_self">Co-curricular
                                Acitivities</a></li>

                        <li><a href="{{ route('community-resources') }}" target="_self">Community Resources</a></li>

                        <li><a href="{{ route('mandatory-disclosure') }}" target="_self">Mandatory Disclosure</a></li>

                    </ul>

                </li>

                <li class="dropdown"> <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"
                        role="button" aria-haspopup="true" aria-expanded="false">Departments<i
                            class="fa fa-angle-down"></i></a>

                    <ul class="dropdown-menu">

                        <li><a href="{{ route('dElEd') }}">D.El.Ed</a></li>

                        <li><a href="{{ route('bEd') }}">B.Ed</a></li>

                        <li><a href="{{ route('mEd') }}">M.Ed</a></li>

                        <li><a href="{{ route('teaching-staff') }}">Teaching Staff</a></li>

                        <li><a href="{{ route('non-teaching-staff') }}">Non-Teaching Staff</a></li>

                    </ul>

                </li>

                <li class="dropdown"> <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"
                        role="button" aria-haspopup="true" aria-expanded="false">Admission<i
                            class="fa fa-angle-down"></i></a>

                    <ul class="dropdown-menu">

                        <li><a href="#">Research in Education</a></li>
                        <li><a href="#">M.Ed Programme</a></li>
                        <li><a href="#">B.Ed Programme</a></li>
                        <li><a href="#">D.El.Ed Programme</a></li>

                    </ul>

                </li>

                <li class="dropdown"> <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"
                        role="button" aria-haspopup="true" aria-expanded="false">Students Support<i
                            class="fa fa-angle-down"></i></a>

                    <ul class="dropdown-menu">

                        <li><a href="{{ route('library') }}">Library</a></li>

                        <li><a href="{{ route('laboratories') }}">Laboratories</a></li>

                        <li><a href="{{ route('seminar-hall') }}">Seminar Hall</a></li>

                        <li><a href="{{ route('playground') }}">Playground</a></li>

                        <li><a href="#">Alumni Management</a></li>

                        <li><a href="{{ route('regualtion') }}">Regulation</a></li>

                    </ul>

                </li>

                {{-- <li class="dropdown"> <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"
                        role="button" aria-haspopup="true" aria-expanded="false">COMMITTEES & CELLS <i
                            class="fa fa-angle-down"></i></a>

                    <ul class="dropdown-menu">

                        <li><a href="{{ route('career_placement_cell') }}">Placement/Career Counseling Cell</a></li>

                        <li><a href="{{ route('college_development_committee') }}">College Development Committee</a>
                        </li>

                        <li><a href="{{ route('disciplinary_admission_committee') }}">Disciplinary/Admission
                                Committee</a></li>

                        <li><a href="{{ route('grievance_antiragging_cell') }}">Grievance Redressal /Anti Ragging
                                Cell</a></li>

                        <li><a href="{{ route('iqac') }}">Internal Quality Assurance Cell (IQAC)</a></li>

                        <li><a href="{{ route('advisory_committee') }}">Advisory Committee for Central Library</a>
                        </li>

                        <li><a href="{{ route('women_cell') }}">Women Cell/Anti Sexual Harassment Cell</a></li>

                        <li><a href="{{ route('steering_committee') }}">Steering Committee for NAAC of the College</a>
                        </li>

                        <li><a href="{{ route('othercell') }}">Other Committee for cell of the College</a></li>

                    </ul>

                </li> --}}

                <li class="dropdown"> <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"
                        role="button" aria-haspopup="true" aria-expanded="false">NAAC <i
                            class="fa fa-angle-down"></i></a>

                    <ul class="dropdown-menu">


                        <li><a href="{{ route('ssr') }}">SSR</a></li>
                        <li><a href="#">NAAC Certficate</a></li>
                        <li><a href="#">DVV Clarifications</a></li>

                    </ul>

                </li>
                <li class="dropdown"> <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"
                        role="button" aria-haspopup="true" aria-expanded="false">IQAC <i
                            class="fa fa-angle-down"></i></a>

                    <ul class="dropdown-menu">

                        <li><a href="#">IQAC Committee Members</a></li>
                        <li><a href="{{ route('aqar') }}">AQAR Reports</a></li>
                        <li><a href="#">Quality Initiatives</a></li>
                        <li><a href="#">Policy Documents</a></li>
                        <li><a href="#">Annual Reports of IQAC</a></li>
                        <li><a href="#">IQAC Minutes</a></li>
                        <li><a href="#">Feedback Analysis</a></li>

                    </ul>

                </li>
                <li class="dropdown"> <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"
                        role="button" aria-haspopup="true" aria-expanded="false">NCTE <i
                            class="fa fa-angle-down"></i></a>

                    <ul class="dropdown-menu">

                        <li><a href="#">NCTE Recognition Certificate</a></li>
                        <li><a href="#">Mandatory Disclosure</a></li>
                        <li><a href="#">Affidavit</a></li>
                        <li><a href="#">PAR</a></li>

                    </ul>

                </li>
            </ul>

        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
