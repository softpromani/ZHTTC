@extends('user.layouts.layout')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.0/css/all.min.css">

    <style>
        .accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }

        .accordion-content.active {
            max-height: 2000px;
            transition: max-height 0.5s ease-in;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
    </style>

    <section class="tup">
    <div class="brid" >
        <div class="container">
        <h1>
        Courses<br>
         <span><a href="{{route('index')}}">Home </a>/ Courses</span>
         </h1>
       </div>
     </div>
</section>

    <section class="py-10">
        <div class="container mx-auto px-4">
            <div class="mb-8 text-center">
                <h1 class="text-xl font-semibold text-green-700">Admission Shall Be Made On Merit On The Basis Of Written
                    Test</h1>
                <p class="mt-2 text-gray-700">DURATION: <span class="font-medium">The D.El.Ed. &amp; M.Ed. programmes shall
                        be of a duration of two academic years, which can be completed in a maximum of three years from the
                        date of admission to the programme.</span></p>
            </div>

            <div class="space-y-4">
                {{-- D.El.Ed --}}
                <div class="border rounded-lg overflow-hidden shadow card-hover">
                    <button
                        class="w-full text-left px-6 py-4 bg-gradient-to-r from-indigo-500 to-purple-600 text-white font-semibold flex justify-between items-center accordion-toggle">
                        Diploma in Elementary Education (D.EL.Ed)
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="accordion-content bg-white px-6 py-4">
                        <table class="w-full table-auto border border-gray-200">
                            <thead>
                                <tr class="bg-gray-100 text-left">
                                    <th class="p-2 border">Admission Criteria</th>
                                    <th class="p-2 border">Course Duration</th>
                                    <th class="p-2 border">Number of Seats</th>
                                    <th class="p-2 border">Fees</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="p-2 border">
                                        (A) Candidates with at least 50% marks in higher secondary (+2) or equivalent are
                                        eligible.<br>
                                        (B) 5% marks relaxation for SC/ST.<br>
                                        (C) Age relaxation: 5 years for SC/ST, 2 years for BC/OBC, 3 years for women.<br>
                                        AGE: Min 17 years, Max 34 years.
                                    </td>
                                    <td class="p-2 border">2 years</td>
                                    <td class="p-2 border">50</td>
                                    <td class="p-2 border">As per Bihar Board</td>
                                </tr>
                                <tr>
                                    <td class="p-2 border font-semibold" colspan="3">Download Admission Form</td>
                                    <td class="p-2 border"><a target="_blank"
                                            href="{{ asset('frontend/data/pdf/D.El.Ed.applicationForm.pdf') }}"><i
                                                class="fa fa-file-pdf-o text-red-600"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- B.Ed --}}
                <div class="border rounded-lg overflow-hidden shadow card-hover">
                    <button
                        class="w-full text-left px-6 py-4 bg-gradient-to-r from-indigo-500 to-purple-600 text-white font-semibold flex justify-between items-center accordion-toggle">
                        Bachelor of Education (B.Ed)
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="accordion-content bg-white px-6 py-4">
                        <table class="w-full table-auto border border-gray-200">
                            <thead>
                                <tr class="bg-gray-100 text-left">
                                    <th class="p-2 border">Admission Criteria</th>
                                    <th class="p-2 border">Course Duration</th>
                                    <th class="p-2 border">Number of Seats</th>
                                    <th class="p-2 border">Fees</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="p-2 border">At least 50% marks in Bachelor's or Master's in Sciences/Social
                                        Sciences or equivalent.</td>
                                    <td class="p-2 border">2 years</td>
                                    <td class="p-2 border">250</td>
                                    <td class="p-2 border">As per L.N. Mithila University</td>
                                </tr>
                                <tr>
                                    <td class="p-2 border font-semibold" colspan="3">Download Admission Form</td>
                                    <td class="p-2 border"><a target="_blank"
                                            href="{{ asset('frontend/data/pdf/B.ed application Form.pdf') }}"><i
                                                class="fa fa-file-pdf-o text-red-600"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- M.Ed --}}
                <div class="border rounded-lg overflow-hidden shadow card-hover">
                    <button
                        class="w-full text-left px-6 py-4 bg-gradient-to-r from-indigo-500 to-purple-600 text-white font-semibold flex justify-between items-center accordion-toggle">
                        Master of Education (M.Ed)
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="accordion-content bg-white px-6 py-4">
                        <table class="w-full table-auto border border-gray-200">
                            <thead>
                                <tr class="bg-gray-100 text-left">
                                    <th class="p-2 border">Admission Criteria</th>
                                    <th class="p-2 border">Course Duration</th>
                                    <th class="p-2 border">Number of Seats</th>
                                    <th class="p-2 border">Fees</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="p-2 border">Minimum 50% marks in any of the following: B.Ed., B.A.B.Ed.,
                                        B.Sc. B.Ed., B.El.Ed., or D.El.Ed. with UG degree.</td>
                                    <td class="p-2 border">2 years</td>
                                    <td class="p-2 border">50</td>
                                    <td class="p-2 border">As per L.N. Mithila University</td>
                                </tr>
                                <tr>
                                    <td class="p-2 border font-semibold" colspan="3">Download Admission Form</td>
                                    <td class="p-2 border"><a target="_blank"
                                            href="{{ asset('frontend/data/pdf/M.ed application Form.pdf') }}"><i
                                                class="fa fa-file-pdf-o text-red-600"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- How To Apply --}}
                <div class="border rounded-lg overflow-hidden shadow card-hover">
                    <button
                        class="w-full text-left px-6 py-4 bg-gradient-to-r from-indigo-500 to-purple-600 text-white font-semibold flex justify-between items-center accordion-toggle">
                        How To Apply
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="accordion-content bg-white px-6 py-4">
                        <ul class="list-disc pl-5 text-gray-700 space-y-2">
                            <li>Application for admission into D.El.Ed., B.Ed. & M.Ed. should be made on the prescribed form
                                available from the college office upon payment.</li>
                            <li>Applications submitted after the deadline or incomplete will be rejected.</li>
                        </ul>
                    </div>
                </div>

                {{-- Enclosures --}}
                <div class="border rounded-lg overflow-hidden shadow card-hover">
                    <button
                        class="w-full text-left px-6 py-4 bg-gradient-to-r from-indigo-500 to-purple-600 text-white font-semibold flex justify-between items-center accordion-toggle">
                        Enclosures with the Application
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="accordion-content bg-white px-6 py-4">
                        <ul class="list-disc pl-5 text-gray-700 space-y-2">
                            <li>Attested copy of Matriculation certificate showing Date of Birth</li>
                            <li>Attested copies of all mark sheets</li>
                            <li>Attested copy of S.L.C./C.L.C./D.L.C.</li>
                            <li>Attested copies of any other achievements</li>
                            <li>Attested copy of Aadhar Card</li>
                        </ul>
                    </div>
                </div>
            </div>

        <a href="{{ asset('frontend/data/pdf/Application-form.pdf') }}" class="btn btn-primary mt-5">Download Application Form</a>

        </div>

    </section>

    <script>
        document.querySelectorAll('.accordion-toggle').forEach(button => {
            button.addEventListener('click', () => {
                const content = button.nextElementSibling;

                content.classList.toggle('active');

                const icon = button.querySelector('i');
                icon.classList.toggle('fa-chevron-down');
                icon.classList.toggle('fa-chevron-up');
            });
        });
    </script>
@endsection
