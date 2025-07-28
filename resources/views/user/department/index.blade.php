@extends('user.layouts.layout')
@section('content')
    <style>
        /* Department Section - Enhanced */
        .sectop {
            padding: 80px 0;
        }

        .section-title {
            position: relative;
            margin-bottom: 45px;
            font-weight: 700;
            color: var(--text-dark);
            font-size: 2.25rem;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -12px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: var(--primary);
            border-radius: 2px;
        }

        /* Department Cards - Enhanced */
        .department-card {
            border: none;
            border-radius: 12px;
            overflow: hidden;
            transition: transform 0.4s ease, box-shadow 0.4s ease;
            height: 100%;
            background-color: var(--bg-white);
        }

        .department-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.12);
        }

        .card-img-top-container {
            position: relative;
            overflow: hidden;
            height: 200px;
        }

        .card-img-top {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .department-card:hover .card-img-top {
            transform: scale(1.08);
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.6) 0%, rgba(0, 0, 0, 0) 50%);
        }

        .department-card .card-body {
            padding: 25px;
        }

        .department-card .card-title {
            font-weight: 600;
            font-size: 1.25rem;
            color: var(--primary);
            margin-bottom: 15px;
        }

        .department-card .card-text {
            color: var(--text-light);
            font-size: 0.95rem;
            line-height: 1.6;
        }

        .department-card .card-footer {
            border-top: 1px solid rgba(0, 0, 0, 0.05);
            padding: 16px 25px;
            background-color: var(--bg-white);
        }

        .badge {
            padding: 6px 12px;
            font-weight: 500;
            border-radius: 20px;
            font-size: 0.75rem;
        }

        .bg-success {
            background-color: #28a745 !important;
        }

        .bg-secondary {
            background-color: #6c757d !important;
        }

        .btn-outline-primary {
            color: var(--primary);
            border-color: var(--primary);
            border-radius: 6px;
            font-weight: 500;
            padding: 6px 16px;
            transition: var(--transition);
        }

        .btn-outline-primary:hover {
            background-color: var(--primary);
            color: white;
        }

        /* Animation Keyframes */
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in-up {
            animation: fadeInUp 0.8s ease forwards;
        }

        /* Empty State Styling */
        .empty-state {
            padding: 60px 20px;
            text-align: center;
            background-color: var(--bg-white);
            border-radius: 12px;
            box-shadow: var(--shadow);
        }

        .empty-state i {
            font-size: 48px;
            color: var(--text-light);
            margin-bottom: 20px;
        }

        /* Responsive Adjustments */
        @media (max-width: 992px) {
            .brid h1 {
                font-size: 36px;
            }

            .sectop {
                padding: 60px 0;
            }
        }

        @media (max-width: 768px) {
            .brid h1 {
                font-size: 30px;
            }

            .brid {
                padding: 70px 0;
            }

            .sectop {
                padding: 50px 0;
            }

            .section-title {
                font-size: 1.75rem;
            }
        }

        @media (max-width: 576px) {
            .brid h1 {
                font-size: 26px;
            }

            .sectop {
                padding: 40px 0;
            }
        }
    </style>
    <!-- Banner Section -->
    <section class="tup">
        <div class="brid">
            <div class="container">
                <h1>
                    Department<br>
                    <span><a href="{{ route('index') }}">Home </a> / Our Department</span>
                </h1>
            </div>
        </div>
    </section>

    <!-- Departments Section -->
    <section id="aboutus" class="about-us sectop">
        <!-- Departments Section - Enhanced -->
        <section id="aboutus" class="about-us sectop">
            <div class="container">


                <div class="row" id="department-container">
                    <!-- Sample Department Cards - These will be dynamically generated in the real implementation -->
                    <div class="col-lg-4 col-md-6 mb-4 fade-in-up" style="animation-delay: 0.1s;">
                        <div class="card h-100 department-card">
                            <div class="card-img-top-container">
                                <img src="https://images.unsplash.com/photo-1532094349884-543bc11b234d?w=600&auto=format"
                                    class="card-img-top" alt="Computer Science">
                                <div class="overlay"></div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Computer Science</h5>
                                <p class="card-text">Exploring the foundations of computational systems, algorithms, and
                                    software development with a focus on innovative technologies.</p>
                            </div>
                            <div class="card-footer bg-white d-flex justify-content-between align-items-center">
                                <span class="badge bg-success">Active</span>
                                <a href="#" class="btn btn-sm btn-outline-primary">Learn More</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </section>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Function to check if element is in viewport
            function isInViewport(element) {
                const rect = element.getBoundingClientRect();
                return (
                    rect.top <= (window.innerHeight || document.documentElement.clientHeight) &&
                    rect.bottom >= 0
                );
            }

            // Animate elements when they come into view
            function animateOnScroll() {
                const elements = document.querySelectorAll('.fade-in-up');

                elements.forEach(element => {
                    if (isInViewport(element) && !element.classList.contains('animated')) {
                        element.style.opacity = '1';
                        element.classList.add('animated');
                    }
                });
            }

            // Set initial state for animations
            const animatedElements = document.querySelectorAll('.fade-in-up');
            animatedElements.forEach(el => {
                el.style.opacity = '0';
            });

            // Run animation check on load and scroll
            animateOnScroll();
            window.addEventListener('scroll', animateOnScroll);

            // For demonstration - how to dynamically toggle between data and empty state
            function toggleEmptyState(showEmpty) {
                const departmentContainer = document.getElementById('department-container');
                const emptyState = document.querySelector('.empty-state');

                if (emptyState) {
                    if (showEmpty) {
                        // Hide all department cards
                        const cards = departmentContainer.querySelectorAll('.col-lg-4');
                        cards.forEach(card => card.style.display = 'none');
                        // Show empty state
                        emptyState.style.display = 'block';
                    } else {
                        // Show all department cards
                        const cards = departmentContainer.querySelectorAll('.col-lg-4');
                        cards.forEach(card => card.style.display = 'block');
                        // Hide empty state
                        emptyState.style.display = 'none';
                    }
                }
            }

        });
    </script>
@endsection
