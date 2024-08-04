<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PART TIME JOB PORTAL</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Teko:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border position-relative text-primary" style="width: 6rem; height: 6rem;" role="status"></div>
        <img class="position-absolute top-50 start-50 translate-middle" src="img/icons/icon-1.png" alt="Icon">
    </div> -->
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark p-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-3">
                    <a class="text-body px-2" href="tel:987654678"><i class="fa fa-phone-alt text-primary me-2"></i>987654678</a>
                    <a class="text-body px-2" href="mailto:pjob@nexus.com"><i class="fa fa-envelope-open text-primary me-2"></i>pjob@nexus.com</a>
                </div>
            </div>
            <?php
            session_start();
            echo "WELCOME " .$_SESSION['company'];
            ?>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="text-primary m-0"><img class="me-3" src="img/icons/icon-1.png" alt="Icon">NEXUS</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                <a href="jobsearch.html" class="nav-item nav-link">Jobs</a>
                <a href="postajob.php" class="nav-item nav-link">Post a job</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">More</a>
                    <div class="dropdown-menu border-0 m-0">
                        <a href="feature.html" class="dropdown-item">Our Features</a>
                        <a href="team.html" class="dropdown-item">Featured Companies</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                    </div>
                </div>
                <a href="indexdc.html" class="nav-item nav-link">Status</a>
                <a href="login.php" class="btn btn-primary py-3 px-5 d-none d-lg-block">LOGIN</a>
            </div>
        
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative" data-dot="">
               
                
                <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-1 text-white animated slideInDown">Best Part-Time Job Offers</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">We provide an invaluable resource for employees and employers, offering a seamless and efficient way to find and fill part-time positions.</p>
                                <a href="" class="btn btn-primary py-3 px-5 animated slideInLeft">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative" data-dot="<img src='/img/carousel-2.jpg'>">
                <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-1 text-white animated slideInDown">Best Part-Time Job Offers</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">We provide an invaluable resource for employees and employers, offering a seamless and efficient way to find and fill part-time positions.</p>
                                <a href="" class="btn btn-primary py-3 px-5 animated slideInLeft">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative" data-dot="</img src='img/carousel-3.jpg'>">
                <img class="img-fluid" src="img/carousel-3.jpg" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-1 text-white animated slideInDown">Best Part-Time Job Offers</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">We provide an invaluable resource for employees and employers, offering a seamless and efficient way to find and fill part-time positions.</p>
                                <a href="" class="btn btn-primary py-3 px-5 animated slideInLeft">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Facts Start -->
    <div class="container-xxl py-5">
        <div class="container pt-5">
            <div class="row g-4">
                
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="fact-item text-center bg-light h-100 p-5 pt-0">
                        <div class="fact-icon">
                            <img src="img/icons/icon-3.png" alt="Icon">
                        </div>
                        <h3 class="mb-3">Company Profiles</h3>
                        <p class="mb-0">Bring your presentation to life. Capture your audience's attention.</p>
                        <p class="mb-0"><a href="team.html" class="btn btn-primary py-7 px-10 animated slideInLeft">Read More</a></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="fact-item text-center bg-light h-100 p-5 pt-0">
                        <div class="fact-icon">
                            <img src="img/icons/icon-4.png" alt="icon">
                        </div>
                        <h3 class="mb-3">Job Search</h3>
                        <p class="mb-0">Personalized user profiles that store job search preferences, applications and resumes</p>.
                        <p class="mb-0"><a href="jobsearch.html" class="btn btn-primary py-7 px-10 animated slideInLeft">Read More</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img class="img-fluid" src="img/about-1.jpg" alt="">
                        <img class="img-fluid" src="img/about-2.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h4 class="section-title">About Us</h4>
                    <h1 class="display-5 mb-4">Flex Your Hour With Part-Time Power!</h1>
                    <p>Welcome to NEXUS, your gateway to a world of part-time possibilities. Whether you're a student looking to earn extra cash, a parent seeking work-life balance, or anyone in between, we've got you covered. Our platform connects job seekers with a wide range of flexible and rewarding part-time oppurtunities.</p>
                    <p class="mb-4">Browse through our diverse listings, from gig work to seasonal jobs, remote positions to local shifts. Our user-friendly interface makes it easy to search for the perfect fit that aligns with your skills, interests and availability .</p>
                    <div class="d-flex align-items-center mb-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center border border-5 border-primary" style="width: 120px; height: 120px;">
                            <h1 class="display-1 mb-n2" data-toggle="counter-up">25</h1>
                        </div>
                        <div class="ps-4">
                            <h3>Years</h3>
                            <h3>Working</h3>
                            <h3 class="mb-0">Experience</h3>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Our Services</h4>
                <h1 class="display-5 mb-4">We Focuse On Connecting Job Seekers With Employers And Vice Versa.</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="img/service-1.jpg" alt="">
                        <div class="service-text p-5">
                            <img class="mb-4" src="img/icons/icon-5.png" alt="Icon">
                            <h3 class="mb-3">Job Search</h3>
                            <p class="mb-4">We offer search filters and tools to help job seekers find part-time positions that match their skills,interest and location preferences.</p>
                            <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="img/service-2.jpg" alt="">
                        <div class="service-text p-5">
                            <img class="mb-4" src="img/icons/icon-6.png" alt="Icon">
                            <h3 class="mb-3">Application Submission</h3>
                            <p class="mb-4">Users can often apply for part-time positions directly through these websites, streamlining the application process.</p>
                            <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="img/service-3.jpg" alt="">
                        <div class="service-text p-5">
                            <img class="mb-4" src="img/icons/icon-7.png" alt="Icon">
                            <h3 class="mb-3">Resume Submission</h3>
                            <p class="mb-4">Many of these websites allow job seekers to create and upload their resumes, making it easier for them to apply for multiple part-time jobs.</p>
                            <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                        </div>
                    </div>
                </div>
               
                
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Feature Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="section-title">Why Choose Us!</h4>
                    <h1 class="display-5 mb-4">Why You Should Trust Us? Learn More About Us!</h1>
                    <p class="mb-4">Here are the features provided by us!</p>
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="d-flex align-items-start">
                                <img class="flex-shrink-0" src="img/icons/icon-2.png" alt="Icon">
                                <div class="ms-4">
                                    <h3>Job Search</h3>
                                    <p class="mb-0">Users can search for part-time job listings based on criteria such as location, job type, industry and more.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-start">
                                <img class="flex-shrink-0" src="img/icons/icon-3.png" alt="Icon">
                                <div class="ms-4">
                                    <h3>Company Profiles</h3>
                                    <p class="mb-0">Information about companies offering part=time jobs, including company descriptions, reviews and ratings.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-start">
                                <img class="flex-shrink-0" src="img/icons/icon-4.png" alt="Icon">
                                <div class="ms-4">
                                    <h3>User Profiles</h3>
                                    <p class="mb-0">Personalized user profiles that store job search preferences, applications and resumes.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="feature-img">
                        <img class="img-fluid" src="img/about-2.jpg" alt="">
                        <img class="img-fluid" src="img/about-1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Project Start -->
    <div class="container-xxl project py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Our Projects</h4>
                <h1 class="display-5 mb-4">Visit Our Latest Projects And Our Innovative Works</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4">
                    <div class="nav nav-pills d-flex justify-content-between w-100 h-100 me-4">
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active" data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                            <h3 class="m-0">01. Modern Complex</h3>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                            <h3 class="m-0">02. Royal Hotel</h3>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                            <h3 class="m-0">03. Mexwel Buiding</h3>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0" data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                            <h3 class="m-0">04. Shopping Complex</h3>
                        </button>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/project-1.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h1 class="mb-3">25 Years Of Experience In Architecture Industry</h1>
                                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Design Approach</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Innovative Solutions</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Project Management</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/project-2.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h1 class="mb-3">25 Years Of Experience In Architecture Industry</h1>
                                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Design Approach</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Innovative Solutions</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Project Management</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/project-3.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h1 class="mb-3">25 Years Of Experience In Architecture Industry</h1>
                                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Design Approach</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Innovative Solutions</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Project Management</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-4">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/project-4.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h1 class="mb-3">25 Years Of Experience In Architecture Industry</h1>
                                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Design Approach</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Innovative Solutions</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Project Management</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Team Members</h4>
                <h1 class="display-5 mb-4">We Are Creative Architecture Team For Your Dream Home</h1>
            </div>
            <div class="row g-0 team-items">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/team-1.jpg" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h3 class="mt-2">Architect Name</h3>
                            <span class="text-primary">Designation</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/team-2.jpg" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h3 class="mt-2">Architect Name</h3>
                            <span class="text-primary">Designation</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/team-3.jpg" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h3 class="mt-2">Architect Name</h3>
                            <span class="text-primary">Designation</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/team-4.jpg" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h3 class="mt-2">Architect Name</h3>
                            <span class="text-primary">Designation</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Appointment Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="section-title">Appointment</h4>
                    <h1 class="display-5 mb-4">Make An Appointment To Boost Your Career.</h1>
                    <p class="mb-4">Your part-time job is your bridge to the future you've always dreamed of. Book now!</p>
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-light" style="width: 65px; height: 65px;">
                                    <i class="fa fa-2x fa-phone-alt text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-2">Call Us Now</p>
                                    <h3 class="mb-0">987654678</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-light" style="width: 65px; height: 65px;">
                                    <i class="fa fa-2x fa-envelope-open text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-2">Mail Us Now</p>
                                    <h3 class="mb-0">pjob@nexus.com</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row g-3">
                        <div class="col-12 col-sm-6">
                            <input type="text" class="form-control" placeholder="Your Name" style="height: 55px;">
                        </div>
                        <div class="col-12 col-sm-6">
                            <input type="email" class="form-control" placeholder="Your Email" style="height: 55px;">
                        </div>
                        <div class="col-12 col-sm-6">
                            <input type="text" class="form-control" placeholder="Your Mobile" style="height: 55px;">
                        </div>
                        <div class="col-12 col-sm-6">
                            <select class="form-select" style="height: 55px;">
                                <option selected>Choose Service</option>
                                <option value="1">Service 1</option>
                                <option value="2">Service 2</option>
                                <option value="3">Service 3</option>
                            </select>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="date" id="date" data-target-input="nearest">
                                <input type="text"
                                    class="form-control datetimepicker-input"
                                    placeholder="Choose Date" data-target="#date" data-toggle="datetimepicker" style="height: 55px;">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="time" id="time" data-target-input="nearest">
                                <input type="text"
                                    class="form-control datetimepicker-input"
                                    placeholder="Choose Date" data-target="#time" data-toggle="datetimepicker" style="height: 55px;">
                            </div>
                        </div>
                        <div class="col-12">
                            <textarea class="form-control" rows="5" placeholder="Message"></textarea>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Book Appointment</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Testimonial</h4>
                <h1 class="display-5 mb-4">Thousands Of Customers Who Trust Us And Our Services</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='img/testimonial-1.jpg' alt=''>">
                    <p class="fs-5">"I had the privilege of working part-time as a typist, and my experience was truly great.The job allowed me to enhance my typing skills while providing valuable support to the team. I appreciated the oppurtunity to contribute and grow in a positive work environment".</p>
                    <h3>ARJUN JACOB</h3>
                    <span class="text-primary">COPYWRITER</span>
                </div>
                <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='img/testimonial-2.jpg' alt=''>">
                    <p class="fs-5">"I have had the privilege of working as a Virtual Assistant, I've been able to provide exceptional support to clients from diverse industries.This role has allowed me to demonstrate my strong organizational skills while fostering productive and collabrative working relationships".</p>
                    <h3>SARAH MATHEW</h3>
                    <span class="text-primary">VIRTUAL ASSISTANT</span>
                </div>
                <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='img/testimonial-3.jpg' alt=''>">
                    <p class="fs-5">"My time as a part-time barista was a fine experience. I enjoyed creating coffee and serving customers while working in a fast-paced environment. It was an oppurtunity to develop my customer service skills and gain valuable experience in the food service industry".</p>
                    <h3>KRISHNA. S</h3>
                    <span class="text-primary">COFFEE CONSULTANT</span>
                </div>
            </div>      
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-body footer mt-5 pt-5 px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-light mb-4">Address</h3>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i>Kurisumoodu P.O Changanacherry</p>
                    <p class="mb-2"><i class="fa fa-phone-alt text-primary me-3"></i>987654678</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary me-3"></i>pjob@nexus.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-body me-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-body me-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-body me-1" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-body me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-light mb-4">Services</h3>
                    <a class="btn btn-link" href="">Architecture</a>
                    <a class="btn btn-link" href="">3D Animation</a>
                    <a class="btn btn-link" href="">House Planning</a>
                    <a class="btn btn-link" href="">Interior Design</a>
                    <a class="btn btn-link" href="">Construction</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-light mb-4">Quick Links</h3>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-light mb-4">Newsletter</h3>
                    <p>Unlock Your Part-Time Potential : Discover Exciting Job Oppurtunities!</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">Your Site Name</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                        <br> Distributed By: <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>