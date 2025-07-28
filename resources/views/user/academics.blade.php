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

        .session-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }

        .session-content.active {
            max-height: 1000px;
            transition: max-height 0.4s ease-in;
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
    </head>

    <section class="tup">
        <div class="brid">
            <div class="container">
                <h1>
                    Academics<br>
                    <span><a href="{{ route('index') }}">Home </a>/ Academics</span>
                </h1>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-12">
        <!-- Staff Information Section -->
        <section class="mb-12">
            <div class="bg-white rounded-xl shadow-lg p-8 card-hover">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                    <i class="fas fa-users text-blue-600 mr-3"></i>
                    Teaching & Non-Teaching Staff
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full table-auto">
                        <thead class="bg-blue-50">
                            <tr>
                                <th class="px-6 py-4 text-left text-gray-700 font-semibold">Staff Category</th>
                                <th class="px-6 py-4 text-center text-gray-700 font-semibold">Download</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-4 text-gray-800">Teaching Staff</td>
                                <td class="px-6 py-4 text-center">
                                    <a href="{{ asset('frontend/data/pdf/List of the Teaching Staff.pdf') }}" target="_blank"
                                        class="inline-flex items-center px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-colors">
                                        <i class="fas fa-file-pdf mr-2"></i>
                                        PDF
                                    </a>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-4 text-gray-800">Non-Teaching Staff</td>
                                <td class="px-6 py-4 text-center">
                                    <a href="{{ asset('frontend/data/pdf/List of Non Teaching Staff.pdf') }}" target="_blank"
                                        class="inline-flex items-center px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-colors">
                                        <i class="fas fa-file-pdf mr-2"></i>
                                        PDF
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- Course Programs Section -->
        <section class="space-y-8">
            <!-- D.EL.Ed Program -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                <div class="bg-gradient-to-r from-green-500 to-green-600" style="height: 50px;">
                    <button onclick="toggleAccordion('deled')"
                        class="w-full text-left flex items-center justify-between text-white">
                        <h2 class="text-2xl font-bold flex items-center">
                            <i class="fas fa-graduation-cap mr-3"></i>
                            Diploma in Elementary Education (D.EL.Ed.)
                        </h2>
                        <i class="fas fa-chevron-down transition-transform duration-300" id="deled-icon"></i>
                    </button>
                </div>
                <div id="deled-content" class="accordion-content p-6">
                    <div class="space-y-6">
                        <!-- 2016-2018 Session -->
                        <div class="border border-gray-200 rounded-lg overflow-hidden">
                            <button onclick="toggleSession('deled-2016')"
                                class="w-full bg-gray-50 p-4 text-left flex items-center justify-between hover:bg-gray-100 transition-colors">
                                <span class="font-semibold text-gray-800">2016 - 2018 Session</span>
                                <i class="fas fa-chevron-right transition-transform duration-300" id="deled-2016-icon"></i>
                            </button>
                            <div id="deled-2016-content" class="session-content">
                                <div class="p-4 bg-white">
                                    <div class="overflow-x-auto">
                                        <table class="w-full table-auto">
                                            <thead class="bg-green-50">
                                                <tr>
                                                    <th class="px-4 py-3 text-left text-gray-700 font-semibold">Document
                                                    </th>
                                                    <th class="px-4 py-3 text-center text-gray-700 font-semibold">Download
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="divide-y divide-gray-200">
                                                <tr class="hover:bg-gray-50">
                                                    <td class="px-4 py-3">Syllabus 2016</td>
                                                    <td class="px-4 py-3 text-center">
                                                        <a href="{{ asset('frontend/data/pdf/D.El.Ed_Syllabus.pdf') }}" target="_blank"
                                                            class="text-red-600 hover:text-red-800">
                                                            <i class="fas fa-file-pdf text-xl"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="hover:bg-gray-50">
                                                    <td class="px-4 py-3">Lesson Plan</td>
                                                    <td class="px-4 py-3 text-center">
                                                        <a href="#" class="text-red-600 hover:text-red-800">
                                                            <i class="fas fa-file-pdf text-xl"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="hover:bg-gray-50">
                                                    <td class="px-4 py-3">List of Students</td>
                                                    <td class="px-4 py-3 text-center">
                                                        <a href="#" class="text-red-600 hover:text-red-800">
                                                            <i class="fas fa-file-pdf text-xl"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="hover:bg-gray-50">
                                                    <td class="px-4 py-3">Academic Calendar</td>
                                                    <td class="px-4 py-3 text-center">
                                                        <a href="{{ asset('frontend/data/pdf/cademiccalendar.pdf') }}" target="_blank"
                                                            class="text-red-600 hover:text-red-800">
                                                            <i class="fas fa-file-pdf text-xl"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="hover:bg-gray-50">
                                                    <td class="px-4 py-3">Internal Examination Marks</td>
                                                    <td class="px-4 py-3 text-center">
                                                        <a href="#" class="text-red-600 hover:text-red-800">
                                                            <i class="fas fa-file-pdf text-xl"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Additional sessions can be added here following the same pattern -->
                    </div>
                </div>
            </div>

            <!-- B.Ed Program -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                <div class="bg-gradient-to-r from-blue-500 to-blue-600" style="height: 50px;">
                    <button onclick="toggleAccordion('bed')"
                        class="w-full text-left flex items-center justify-between text-white">
                        <h2 class="text-2xl font-bold flex items-center">
                            <i class="fas fa-university mr-3"></i>
                            Bachelor of Education (B.Ed.)
                        </h2>
                        <i class="fas fa-chevron-down transition-transform duration-300" id="bed-icon"></i>
                    </button>
                </div>
                <div id="bed-content" class="accordion-content p-6">
                    <div class="space-y-6">
                        <!-- 2016-2018 Session -->
                        <div class="border border-gray-200 rounded-lg overflow-hidden">
                            <button onclick="toggleSession('bed-2016')"
                                class="w-full bg-gray-50 p-4 text-left flex items-center justify-between hover:bg-gray-100 transition-colors">
                                <span class="font-semibold text-gray-800">2016 - 2018 Session</span>
                                <i class="fas fa-chevron-right transition-transform duration-300" id="bed-2016-icon"></i>
                            </button>
                            <div id="bed-2016-content" class="session-content">
                                <div class="p-4 bg-white">
                                    <div class="overflow-x-auto">
                                        <table class="w-full table-auto">
                                            <thead class="bg-blue-50">
                                                <tr>
                                                    <th class="px-4 py-3 text-left text-gray-700 font-semibold">Document
                                                    </th>
                                                    <th class="px-4 py-3 text-center text-gray-700 font-semibold">Download
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="divide-y divide-gray-200">
                                                <tr class="hover:bg-gray-50">
                                                    <td class="px-4 py-3">Syllabus 2016</td>
                                                    <td class="px-4 py-3 text-center">
                                                        <a href="{{ asset('frontend/data/pdf/B.Ed_Syllabus.pdf') }}" target="_blank"
                                                            class="text-red-600 hover:text-red-800">
                                                            <i class="fas fa-file-pdf text-xl"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="hover:bg-gray-50">
                                                    <td class="px-4 py-3">Student Email List</td>
                                                    <td class="px-4 py-3 text-center">
                                                        <a href="#" class="text-red-600 hover:text-red-800">
                                                            <i class="fas fa-file-pdf text-xl"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="hover:bg-gray-50">
                                                    <td class="px-4 py-3">Academic Calendar</td>
                                                    <td class="px-4 py-3 text-center">
                                                        <a href="{{ asset('frontend/data/pdf/cademiccalendar.pdf') }}" target="_blank"
                                                            class="text-red-600 hover:text-red-800">
                                                            <i class="fas fa-file-pdf text-xl"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="hover:bg-gray-50">
                                                    <td class="px-4 py-3">Pot List</td>
                                                    <td class="px-4 py-3 text-center">
                                                        <a href="{{ asset('frontend/data/pdf/Session 2016-18_2017-19.pdf') }}" target="_blank"
                                                            class="text-red-600 hover:text-red-800">
                                                            <i class="fas fa-file-pdf text-xl"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 2017-2019 Session -->
                        <div class="border border-gray-200 rounded-lg overflow-hidden">
                            <button onclick="toggleSession('bed-2017')"
                                class="w-full bg-gray-50 p-4 text-left flex items-center justify-between hover:bg-gray-100 transition-colors">
                                <span class="font-semibold text-gray-800">2017 - 2019 Session</span>
                                <i class="fas fa-chevron-right transition-transform duration-300" id="bed-2017-icon"></i>
                            </button>
                            <div id="bed-2017-content" class="session-content">
                                <div class="p-4 bg-white">
                                    <div class="overflow-x-auto">
                                        <table class="w-full table-auto">
                                            <thead class="bg-blue-50">
                                                <tr>
                                                    <th class="px-4 py-3 text-left text-gray-700 font-semibold">Document
                                                    </th>
                                                    <th class="px-4 py-3 text-center text-gray-700 font-semibold">Download
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="divide-y divide-gray-200">
                                                <tr class="hover:bg-gray-50">
                                                    <td class="px-4 py-3">Student Email List</td>
                                                    <td class="px-4 py-3 text-center">
                                                        <a href="{{ asset('frontend/data/pdf/email_id_b.ed_session_2017-19.pdf') }}" target="_blank"
                                                            class="text-red-600 hover:text-red-800">
                                                            <i class="fas fa-file-pdf text-xl"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="hover:bg-gray-50">
                                                    <td class="px-4 py-3">T.R./Cross List (Part 1)</td>
                                                    <td class="px-4 py-3 text-center">
                                                        <a href="{{ asset('frontend/data/pdf/B. Ed. Part 1 Session 2017 - 2019.pdf') }}"
                                                            target="_blank" class="text-red-600 hover:text-red-800">
                                                            <i class="fas fa-file-pdf text-xl"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="hover:bg-gray-50">
                                                    <td class="px-4 py-3">T.R./Cross List (Part 2)</td>
                                                    <td class="px-4 py-3 text-center">
                                                        <a href="{{ asset('frontend/data/pdf/B. Ed. Part 2 Session 2017 - 2019.pdf') }}"
                                                            target="_blank" class="text-red-600 hover:text-red-800">
                                                            <i class="fas fa-file-pdf text-xl"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="hover:bg-gray-50">
                                                    <td class="px-4 py-3">Internal Examination Marks</td>
                                                    <td class="px-4 py-3 text-center">
                                                        <a href="{{ asset('frontend/data/pdf/17-19.pdf') }}" target="_blank"
                                                            class="text-red-600 hover:text-red-800">
                                                            <i class="fas fa-file-pdf text-xl"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="hover:bg-gray-50">
                                                    <td class="px-4 py-3">Scholarship Details</td>
                                                    <td class="px-4 py-3 text-center">
                                                        <a href="{{ asset('frontend/data/pdf/NSP-2017-19.pdf') }}" target="_blank"
                                                            class="text-red-600 hover:text-red-800">
                                                            <i class="fas fa-file-pdf text-xl"></i>
                                                        </a>
                                                    </td>
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

            <!-- M.Ed Program -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                <div class="bg-gradient-to-r from-purple-500 to-purple-600" style="height: 50px;">
                    <button onclick="toggleAccordion('med')"
                        class="w-full text-left flex items-center justify-between text-white">
                        <h2 class="text-2xl font-bold flex items-center">
                            <i class="fas fa-user-graduate mr-3"></i>
                            Master of Education (M.Ed.)
                        </h2>
                        <i class="fas fa-chevron-down transition-transform duration-300" id="med-icon"></i>
                    </button>
                </div>
                <div id="med-content" class="accordion-content p-6">
                    <div class="space-y-6">
                        <!-- 2017-2019 Session -->
                        <div class="border border-gray-200 rounded-lg overflow-hidden">
                            <button onclick="toggleSession('med-2017')"
                                class="w-full bg-gray-50 p-4 text-left flex items-center justify-between hover:bg-gray-100 transition-colors">
                                <span class="font-semibold text-gray-800">2017 - 2019 Session</span>
                                <i class="fas fa-chevron-right transition-transform duration-300" id="med-2017-icon"></i>
                            </button>
                            <div id="med-2017-content" class="session-content">
                                <div class="p-4 bg-white">
                                    <div class="overflow-x-auto">
                                        <table class="w-full table-auto">
                                            <thead class="bg-purple-50">
                                                <tr>
                                                    <th class="px-4 py-3 text-left text-gray-700 font-semibold">Document
                                                    </th>
                                                    <th class="px-4 py-3 text-center text-gray-700 font-semibold">Download
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="divide-y divide-gray-200">
                                                <tr class="hover:bg-gray-50">
                                                    <td class="px-4 py-3">Syllabus 2017</td>
                                                    <td class="px-4 py-3 text-center">
                                                        <a href="{{ asset('frontend/data/pdf/M.Ed Syllabus.pdf') }}" target="_blank"
                                                            class="text-red-600 hover:text-red-800">
                                                            <i class="fas fa-file-pdf text-xl"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="hover:bg-gray-50">
                                                    <td class="px-4 py-3">Student Email List</td>
                                                    <td class="px-4 py-3 text-center">
                                                        <a href="{{ asset('frontend/data/pdf/email_id_m.ed_session_2017-19.pdf') }}" target="_blank"
                                                            class="text-red-600 hover:text-red-800">
                                                            <i class="fas fa-file-pdf text-xl"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="hover:bg-gray-50">
                                                    <td class="px-4 py-3">T.R./Cross List (1st Sem)</td>
                                                    <td class="px-4 py-3 text-center">
                                                        <a href="{{ asset('frontend/data/pdf/m.ed._(2017-19)_1st_sem.pdf') }}" target="_blank"
                                                            class="text-red-600 hover:text-red-800">
                                                            <i class="fas fa-file-pdf text-xl"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="hover:bg-gray-50">
                                                    <td class="px-4 py-3">T.R./Cross List (2nd Sem)</td>
                                                    <td class="px-4 py-3 text-center">
                                                        <a href="{{ asset('frontend/data/pdf/m.ed._(2017-19)_2nd_sem.pdf') }}" target="_blank"
                                                            class="text-red-600 hover:text-red-800">
                                                            <i class="fas fa-file-pdf text-xl"></i>
                                                        </a>
                                                    </td>
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
    </main>

    <script>
        function toggleAccordion(id) {
            const content = document.getElementById(id + '-content');
            const icon = document.getElementById(id + '-icon');

            if (content.classList.contains('active')) {
                content.classList.remove('active');
                icon.style.transform = 'rotate(0deg)';
            } else {
                // Close all other accordions
                document.querySelectorAll('.accordion-content').forEach(el => {
                    el.classList.remove('active');
                });
                document.querySelectorAll('[id$="-icon"]').forEach(el => {
                    if (el.id.includes('-icon') && !el.id.includes('session')) {
                        el.style.transform = 'rotate(0deg)';
                    }
                });

                content.classList.add('active');
                icon.style.transform = 'rotate(180deg)';
            }
        }

        function toggleSession(id) {
            const content = document.getElementById(id + '-content');
            const icon = document.getElementById(id + '-icon');

            if (content.classList.contains('active')) {
                content.classList.remove('active');
                icon.style.transform = 'rotate(0deg)';
            } else {
                content.classList.add('active');
                icon.style.transform = 'rotate(90deg)';
            }
        }

        // Initialize the page
        document.addEventListener('DOMContentLoaded', function() {
            // You can auto-open the first accordion if desired
            // toggleAccordion('deled');
        });
    </script>
@endsection
