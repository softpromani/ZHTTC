@extends('user.layouts.layout')
@section('content')
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }

        /* .brid h1 {
            font-size: 2rem;
            color: #2c3e50;
            margin-top: 20px;
            font-weight: 600;
        }

        .brid span a {
            color: #3498db;
            text-decoration: none;
            font-size: 0.95rem;
        } */

        .sectop h3 {
            font-weight: 700;
            margin-bottom: 20px;
            color: #2c3e50;
        }

        details summary {
            font-size: 1.2rem;
            font-weight: 600;
            cursor: pointer;
            background-color: #f1f1f1;
            padding: 10px 15px;
            border-radius: 6px;
            margin-bottom: 15px;
        }

        .content-part table {
            width: 100%;
            border-collapse: collapse;
            background-color: #ffffff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            border-radius: 8px;
            overflow: hidden;
        }

        .content-part th {
            background-color: #2c3e50;
            color: #ffffff;
            padding: 12px 16px;
            text-align: left;
        }

        .content-part td {
            padding: 12px 16px;
            border-bottom: 1px solid #eaeaea;
            color: #333;
        }

        .content-part tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .content-part tr:hover {
            background-color: #eef6ff;
        }

        .content-part a {
            color: #e74c3c;
            font-size: 1.2rem;
            transition: 0.3s;
        }

        .content-part a:hover {
            color: #c0392b;
        }

        @media (max-width: 768px) {
            .brid h1 {
                font-size: 1.5rem;
                text-align: center;
            }

            .sectop h3 {
                text-align: center;
            }

            .content-part table,
            .content-part thead,
            .content-part tbody,
            .content-part th,
            .content-part td,
            .content-part tr {
                display: block;
            }

            .content-part tr {
                margin-bottom: 15px;
                background: #fff;
                padding: 10px;
                border-radius: 8px;
            }

            .content-part td {
                padding-left: 50%;
                position: relative;
            }

            .content-part td::before {
                content: attr(data-label);
                position: absolute;
                left: 10px;
                width: 45%;
                font-weight: bold;
                color: #2c3e50;
            }

            .content-part th {
                display: none;
            }
        }
    </style>

    <section class="tup">
        <div class="brid">
            <div class="container">
                <h1>
                    D.El.Ed<br>
                    <span><a href="{{ route('index') }}">Home </a> / D.El.Ed</span>
                </h1>
            </div>
        </div>
    </section>

    <section class="sectop py-4">
        <div class="container mt-5">
            <h3>Diploma in Elementary Education (D.EL.Ed.) Student Details</h3>
            <div class="accordion text-left" id="accordionExample">
                <div class="card">
                    <div id="collapsethree" class="collapse show" aria-labelledby="headingthree"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            <details open="">
                                <summary>2016 - 2018 Session</summary>
                                <div>
                                    <div class="d-flex">
                                        <div class="col-lg-12">
                                            <div class="content-part">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Downloads</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td data-label="Name">Syllabus 2016</td>
                                                            <td data-label="Downloads">
                                                                <a target="_blank" href="pdf/D.El.Ed_Syllabus.pdf">
                                                                    <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td data-label="Name">Lession Plan</td>
                                                            <td data-label="Downloads">
                                                                <a target="_blank">
                                                                    <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td data-label="Name">List Of Student</td>
                                                            <td data-label="Downloads">
                                                                <a target="_blank">
                                                                    <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td data-label="Name">T.R./Cross List</td>
                                                            <td data-label="Downloads">
                                                                <a target="_blank" href="#">
                                                                    <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td data-label="Name">Academic Calendar</td>
                                                            <td data-label="Downloads">
                                                                <a target="_blank" href="{{ asset('frontend/data/pdf/cademiccalendar.pdf') }}">
                                                                    <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td data-label="Name">Internal Examination Marks</td>
                                                            <td data-label="Downloads">
                                                                <a target="_blank">
                                                                    <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td data-label="Name">Value Add Course Certificate</td>
                                                            <td data-label="Downloads">
                                                                <a target="_blank">
                                                                    <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </details>

                            <details>
                                <summary>2017 - 2019 Session</summary>
                                <div>
                                    <ul>
                                        <div class="d-flex">
                                            <div class="col-lg-12">
                                                <div class="content-part">
                                                    <table class="table table-bordered">
                                                        <tbody>
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Downloads</th>
                                                            </tr>
                                                            <tr>
                                                                <td>Syllabus 2017</td>
                                                                <td><a target="_blank"
                                                                        href="{{ asset('frontend/data/pdf/D.El.Ed_Syllabus.pdf') }}"><span><i
                                                                                class="fa fa-file-pdf-o"
                                                                                aria-hidden="true"></i></span></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lession Plan</td>
                                                                <td><a target="_blank"><span><i class="fa fa-file-pdf-o"
                                                                                aria-hidden="true"></i></span></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>List Of Student</td>
                                                                <td><a target="_blank"><span><i class="fa fa-file-pdf-o"
                                                                                aria-hidden="true"></i></span></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>T.R./Cross List</td>
                                                                <td><a target="_blank" href="#"><span><i
                                                                                class="fa fa-file-pdf-o"
                                                                                aria-hidden="true"></i></span></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Acadamic Calendar</td>
                                                                <td><a target="_blank"
                                                                        href="{{ asset('frontend/data/pdf/cademiccalendar.pdf') }}"><span><i
                                                                                class="fa fa-file-pdf-o"
                                                                                aria-hidden="true"></i></span></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Internal Examination Marks</td>
                                                                <td><a target="_blank"><span><i class="fa fa-file-pdf-o"
                                                                                aria-hidden="true"></i></span></a>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>Value Add Course Certificate</td>
                                                                <td><a target="_blank"><span><i class="fa fa-file-pdf-o"
                                                                                aria-hidden="true"></i></span></a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </ul>

                                </div>
                            </details>

                            <details>
                                <summary>2018 - 2020 Session</summary>
                                <div>
                                    <ul>
                                        <div class="d-flex">
                                            <div class="col-lg-12">
                                                <div class="content-part">
                                                    <table class="table table-bordered">
                                                        <tbody>
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Downloads</th>
                                                            </tr>
                                                            <tr>
                                                                <td>Syllabus 2018</td>
                                                                <td><a target="_blank"
                                                                        href="{{ asset('frontend/data/pdf/D.El.Ed_Syllabus.pdf') }}"><span><i
                                                                                class="fa fa-file-pdf-o"
                                                                                aria-hidden="true"></i></span></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lession Plan</td>
                                                                <td><a target="_blank"><span><i class="fa fa-file-pdf-o"
                                                                                aria-hidden="true"></i></span></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>List Of Student</td>
                                                                <td><a target="_blank"><span><i class="fa fa-file-pdf-o"
                                                                                aria-hidden="true"></i></span></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>T.R./Cross List</td>
                                                                <td><a target="_blank" href="#"><span><i
                                                                                class="fa fa-file-pdf-o"
                                                                                aria-hidden="true"></i></span></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Acadamic Calendar</td>
                                                                <td><a target="_blank"
                                                                        href="{{ asset('frontend/data/pdf/cademiccalendar.pdf') }}"><span><i
                                                                                class="fa fa-file-pdf-o"
                                                                                aria-hidden="true"></i></span></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Internal Examination Marks</td>
                                                                <td><a target="_blank"><span><i class="fa fa-file-pdf-o"
                                                                                aria-hidden="true"></i></span></a>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>Value Add Course Certificate</td>
                                                                <td><a target="_blank"><span><i class="fa fa-file-pdf-o"
                                                                                aria-hidden="true"></i></span></a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </ul>

                                </div>
                            </details>

                            <details>
                                <summary>2019 - 2021 Session</summary>
                                <div>
                                    <ul>
                                        <div class="d-flex">
                                            <div class="col-lg-12">
                                                <div class="content-part">
                                                    <table class="table table-bordered">
                                                        <tbody>
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Downloads</th>
                                                            </tr>
                                                            <tr>
                                                                <td>Syllabus 2019</td>
                                                                <td><a target="_blank"
                                                                        href="{{ asset('frontend/data/pdf/D.El.Ed_Syllabus.pdf') }}"><span><i
                                                                                class="fa fa-file-pdf-o"
                                                                                aria-hidden="true"></i></span></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lession Plan</td>
                                                                <td><a target="_blank"><span><i class="fa fa-file-pdf-o"
                                                                                aria-hidden="true"></i></span></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>List Of Student'S E-mail</td>
                                                                <td><a target="_blank"><span><i class="fa fa-file-pdf-o"
                                                                                aria-hidden="true"></i></span></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>T.R./Cross List</td>
                                                                <td><a target="_blank" href="#"><span><i
                                                                                class="fa fa-file-pdf-o"
                                                                                aria-hidden="true"></i></span></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Acadamic Calendar</td>
                                                                <td><a target="_blank"
                                                                        href="{{ asset('frontend/data/pdf/cademiccalendar.pdf') }}"><span><i
                                                                                class="fa fa-file-pdf-o"
                                                                                aria-hidden="true"></i></span></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Internal Examination Marks</td>
                                                                <td><a target="_blank"><span><i class="fa fa-file-pdf-o"
                                                                                aria-hidden="true"></i></span></a>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>Value Add Course Certificate</td>
                                                                <td><a target="_blank"><span><i class="fa fa-file-pdf-o"
                                                                                aria-hidden="true"></i></span></a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </ul>

                                </div>
                            </details>

                            <details>
                                <summary>2020 - 2022 Session</summary>
                                <div>
                                    <ul>
                                        <div class="d-flex">
                                            <div class="col-lg-12">
                                                <div class="content-part">
                                                    <table class="table table-bordered">
                                                        <tbody>
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Downloads</th>
                                                            </tr>
                                                            <tr>
                                                                <td>Syllabus 2020</td>
                                                                <td><a target="_blank"
                                                                        href="{{ asset('frontend/data/pdf/D.El.Ed_Syllabus.pdf') }}"><span><i
                                                                                class="fa fa-file-pdf-o"
                                                                                aria-hidden="true"></i></span></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lession Plan</td>
                                                                <td><a target="_blank"><span><i class="fa fa-file-pdf-o"
                                                                                aria-hidden="true"></i></span></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>List Of Student</td>
                                                                <td><a target="_blank"><span><i class="fa fa-file-pdf-o"
                                                                                aria-hidden="true"></i></span></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>T.R./Cross List</td>
                                                                <td><a target="_blank" href="#"><span><i
                                                                                class="fa fa-file-pdf-o"
                                                                                aria-hidden="true"></i></span></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Acadamic Calendar</td>
                                                                <td><a target="_blank"
                                                                        href="{{ asset('frontend/data/pdf/cademiccalendar.pdf') }}"><span><i
                                                                                class="fa fa-file-pdf-o"
                                                                                aria-hidden="true"></i></span></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Internal Examination Marks</td>
                                                                <td><a target="_blank"><span><i class="fa fa-file-pdf-o"
                                                                                aria-hidden="true"></i></span></a>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>Value Add Course Certificate</td>
                                                                <td><a target="_blank"><span><i class="fa fa-file-pdf-o"
                                                                                aria-hidden="true"></i></span></a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </ul>

                                </div>
                            </details>

                            <details>
                                <summary>2021 - 2023 Session</summary>
                                <div>
                                    <ul>
                                        <div class="d-flex">
                                            <div class="col-lg-12">
                                                <div class="content-part">
                                                    <table class="table table-bordered">
                                                        <tbody>
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Downloads</th>
                                                            </tr>
                                                            <tr>
                                                                <td>Syllabus 2021</td>
                                                                <td><a target="_blank"
                                                                        href="{{ asset('frontend/data/pdf/D.El.Ed_Syllabus.pdf') }}"><span><i
                                                                                class="fa fa-file-pdf-o"
                                                                                aria-hidden="true"></i></span></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lession Plan</td>
                                                                <td><a target="_blank"><span><i class="fa fa-file-pdf-o"
                                                                                aria-hidden="true"></i></span></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>List Of Student</td>
                                                                <td><a target="_blank"><span><i class="fa fa-file-pdf-o"
                                                                                aria-hidden="true"></i></span></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>T.R./Cross List</td>
                                                                <td><a target="_blank" href="#"><span><i
                                                                                class="fa fa-file-pdf-o"
                                                                                aria-hidden="true"></i></span></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Acadamic Calendar</td>
                                                                <td><a target="_blank"
                                                                        href="{{ asset('frontend/data/pdf/cademiccalendar.pdf') }}"><span><i
                                                                                class="fa fa-file-pdf-o"
                                                                                aria-hidden="true"></i></span></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Internal Examination Marks</td>
                                                                <td><a target="_blank"><span><i class="fa fa-file-pdf-o"
                                                                                aria-hidden="true"></i></span></a>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>Value Add Course Certificate</td>
                                                                <td><a target="_blank"><span><i class="fa fa-file-pdf-o"
                                                                                aria-hidden="true"></i></span></a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </ul>

                                </div>
                            </details>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
