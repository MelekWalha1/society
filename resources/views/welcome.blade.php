<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Agency - Start Bootstrap Theme</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
</head>
<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="{{ asset('assets/img/navbar-logo.svg') }}" alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#products">Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <!-- Masthead – Version Startup -->
<header class="masthead">
    <div class="container">
        <div class="masthead-subheading">Innovating the Future</div>
        <div class="masthead-heading text-uppercase">Your Trusted Tech Partner</div>
        <a class="btn btn-primary btn-xl text-uppercase" href="#services">Discover Our Services</a>
    </div>
</header>

    <!-- Services-->
    <section class="page-section" id="services">
    <div class="container">

        <!-- Title -->
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Our Solutions</h2>
            <h3 class="section-subheading text-muted">
                Smart, scalable and secure technologies built for modern startups and enterprises.
            </h3>
        </div>

        <div class="row text-center">

            <!-- Dust Monitoring Sensor -->
            <div class="col-md-6 mb-5">
                <span class="fa-stack fa-4x mb-3">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-wind fa-stack-1x fa-inverse"></i>
                </span>

                <h4 class="my-3">Dust Monitoring Sensor</h4>

                <p class="text-muted">
                    High-precision environmental monitoring with PM1.0, PM2.5, PM4 and PM10 detection.
                    Designed for industrial IoT deployments with LoRaWAN connectivity.
                </p>

                <img src="{{ asset('assets/img/services/dust-sensor.png') }}"
                     alt="Dust Sensor"
                     class="service-img">

                <p class="mt-4">
                    <a class="btn btn-outline-primary btn-lg px-4" href="{{ url('datasheet') }}">
                        View Technical Datasheet
                    </a>
                </p>
            </div>

            <!-- Self-Healing Algorithm -->
            <div class="col-md-6 mb-5">
                <span class="fa-stack fa-4x mb-3">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-robot fa-stack-1x fa-inverse"></i>
                </span>

                <h4 class="my-3">Self-Healing Algorithm</h4>

                <p class="text-muted">
                    AI-driven auto-calibration ensuring continuous data accuracy,
                    reduced drift and minimal maintenance cost.
                </p>

                <img src="{{ asset('assets/img/services/self.png') }}"
                     alt="Self-Healing Algorithm"
                     class="service-img">
            </div>
        </div>

    </div>
</section>

<style>
    /* ⭐ Image upgrade startup-style */
    .service-img {
        width: 100%;
        max-width: 500px;        /* ⬆ Images plus grandes */
        border-radius: 14px;
        margin-top: 20px;
        box-shadow: 0 8px 20px rgba(0,0,0,0.12); /* ⬆ Ombre moderne */
        transition: transform .3s ease, box-shadow .3s ease;
    }

    .service-img:hover {
        transform: scale(1.05); /* ⬆ Effet startup smooth */
        box-shadow: 0 12px 30px rgba(0,0,0,0.18);
    }
</style>

    <!-- Portfolio Grid-->
    <section class="py-5">
    <style>
        .product-intro {
            text-align: center;
            margin-bottom: 50px;
        }
        .product-section {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            margin-bottom: 60px;
        }
        .product-text {
            flex: 1;
            min-width: 300px;
            padding: 15px;
        }
        .product-image {
            flex: 1;
            min-width: 300px;
            padding: 15px;
        }
        .product-image img {
            width: 100%;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        .product-text h3 {
            margin-top: 15px;
            margin-bottom: 15px;
        }
        .product-text p a {
            color: #330ee8;
            text-decoration: underline;
        }
        @media (max-width: 768px) {
            .product-section {
                flex-direction: column;
            }
        }
    </style>

    <div class="container" id="products">

        <!-- Intro -->
        <div class="product-intro" href="#products">
            <h1 >3D-ENSURE Dust Monitoring Sensor</h1>
        </div>

        <!-- Dust Sensor -->
        <div class="product-section">
            <div class="product-text">
                <h3>Dust Sensor</h3>
                <p>The 3D-ENSURE Dust Monitoring Sensor provides accurate, real-time monitoring of particulate matter across multiple size ranges (PM1.0, PM2.5, PM4, PM10). Engineered for industrial applications, it integrates temperature and humidity sensing to contextualize dust dynamics. Its modular, 3D additive-manufacturing design ensures reliability, easy maintenance, and scalability for large-scale deployment.</p>
                <p><a href="{{ asset('datasheet.pdf') }}">Read full datasheet</a></p>
            </div>
            <div class="product-image">
                <img src="{{ asset('assets/img/products/dust-sensor.png') }}" alt="Dust Monitoring Sensor">
            </div>
        </div>

        <!-- Communication & Cloud -->
        <div class="product-section">
            <div class="product-image">
                <img src="{{ asset('assets/img/products/comm1.png') }}" alt="LoRa communication diagram">
            </div>
            <div class="product-text">
                <h3>Communication & Cloud</h3>
                <p>Sensor data is transmitted via LoRa to a LoRaWAN gateway, which forwards it over the Internet to the ThingSpeak™ cloud platform (or a custom server). The platform enables real-time visualization, analytics, and secure storage of environmental data.</p>
                <p>Through a web interface, users can access live dashboards, track trends, and monitor charts. Additional features include custom alerts, automated reporting for regulatory compliance, and data export.</p>
                <p>With updates every 15 seconds, the system ensures timely, accurate insights, empowering users to make informed and proactive environmental management decisions.</p>
            </div>
        </div>

    </div>
</section>

    <!-- About-->
    <section class="py-5" id="about">
    <div class="container" href="#about">

        <div class="row align-items-center">

            <!-- Texte -->
            <div class="col-lg-6 mb-4 mb-lg-0">
                
                <h1 class="fw-bold mb-3" href="#about">About 3D-ENSURE</h1>

                <h3 class="text-primary fw-semibold mb-3">Welcome to 3D-ENSURE</h3>

                <p class="text-muted mb-4">
                    3D-ENSURE is a groundbreaking FNR-funded startup at the forefront of
                    sensor reliability and resilience. Our mission is clear:
                    prevent catastrophic failures in critical industrial systems by
                    creating the next generation of self-diagnosing and self-healing sensors.
                </p>

                <h3 class="fw-semibold text-primary mb-3">What we do</h3>

                <p class="text-muted">
                    We provide advanced, resilient sensor technologies designed to do more
                    than measure. Our system detects anomalies, self-corrects in real time,
                    and guarantees continuous, reliable operation. Backed by three
                    hard-earned patents, our innovation delivers unmatched safety,
                    efficiency, and peace of mind across critical industrial applications.
                </p>

            </div>

            <!-- Image -->
            <div class="col-lg-6 text-center">
                <img src="{{ asset('assets/img/about/team1.png') }}"
                     alt="What we do"
                     class="img-fluid rounded shadow-lg modern-img">
            </div>

        </div>

    </div>
</section>

<style>
    /* Effet moderne + hover doux */
    .modern-img {
        transition: transform .4s ease, box-shadow .4s ease;
        max-width: 480px;
    }
    .modern-img:hover {
        transform: scale(1.05);
        box-shadow: 0 15px 35px rgba(0,0,0,0.25);
    }
</style>
     <!-- activities-->
     <section class="py-5">
    <div class="container">

        <div class="text-center mb-5">
            <h1 class="fw-bold text-uppercase">Our Activities</h1>
        </div>

        <div class="row g-4">

            <!-- Activity 1 -->
            <div class="col-6 col-md-3">
                <div class="activity-card text-center">
                    <img src="{{ asset('assets/img/activity/team1.png') }}" class="img-fluid rounded shadow activity-img" alt="">
                    <p class="mt-3 text-muted">During our pitch day</p>
                </div>
            </div>

            <!-- Activity 2 -->
            <div class="col-6 col-md-3">
                <div class="activity-card text-center">
                    <img src="{{ asset('assets/img/activity/team2.jpg') }}" class="img-fluid rounded shadow activity-img" alt="">
                    <p class="mt-3 text-muted">Venture day</p>
                </div>
            </div>

            <!-- Activity 3 -->
            <div class="col-6 col-md-3">
                <div class="activity-card text-center">
                    <img src="{{ asset('assets/img/activity/team3.jpg') }}" class="img-fluid rounded shadow activity-img" alt="">
                    <p class="mt-3 text-muted">1st pilot study with ArcelorMittal</p>
                </div>
            </div>

            <!-- Activity 4 -->
            <div class="col-6 col-md-3">
                <div class="activity-card text-center">
                    <img src="{{ asset('assets/img/activity/team4.jpg') }}" class="img-fluid rounded shadow activity-img" alt="">
                    <p class="mt-3 text-muted">Meeting with FNR funders</p>
                </div>
            </div>

        </div>

    </div>
</section>








<section class="py-5 bg-light">
    <div class="container">

        <div class="row align-items-center">

            <!-- Image -->
            <div class="col-lg-5 text-center mb-4 mb-lg-0">
                <img src="{{ asset('assets/img/activity/1.png') }}"
                     alt="Mission"
                     class="img-fluid rounded shadow-lg mv-img">
            </div>

            <!-- Texte -->
            <div class="col-lg-7">
                <h1 class="fw-bold text-uppercase mb-4">Mission & Vision</h1>

                <p class="text-muted mb-4">
                    Our current mission is to maximise customer satisfaction. We aim to offer the best 
                    possible service while learning from our clients so we can grow together. Thanks to 
                    strong client relationships, we understand their challenges deeply and develop the 
                    best solutions with our R&D team.
                </p>

                <p class="text-muted">
                    Our long-term vision is to become the market leader in intelligent monitoring 
                    system deployment. The direct connection between clients and our technological 
                    growth creates a powerful innovation flywheel — pushing us quickly toward 
                    product leadership.
                </p>
            </div>

        </div>

    </div>
</section>
     <!-- companies say about us-->
     <section id="testimonials" class="py-5 bg-light">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="fw-bold text-uppercase">What Companies Say About Us</h2>
            <p class="text-muted">Trusted by leading industrial and space partners</p>
        </div>

        <!-- Bootstrap Carousel -->
        <div id="testimonialCarousel" class="carousel slide carousel-dark" data-bs-ride="carousel">

            <div class="carousel-inner">

                <!-- Testimonial 1 -->
                <div class="carousel-item active">
                    <div class="testimonial-card mx-auto p-4 shadow rounded">
                        <img src="{{ asset('assets/img/company/company1.png') }}" class="testimonial-logo mb-3" alt="Company 1">
                        <p class="lead">"The 3D-ENSURE project aligns with our mission, offering innovative, eco-resilient sensor solutions for the steel industry."</p>
                        <h5 class="fw-bold mt-3">ArcelorMittal</h5>
                        <span class="text-muted">Global R&D</span>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="carousel-item">
                    <div class="testimonial-card mx-auto p-4 shadow rounded">
                        <img src="{{ asset('assets/img/company/company2.png') }}" class="testimonial-logo mb-3" alt="ESA">
                        <p class="lead">"3D-ENSURE holds great potential for environmental monitoring in long-duration missions where maintenance is limited."</p>
                        <h5 class="fw-bold mt-3">ESA</h5>
                        <span class="text-muted">Head - ESEC</span>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="carousel-item">
                    <div class="testimonial-card mx-auto p-4 shadow rounded">
                        <img src="{{ asset('assets/img/company/company3.png') }}" class="testimonial-logo mb-3" alt="IEE">
                        <p class="lead">"The strong potential in self-healing signal capabilities and reliable data collection is remarkable."</p>
                        <h5 class="fw-bold mt-3">IEE</h5>
                        <span class="text-muted">CTO</span>
                    </div>
                </div>

                <!-- Testimonial 4 -->
                <div class="carousel-item">
                    <div class="testimonial-card mx-auto p-4 shadow rounded">
                        <img src="{{ asset('assets/img/company/company4.png') }}" class="testimonial-logo mb-3" alt="Paul Wurth">
                        <p class="lead">"Signal self-healing is highly intriguing and could transform sectors facing reliability challenges."</p>
                        <h5 class="fw-bold mt-3">PAUL WURTH INCUB</h5>
                        <span class="text-muted">CEO</span>
                    </div>
                </div>

                <!-- Testimonial 5 -->
                <div class="carousel-item">
                    <div class="testimonial-card mx-auto p-4 shadow rounded">
                        <img src="{{ asset('assets/img/company/company5.png') }}" class="testimonial-logo mb-3" alt="CEBI">
                        <p class="lead">"3D-ENSURE’s approach can significantly enhance calibration and data-processing capabilities."</p>
                        <h5 class="fw-bold mt-3">CEBI</h5>
                        <span class="text-muted">R&D Manager</span>
                    </div>
                </div>

                <!-- Testimonial 6 -->
                <div class="carousel-item">
                    <div class="testimonial-card mx-auto p-4 shadow rounded">
                        <img src="{{ asset('assets/img/company/company6.png') }}" class="testimonial-logo mb-3" alt="Maana Electric">
                        <p class="lead">"Strong potential for addressing calibration and signal-processing challenges."</p>
                        <h5 class="fw-bold mt-3">MAANA ELECTRIC</h5>
                        <span class="text-muted">Lead Scientist</span>
                    </div>
                </div>

                <!-- Testimonial 7 -->
                <div class="carousel-item">
                    <div class="testimonial-card mx-auto p-4 shadow rounded">
                        <img src="{{ asset('assets/img/company/company7.png') }}" class="testimonial-logo mb-3" alt="CRAB">
                        <p class="lead">"We are impressed by 3D-ENSURE’s circular design integrating modularity and sustainability."</p>
                        <h5 class="fw-bold mt-3">CRAB</h5>
                        <span class="text-muted">CEO</span>
                    </div>
                </div>

            </div>

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>

        </div>

    </div>
</section>


    <!-- Team-->
    <!-- Team Section -->
<section class="page-section bg-light" id="team">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>

        <!-- Première ligne -->
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="{{ asset('assets/img/team/t1.png') }}" alt="Inès CHIHI" />
                    <h4>Inès CHIHI</h4>
                    <p class="text-muted">Team Member</p>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Inès CHIHI Twitter"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Inès CHIHI Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Inès CHIHI LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="{{ asset('assets/img/team/t2.png') }}" alt="Mohammad ABUABIAH" />
                    <h4>Mohammad ABUABIAH</h4>
                    <p class="text-muted">Team Member</p>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Mohammad ABUABIAH Twitter"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Mohammad ABUABIAH Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Mohammad ABUABIAH LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="{{ asset('assets/img/team/t3.png') }}" alt="Heni BELGACEM" />
                    <h4>Heni BELGACEM</h4>
                    <p class="text-muted">Team Member</p>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Heni BELGACEM Twitter"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Heni BELGACEM Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Heni BELGACEM LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>

        <!-- Deuxième ligne -->
        <div class="row mt-4">
            <div class="col-lg-4 col-md-6">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="{{ asset('assets/img/team/t4.png') }}" alt="Melek WALHA" />
                    <h4>Melek WALHA</h4>
                    <p class="text-muted">Team Member</p>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Melek WALHA Twitter"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Melek WALHA Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Melek WALHA LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="{{ asset('assets/img/team/t5.png') }}" alt="Marc JACOBS" />
                    <h4>Marc JACOBS</h4>
                    <p class="text-muted">Team Member</p>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Marc JACOBS Twitter"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Marc JACOBS Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Marc JACOBS LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="{{ asset('assets/img/team/t6.png') }}" alt="Sarah LE GUENIC" />
                    <h4>Sarah LE GUENIC</h4>
                    <p class="text-muted">Team Member</p>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Sarah LE GUENIC Twitter"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Sarah LE GUENIC Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Sarah LE GUENIC LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>

        <!-- Texte en bas -->
        <div class="row mt-4">
            <div class="col-lg-8 mx-auto text-center">
                <p class="large text-muted">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.
                </p>
            </div>
        </div>
    </div>
</section>

    <!-- Clients-->
    <div class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="{{ asset('assets/img/logos/microsoft.svg') }}" alt="..." aria-label="Microsoft Logo" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="{{ asset('assets/img/logos/google.svg') }}" alt="..." aria-label="Google Logo" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="{{ asset('assets/img/logos/facebook.svg') }}" alt="..." aria-label="Facebook Logo" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="{{ asset('assets/img/logos/ibm.svg') }}" alt="..." aria-label="IBM Logo" /></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Contact Us</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" />
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" />
                        </div>
                        <div class="form-group mb-md-0">
                            <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <textarea class="form-control" id="message" placeholder="Your Message *" required="required"></textarea>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <div id="success"></div>
                    <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Send Message</button>
                </div>
            </form>
        </div>
    </section>

    <!-- Footer-->
    <footer class="footer py-4">
    <section id="contact" class="py-5 bg-light">
    <style>
        #contact h1 {
            letter-spacing: 1px;
        }
        #contact .card {
            border-radius: 15px;
            background: #fff;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        #contact .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }
        #contact ul li {
            margin-bottom: 10px;
        }
        #contact a {
            text-decoration: none;
        }
    </style>

    <div class="container">
        <div class="row align-items-center">

            <!-- Contact Info -->
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h1 class="fw-bold mb-3">Get In Touch</h1>
                <p class="lead">We are here to help you navigate your sensors technology challenges and opportunities.</p>
                <p>Reach out today for expert guidance and personalized solutions.</p>
                <ul class="list-unstyled mt-3">
                    <li><strong>Email:</strong> <a href="mailto:info@3D-ENSURE.com">info@3D-ENSURE.com</a></li>
                    <li><strong>Phone:</strong> <a href="tel:+352666666666">+352 666 666 666</a></li>
                    <li><strong>Address:</strong> 6 Rue Richard Coudenhove-Kalergi, 1359 Kirchberg, Luxembourg</li>
                </ul>
            </div>

            <!-- Consultation Card -->
            <div class="col-lg-6">
                <div class="card shadow-lg p-4 h-100 border-0">
                    <div class="card-body">
                        <h3 class="card-title mb-3">Free Consultation Available</h3>
                        <p class="card-text">Schedule a complimentary 30-minute consultation to discuss your technology needs and explore potential solutions.</p>
                        <a href="#contact-form" class="btn btn-primary mt-3">Book Your Consultation</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

    </footer>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
