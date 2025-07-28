<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dr. Zakir Hussain Teachers' Training College - Darbhanga</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.0/css/all.min.css">

    <!-- AOS Animation Library -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-color: #e74c3c;
            --secondary-color: #c0392b;
            --dark-color: #2c3e50;
            --light-color: #f8f9fa;
            --accent-color: #3498db;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            color: #333;
            overflow-x: hidden;
        }

        /* Typewriter Animation */
        .typewriter {
            display: inline-block;
            overflow: hidden;
            border-right: .15em solid var(--primary-color);
            white-space: nowrap;
            margin: 0 auto;
            letter-spacing: .15em;
            animation: typing 3.5s steps(40, end), blink-caret .75s step-end infinite;
            font-weight: bold;
            color: #e74c3c;
        }

        @keyframes typing {
            from { width: 0 }
            to { width: 100% }
        }

        @keyframes blink-caret {
            from, to { border-color: transparent }
            50% { border-color: var(--primary-color) }
        }

        /* Header Styles */
        .navbar {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .navbar-brand img {
            height: 60px;
            transition: transform 0.3s ease;
        }

        .navbar-brand:hover img {
            transform: scale(1.05);
        }

        .navbar-nav .nav-link {
            font-weight: 500;
            color: #333 !important;
            margin: 0 10px;
            position: relative;
            transition: all 0.3s ease;
        }

        .navbar-nav .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 50%;
            background: #e74c3c;
            transition: all 0.3s ease;
        }

        .navbar-nav .nav-link:hover::after {
            width: 100%;
            left: 0;
        }

        /* Hero Section with Carousel */
        .hero-section {
            position: relative;
            height: 100vh;
            overflow: hidden;
        }

        .hero-carousel .carousel-item {
            height: 100vh;
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .hero-carousel .carousel-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        .hero-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            z-index: 2;
            color: white;
            max-width: 800px;
            padding: 0 20px;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .hero-content p {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
        }

        .btn-primary {
            background: var(--primary-color);
            border: none;
            padding: 12px 30px;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn-primary:hover {
            background: var(--secondary-color);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(231, 76, 60, 0.4);
        }

        /* About Section */
        .about-section {
            padding: 100px 0;
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
        }

        .about-content {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .about-content:hover {
            transform: translateY(-5px);
        }

        .about-image {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }

        .about-image img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .about-image:hover img {
            transform: scale(1.05);
        }

        /* Features Section */
        .features-section {
            padding: 100px 0;
            background: white;
        }

        .feature-item {
            text-align: center;
            padding: 40px 20px;
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            margin-bottom: 30px;
            position: relative;
            overflow: hidden;
        }

        .feature-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(231, 76, 60, 0.1), transparent);
            transition: left 0.5s ease;
        }

        .feature-item:hover::before {
            left: 100%;
        }

        .feature-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(231, 76, 60, 0.2);
        }

        .feature-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 2rem;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .feature-icon::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            transition: all 0.3s ease;
            transform: translate(-50%, -50%);
        }

        .feature-item:hover .feature-icon::before {
            width: 100px;
            height: 100px;
        }

        /* Notice and Links Section */
        .notice-links-section {
            padding: 80px 0;
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
        }

        .notice-board {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            padding: 30px;
            height: 480px;
        }

        .notice-list {
            max-height: 300px;
            overflow-y: auto;
        }

        .notice-item {
            padding: 15px;
            border-bottom: 1px solid #eee;
            transition: all 0.3s ease;
        }

        .notice-item:hover {
            background: #f8f9fa;
            transform: translateX(5px);
        }

        .notice-date {
            color: var(--primary-color);
            font-size: 0.9rem;
            font-weight: 600;
        }

        .important-links {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            padding: 30px;
        }

        .link-item {
            display: block;
            padding: 12px 15px;
            color: #333;
            text-decoration: none;
            border-radius: 8px;
            margin-bottom: 10px;
            transition: all 0.3s ease;
            border-left: 4px solid var(--primary-color);
        }

        .link-item:hover {
            background: var(--primary-color);
            color: white;
            transform: translateX(5px);
        }

        /* Faculty Section */
        .faculty-section {
            padding: 100px 0;
            background: white;
        }

        .faculty-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            overflow: hidden;
            transition: all 0.3s ease;
            margin-bottom: 30px;
        }

        .faculty-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .faculty-image {
            height: 250px;
            overflow: hidden;
            position: relative;
        }

        .faculty-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, var(--primary-color), transparent);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .faculty-card:hover .faculty-image::before {
            opacity: 0.3;
        }

        .faculty-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .faculty-card:hover .faculty-image img {
            transform: scale(1.1);
        }

        .faculty-info {
            padding: 20px;
            text-align: center;
        }

        .faculty-name {
            font-size: 1.3rem;
            font-weight: 600;
            color: var(--dark-color);
            margin-bottom: 5px;
        }

        .faculty-designation {
            color: var(--primary-color);
            font-weight: 500;
        }

        /* Statistics Section */
        .stats-section {
            padding: 80px 0;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
        }

        .stat-item {
            text-align: center;
            padding: 20px;
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            display: block;
            margin-bottom: 10px;
        }

        .stat-label {
            font-size: 1.1rem;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Testimonials Section */
        .testimonials-section {
            padding: 100px 0;
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
        }

        .testimonial-card {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            text-align: center;
            margin: 20px;
            transition: transform 0.3s ease;
        }

        .testimonial-card:hover {
            transform: translateY(-5px);
        }

        .testimonial-image {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin: 0 auto 20px;
            overflow: hidden;
            border: 4px solid var(--primary-color);
        }

        .testimonial-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Events Section */
        .events-section {
            padding: 100px 0;
            background: white;
        }

        .event-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            overflow: hidden;
            transition: all 0.3s ease;
            margin-bottom: 30px;
        }

        .event-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .event-image {
            height: 200px;
            overflow: hidden;
        }

        .event-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .event-card:hover .event-image img {
            transform: scale(1.1);
        }

        .event-info {
            padding: 20px;
        }

        .event-title {
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--dark-color);
            margin-bottom: 10px;
        }

        /* Footer */
        .footer {
            background: var(--dark-color);
            color: white;
            padding: 60px 0 20px;
        }

        .footer-content {
            margin-bottom: 40px;
        }

        .footer h5 {
            color: var(--primary-color);
            margin-bottom: 20px;
        }

        .footer p, .footer li {
            color: #bbb;
            margin-bottom: 10px;
        }

        .footer ul {
            list-style: none;
            padding: 0;
        }

        .footer ul li a {
            color: #bbb;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer ul li a:hover {
            color: var(--primary-color);
        }

        .social-links a {
            display: inline-block;
            width: 40px;
            height: 40px;
            background: var(--primary-color);
            color: white;
            text-align: center;
            line-height: 40px;
            border-radius: 50%;
            margin-right: 10px;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background: var(--secondary-color);
            transform: translateY(-2px);
        }

        .footer-bottom {
            border-top: 1px solid #444;
            padding-top: 20px;
            text-align: center;
            color: #bbb;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2.5rem;
            }

            .hero-content p {
                font-size: 1.1rem;
            }

            .typewriter {
                font-size: 1.5rem;
            }

            .stat-number {
                font-size: 2rem;
            }
        }

        /* Scroll to Top Button */
        .scroll-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: var(--primary-color);
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
        }

        .scroll-top.show {
            opacity: 1;
            visibility: visible;
        }

        .scroll-top:hover {
            background: var(--secondary-color);
            transform: translateY(-2px);
        }

        /* Loading Animation */
        .loading {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            transition: opacity 0.5s ease;
        }

        .loading.hide {
            opacity: 0;
            pointer-events: none;
        }

        .loader {
            width: 50px;
            height: 50px;
            border: 5px solid #f3f3f3;
            border-top: 5px solid var(--primary-color);
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    <!-- Loading Screen -->
    <div class="loading" id="loading">
        <div class="loader"></div>
    </div>

    <!-- Header -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#home">
                <img src="https://zhttc.net.in/images/logo-n.png" alt="Dr. Zakir Hussain Teachers' Training College">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#faculty">Faculty</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#events">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section with Carousel -->
    <section id="home" class="hero-section">
        <div id="heroCarousel" class="carousel slide hero-carousel" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" style="background-image: url('https://zhttc.net.in/images/plantation/1.jpg');">
                </div>
                <div class="carousel-item" style="background-image: url('https://zhttc.net.in/images/seminar/1.jpg');">
                </div>
                <div class="carousel-item" style="background-image: url('https://zhttc.net.in/images/educational-trip/1.jpg');">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
        <div class="hero-content">
            <h1 class="typewriter">Dr. Zakir Hussain Teachers' Training College</h1>
            <p data-aos="fade-up" data-aos-delay="1000">Excellence in Education & Training Future Teachers</p>
            <a href="#about" class="btn btn-primary btn-lg" data-aos="fade-up" data-aos-delay="1500">Learn More</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <h2 class="typewriter mb-4">Welcome to Dr. Zakir Hussain Teachers' Training College</h2>
                    <div class="about-content">
                        <p class="lead mb-4">Dr. Zakir Hussain, a renowned educationist, especially in the field of Basic Education as visualized by Mahatma Gandhi, Father of the Nation, a great humanist, a distinguished exponent of composite culture and a real secularist, who ultimately adorned the coveted chair of the President of India, has been the real moving spirit for the guidance of the management of Dr. Zakir Hussain Teachers' Training College, Darbhanga.</p>
                        <p>Darbhanga is the administrative headquarters of the revenue division, and is situated at a distance of 120 km. by road from Patna, the capital of Bihar towards the North-East. It is also the headquarters of the two well reputed Universities of Bihar i.e. Lalit Narayan Mithila University and Kameshwar Singh Darbhanga Sanskrit University, Darbhanga.</p>
                        <p>Moreover, Darbhanga is the heart-land of Mithilanchal - a cultural centre known for its art, paintings and music, and above all for its scholastic and rich tradition of highly philosophic approach to life.</p>

                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="about-image">
                        <img src="https://zhttc.net.in/images/staff-council-meeting/1.jpg" alt="College Building" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Notice and Important Links Section -->
    <section class="notice-links-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8" data-aos="fade-right">
                    <div class="notice-board">
                        <h3 class="typewriter mb-4"><i class="fas fa-bullhorn text-primary me-2"></i>Latest Notices</h3>
                        <div class="notice-list">
                            <div class="notice-item">
                                <div class="notice-date">15 Jan 2024</div>
                                <h6>Admissions Open for Academic Year 2024-25</h6>
                            </div>
                            <div class="notice-item">
                                <div class="notice-date">10 Jan 2024</div>
                                <h6>D.EL.Ed. Spot Admission Available</h6>
                            </div>
                            <div class="notice-item">
                                <div class="notice-date">05 Jan 2024</div>
                                <h6>Annual Sports Day 2024</h6>
                            </div>
                            <div class="notice-item">
                                <div class="notice-date">28 Dec 2023</div>
                                <h6>Winter Vacation Schedule</h6>
                            </div>
                            <div class="notice-item">
                                <div class="notice-date">20 Dec 2023</div>
                                <h6>Teaching Staff Recruitment</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-left">
                    <div class="important-links">
                        <h3 class="typewriter mb-4"><i class="fas fa-link text-primary me-2"></i>Important Links</h3>
                        <a href="#" class="link-item">
                            <i class="fas fa-file-pdf me-2"></i>Application Form
                        </a>
                        <a href="#" class="link-item">
                            <i class="fas fa-book me-2"></i>College Prospectus
                        </a>
                        <a href="#" class="link-item">
                            <i class="fas fa-graduation-cap me-2"></i>Academic Calendar
                        </a>
                        <a href="#" class="link-item">
                            <i class="fas fa-users me-2"></i>Faculty Directory
                        </a>
                        <a href="#" class="link-item">
                            <i class="fas fa-chart-line me-2"></i>IQAC Reports
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="features-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="typewriter mb-4">Why Choose Our College</h2>
                <p class="lead">Comprehensive facilities and services for holistic education</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-seedling"></i>
                        </div>
                        <h4>Neat & Clean Environment</h4>
                        <p>We have a lush green eco-friendly clean campus providing a conducive learning environment.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-book"></i>
                        </div>
                        <h4>Automated Library</h4>
                        <p>We have well equipped fully automated library with 8000 books covering all subjects.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h4>Experienced Faculty</h4>
                        <p>The students learn under the guidance of highly experienced and dedicated faculties.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-flask"></i>
                        </div>
                        <h4>Laboratory Facility</h4>
                        <p>Students get practical exposure while working in well equipped laboratories.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-building"></i>
                        </div>
                        <h4>Largest Infrastructure</h4>
                        <p>We have one of the largest infrastructure with all modern amenities for student comfort.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-wifi"></i>
                        </div>
                        <h4>24*7 Internet Facility</h4>
                        <p>Students get facility of 24*7 internet availability in the campus for research and study.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Faculty Section -->
    <section id="faculty" class="faculty-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="typewriter mb-4">Our Mentors</h2>
                <p class="lead">Experienced and dedicated faculty members</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="faculty-card">
                        <div class="faculty-image">
                            <img src="https://zhttc.net.in/images/Dr.%20Sharique%20Hussain.jpg" alt="Dr. Sharique Hussain">
                        </div>
                        <div class="faculty-info">
                            <h4 class="faculty-name">Dr. Sharique Hussain</h4>
                            <p class="faculty-designation">Secretary</p>
                            <p>It is my privilege to greet you on behalf of Zakir Hussain College of Education. We believe that excellence in education is achieved when it is student oriented.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="faculty-card">
                        <div class="faculty-image">
                            <img src="https://zhttc.net.in/images/Dr.%20Mozammil%20Hassan.jpg" alt="Dr. Mozammil Hassan">
                        </div>
                        <div class="faculty-info">
                            <h4 class="faculty-name">Dr. Mozammil Hassan</h4>
                            <p class="faculty-designation">Principal</p>
                            <p>True education aims at the all-round development of a child, which means educational, moral, ethical, intellectual, cultural and emotional development.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="faculty-card">
                        <div class="faculty-image">
                            <img src="https://zhttc.net.in/images/trustee.jpeg" alt="Management Trustee">
                        </div>
                        <div class="faculty-info">
                            <h4 class="faculty-name">Management Trustee</h4>
                            <p class="faculty-designation">Trustee</p>
                            <p>I extend my heartiest welcome to all brilliant and ambitious young students who have enthusiastically opted for a commendable career in the field of education.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="stats-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="stat-item">
                        <span class="stat-number" data-target="1500">0</span>
                        <span class="stat-label">Students</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="stat-item">
                        <span class="stat-number" data-target="50">0</span>
                        <span class="stat-label">Faculty</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="stat-item">
                        <span class="stat-number" data-target="25">0</span>
                        <span class="stat-label">Years of Excellence</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="stat-item">
                        <span class="stat-number" data-target="95">0</span>
                        <span class="stat-label">Success Rate</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Events Section -->
    <section id="events" class="events-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="typewriter mb-4">Prominent Events</h2>
                <p class="lead">Glimpses of our college activities and celebrations</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="event-card">
                        <div class="event-image">
                            <img src="https://zhttc.net.in/images/plantation/1.jpg" alt="Plantation">
                        </div>
                        <div class="event-info">
                            <h4 class="event-title">Plantation Drive</h4>
                            <p>Environmental awareness program with tree plantation activity by students and faculty.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="event-card">
                        <div class="event-image">
                            <img src="https://zhttc.net.in/images/national-voters-day/1.jpg" alt="National Voters Day">
                        </div>
                        <div class="event-info">
                            <h4 class="event-title">National Voters Day</h4>
                            <p>Celebration of democracy and encouraging students to participate in electoral processes.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="event-card">
                        <div class="event-image">
                            <img src="https://zhttc.net.in/images/seminar/1.jpg" alt="Seminar">
                        </div>
                        <div class="event-info">
                            <h4 class="event-title">Academic Seminar</h4>
                            <p>Regular seminars and workshops for academic and professional development of students.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="event-card">
                        <div class="event-image">
                            <img src="https://zhttc.net.in/images/educational-trip/1.jpg" alt="Educational Trip">
                        </div>
                        <div class="event-info">
                            <h4 class="event-title">Educational Field Trip</h4>
                            <p>Practical learning experiences through educational trips and field visits.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="event-card">
                        <div class="event-image">
                            <img src="https://zhttc.net.in/images/art-gallery/1.jpg" alt="Art Gallery">
                        </div>
                        <div class="event-info">
                            <h4 class="event-title">Art Gallery Exhibition</h4>
                            <p>Showcasing student creativity and artistic talents through art exhibitions.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="event-card">
                        <div class="event-image">
                            <img src="https://zhttc.net.in/images/world-human-right-day/1.jpg" alt="World Human Rights Day">
                        </div>
                        <div class="event-info">
                            <h4 class="event-title">World Human Rights Day</h4>
                            <p>Awareness programs on human rights and social justice issues.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="typewriter mb-4">What Our Students Say</h2>
                <p class="lead">Testimonials from our successful graduates</p>
            </div>
            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-lg-6" data-aos="fade-right">
                                <div class="testimonial-card">
                                    <div class="testimonial-image">
                                        <img src="https://sdgdc.ac.in/userlayout/images/testimonials1.png" alt="Student">
                                    </div>
                                    <h5>Zeba Parween</h5>
                                    <p class="text-muted">Session 2020-22, Roll No. 217</p>
                                    <p class="fst-italic">"The college provided excellent education and training. The faculty is very supportive and experienced."</p>
                                </div>
                            </div>
                            <div class="col-lg-6" data-aos="fade-left">
                                <div class="testimonial-card">
                                    <div class="testimonial-image">
                                        <img src="https://sdgdc.ac.in/userlayout/images/testimonials2.png" alt="Student">
                                    </div>
                                    <h5>Shalini Panjiyar</h5>
                                    <p class="text-muted">Session 2020-22, Roll No. 234</p>
                                    <p class="fst-italic">"The Mind is Everything. What you think you become. This college shaped my thinking and career."</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-lg-6" data-aos="fade-right">
                                <div class="testimonial-card">
                                    <div class="testimonial-image">
                                        <img src="https://sdgdc.ac.in/userlayout/images/testimonials1.png" alt="Student">
                                    </div>
                                    <h5>Kumari Neha Chouhan</h5>
                                    <p class="text-muted">Session 2020-22, Roll No. 236</p>
                                    <p class="fst-italic">"If we want to reach real peace in this world, we should start educating children. This college prepares us for that noble mission."</p>
                                </div>
                            </div>
                            <div class="col-lg-6" data-aos="fade-left">
                                <div class="testimonial-card">
                                    <div class="testimonial-image">
                                        <img src="https://sdgdc.ac.in/userlayout/images/testimonials2.png" alt="Student">
                                    </div>
                                    <h5>Govind Kumar Mukhiya</h5>
                                    <p class="text-muted">Session 2020-22, Roll No. 186</p>
                                    <p class="fst-italic">"Excellent infrastructure and learning environment. The practical training was very beneficial."</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact" class="footer">
        <div class="container">
            <div class="row footer-content">
                <div class="col-lg-4 col-md-6">
                    <h5>About College</h5>
                    <p>Dr. Zakir Hussain Teachers' Training College is dedicated to providing quality education and training to future teachers. We strive for excellence in education and research.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5>Quick Links</h5>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#features">Features</a></li>
                        <li><a href="#faculty">Faculty</a></li>
                        <li><a href="#events">Events</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5>Contact Info</h5>
                    <p><i class="fas fa-map-marker-alt me-2"></i>Darbhanga, Bihar, India</p>
                    <p><i class="fas fa-phone me-2"></i>+91 XXXX XXXXXX</p>
                    <p><i class="fas fa-envelope me-2"></i>info@zhttc.net.in</p>
                    <p><i class="fas fa-globe me-2"></i>www.zhttc.net.in</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Dr. Zakir Hussain Teachers' Training College. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button -->
    <div class="scroll-top" id="scrollTop">
        <i class="fas fa-chevron-up"></i>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- AOS Animation Library -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true
        });

        // Loading Screen
        window.addEventListener('load', function() {
            setTimeout(function() {
                document.getElementById('loading').classList.add('hide');
            }, 1000);
        });

        // Navbar Scroll Effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Smooth Scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Animated Counters
        function animateCounter(element, target) {
            let current = 0;
            const increment = target / 100;
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }
                element.textContent = Math.floor(current);
            }, 20);
        }

        // Trigger counter animation when section is visible
        const observerOptions = {
            threshold: 0.5,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counters = entry.target.querySelectorAll('.stat-number');
                    counters.forEach(counter => {
                        const target = parseInt(counter.getAttribute('data-target'));
                        animateCounter(counter, target);
                    });
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        observer.observe(document.querySelector('.stats-section'));

        // Scroll to Top Button
        const scrollTopBtn = document.getElementById('scrollTop');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                scrollTopBtn.classList.add('show');
            } else {
                scrollTopBtn.classList.remove('show');
            }
        });

        scrollTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Typewriter Effect
        function typeWriter(element, text, speed = 100) {
            let i = 0;
            element.innerHTML = '';
            function type() {
                if (i < text.length) {
                    element.innerHTML += text.charAt(i);
                    i++;
                    setTimeout(type, speed);
                }
            }
            type();
        }

        // Initialize typewriter for visible elements
        const typewriterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const element = entry.target;
                    const text = element.textContent;
                    typeWriter(element, text, 50);
                    typewriterObserver.unobserve(element);
                }
            });
        }, { threshold: 0.5 });

        document.querySelectorAll('.typewriter').forEach(element => {
            typewriterObserver.observe(element);
        });

        // Auto-play carousel
        const heroCarousel = new bootstrap.Carousel(document.getElementById('heroCarousel'), {
            interval: 5000,
            ride: 'carousel'
        });

        // Parallax effect for hero section
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const heroContent = document.querySelector('.hero-content');
            if (heroContent) {
                heroContent.style.transform = `translate(-50%, calc(-50% + ${scrolled * 0.5}px))`;
            }
        });
    </script>
</body>
</html>
