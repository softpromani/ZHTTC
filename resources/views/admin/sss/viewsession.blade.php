@extends('admin.includes.layout', ['breadcrumb_title' => 'SSS-View'])
@section('title', 'SSS-View')
@section('main-content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 "><h4> College Name:- </h4>{{ $view->college_name??'' }}</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <th></th>
                        </tr>
                        <tr>
                            <th>Please confirm this is the first and only time you answer this survey:-</th>
                            <td>{{ $view->filled_form ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th>Age:-</th>
                            <td>{{ $view->age ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th>College Name:-</th>
                            <td>{{ $view->college_name ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th>Email:-</th>
                            <td>{{ $view->email ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th>Phone:-</th>
                            <td>{{ $view->phone ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th>Gender:-</th>
                            <td>{{ $view->gender ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th>What degree program are you pursuing now?</th>
                            <td>{{ $view->degree ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th>What subject area are you currently pursuing?</th>
                            <td>{{ $view->stream ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th> How much of the syllabus was covered in the class?</th>
                            <td>{{ $view->syllabus ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th>How well did the teachers prepare for the classes?</th>
                            <td>{{ $view->prepare ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th>How well were the teachers able to communicate?</th>
                            <td>{{ $view->communicate ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th>The teacher’s approach to teaching can best be described as</th>
                            <td>{{ $view->approach ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th>Fairness of the internal evaluation process by the teachers.</th>
                            <td>{{ $view->internal ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th>Was your performance in assignments discussed with you?</th>
                            <td>{{ $view->performance ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th>The institute takes active interest in promoting internship, student exchange, field visit opportunities for students.</th>
                            <td>{{ $view->internship ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th>The teaching and mentoring process in your institution facilitates you in cognitive, social and emotional growth.</th>
                            <td>{{ $view->mentoring ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th>The institution provides multiple opportunities to learn and grow.</th>
                            <td>{{ $view->opportunity ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th>Teachers inform you about your expected competencies, course outcomes and programme outcomes.</th>
                            <td>{{ $view->outcomes ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th>Your mentor does a necessary follow-up with an assigned task to you.</th>
                            <td>{{ $view->followup ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th>The teachers illustrate the concepts through examples and applications.</th>
                            <td>{{ $view->illustrate ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th>The teachers identify your strengths and encourage you with providing right level of challenges.</th>
                            <td>{{ $view->identity ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th>Teachers are able to identify your weaknesses and help you to overcome them.</th>
                            <td>{{ $view->able ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th>The institution makes effort to engage students in the monitoring, review and continuous quality improvement of the teaching learning process.</th>
                            <td>{{ $view->effort ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th>The institute/ teachers use student centric methods, such as experiential learning, participative learning and problem solving methodologies for enhancing learning experiences.</th>
                            <td>{{ $view->method ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th> Teachers encourage you to participate in extracurricular activities.</th>
                            <td>{{ $view->encourage ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th>Efforts are made by the institute/ teachers to inculcate soft skills, life skills and employability skills to make you ready for the world of work.</th>
                            <td>{{ $view->inculcate ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th>What percentage of teachers use ICT tools such as LCD projector, Multimedia, etc. while teaching.</th>
                            <td>{{ $view->ict_percentage ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th>The overall quality of teaching-learning process in your institute is very good.:-</th>
                            <td>{{ $view->quality ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th>Give three observation / suggestions to improve the overall teaching – learning experience in your institution.:-</th>
                        </tr>
                        <tr>
                            <th>a)Suggestion :-</th>
                            <td>{{ $view->suggestion1 ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th>b)Suggestion  :-</th>
                            <td>{{ $view->suggestion2 ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th>c)Suggestion :-</th>
                            <td>{{ $view->suggestion3 ?? 'N/A' }}</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
