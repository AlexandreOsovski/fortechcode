<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>1PAGE - One Page HTML Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Portfolio HTML Template" name="keywords">
        <meta content="Portfolio HTML Template" name="description">


        <!-- Favicon -->
        <link href="imgs/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

        <link href="{{ URL::asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">


        <link  href="{{ URL::asset('bootstrap-V5.3/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css') }}">
        <link  href="{{ URL::asset('css/site.css') }}" rel="stylesheet">





    </head>

    <body>
        <!-- Header Nav Start -->
        <div id="header">
            <div class="container-fluid">
                <div id="logo" class="pull-left">
                    <a href="index.html"><img src="imgs/logo.png" alt="Logo" /></a>
                </div>

                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="#header-carousel">Home</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#services">Our Services</a></li>
                        <li><a href="#portfolio">Our Portfolio</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Header Nav End -->

        <!-- Header carousel Start-->
        <div id="header-carousel">
            <div class="header-carousel-container">
                <div id="headerCarousel" class="carousel  slide carousel-fade" data-ride="carousel">
                    <ul class="carousel-indicators">
                        <li data-target="#headerCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#headerCarousel" data-slide-to="1"></li>
                        <li data-target="#headerCarousel" data-slide-to="2"></li>
                    </ul>

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="carousel-background"><img src="imgs/slider-1.jpg" alt=""></div>
                            <div class="carousel-container">
                                <div class="carousel-content">
                                    <h2>Web Design</h2>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                    </p>
                                    <a href="" class="btn-get-started scrollto">Get Started</a>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="carousel-background"><img src="imgs/slider-2.jpg" alt=""></div>
                            <div class="carousel-container">
                                <div class="carousel-content">
                                    <h2>Desktop Application</h2>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                    </p>
                                    <a href="" class="btn-get-started scrollto">Get Started</a>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="carousel-background"><img src="imgs/slider-3.jpg" alt=""></div>
                            <div class="carousel-container">
                                <div class="carousel-content">
                                    <h2>Game Development</h2>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                    </p>
                                    <a href="" class="btn-get-started scrollto">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a class="carousel-control-prev" href="#headerCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon fa fa-chevron-left" aria-hidden="true"></span>
                    </a>

                    <a class="carousel-control-next" href="#headerCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon fa fa-chevron-right" aria-hidden="true"></span>
                    </a>

                </div>
            </div>
        </div>
        <!-- Header carousel End-->

        <!-- About Us Start-->
        <div id="about">
            <div class="container-fluid">
                <div class="section-header">
                    <h2>Welcome to Our Website</h2>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="welcome m-auto">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra at massa sit amet ultricies. Consequat mauris non interdum cursus, eros massa faucibus diam, in sodales quam ligula in est. Nullam ultrices turpis ut justo mollis tempus. Aliquam et tortor at quam laoreet condimentum ac nec leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam mollis lacus tellus, eget fringilla enim feugiat in. Maecenas nec euismod lectus, nec congue eros. Nulla amet bibendum ut, fringilla sit amet est.
                            </p>
                            <a class="btn" href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 about-col">
                        <div class="about-content">
                            <i class="fa fa-history"></i>
                            <h2>Our Story</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra at massa sit amet ultricies. Nullam consequat, mauris non interdum cursus, eros massa faucibus diam, in sodales quam ligula in est
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 about-col">
                        <div class="about-content">
                            <i class="fa fa-bullseye"></i>
                            <h2>Our Mission</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra at massa sit amet ultricies. Nullam consequat, mauris non interdum cursus, eros massa faucibus diam, in sodales quam ligula in est
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 about-col">
                        <div class="about-content">
                            <i class="fa fa-eye"></i>
                            <h2>Our Vision</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra at massa sit amet ultricies. Nullam consequat, mauris non interdum cursus, eros massa faucibus diam, in sodales quam ligula in est
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Us End-->

        <!-- Services Start -->
        <div id="services">
            <div class="container">
                <div class="section-header">
                    <h2>Our Services</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra at massa sit amet ultricies. Nullam consequat, mauris non interdum cursus
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="service-col">
                            <div class="service-icon"><i class="fa fa-television"></i></div>
                            <h3>Web Design</h3>
                            <div class="service-detail">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra at massa sit amet ultricies. Nullam consequat mauris non
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-col">
                            <div class="service-icon"><i class="fa fa-laptop"></i> </div>
                            <h3>Web Development</h3>
                            <div class="service-detail">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra at massa sit amet ultricies. Nullam consequat mauris non
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-col">
                            <div class="service-icon"><i class="fa fa-cog"></i> </div>
                            <h3>Theme Development</h3>
                            <div class="service-detail">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra at massa sit amet ultricies. Nullam consequat mauris non
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-col">
                            <div class="service-icon"><i class="fa fa-cogs"></i> </div>
                            <h3>Game Development</h3>
                            <div class="service-detail">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra at massa sit amet ultricies. Nullam consequat mauris non
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-col">
                            <div class="service-icon"><i class="fa fa-android"></i> </div>
                            <h3>Apps Development</h3>
                            <div class="service-detail">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra at massa sit amet ultricies. Nullam consequat mauris non
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-col">
                            <div class="service-icon"><i class="fa fa-television"></i> </div>
                            <h3>Desktop Application</h3>
                            <div class="service-detail">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra at massa sit amet ultricies. Nullam consequat mauris non
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-col">
                            <div class="service-icon"><i class="fa fa-wordpress"></i> </div>
                            <h3>WordPress Themes</h3>
                            <div class="service-detail">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra at massa sit amet ultricies. Nullam consequat mauris non
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-col">
                            <div class="service-icon"><i class="fa fa-cog"></i> </div>
                            <h3>WordPress Plugins</h3>
                            <div class="service-detail">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra at massa sit amet ultricies. Nullam consequat mauris non
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-col">
                            <div class="service-icon"><i class="fa fa-phone"></i> </div>
                            <h3>Support & IT</h3>
                            <div class="service-detail">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra at massa sit amet ultricies. Nullam consequat mauris non
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->

        <!-- Counter Start -->
        <div id="counters">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="counter">
                            <div class="counter-icon"><i class="fa fa-calendar"></i></div>
                            <div class="number"> <span>12</span></div>
                            <h4 class="font-weight">Years of Experience</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="counter">
                            <div class="counter-icon"><i class="fa fa-check"></i></div>
                            <div class="number"> <span>999</span></div>
                            <h4 class="font-weight">Completed Projects</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="counter">
                            <div class="counter-icon"><i class="fa fa-users"></i></div>
                            <div class="number"> <span>480</span></div>
                            <h4 class="font-weight">Total Clients</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="counter">
                            <div class="counter-icon"><i class="fa fa-heart"></i></div>
                            <div class="number"> <span>15</span></div>
                            <h4 class="font-weight">Award Won</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter End -->

        <!-- Portfolio Start -->
        <div id="portfolio">
            <div class="container">
                <header class="section-header">
                    <h3 class="section-title">Our Portfolio</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra at massa sit amet ultricies. Nullam consequat, mauris non interdum cursus
                    </p>
                </header>

                <div class="row">
                    <div class="col-lg-12">
                        <ul class="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".web-dev">Web Development</li>
                            <li data-filter=".game-dev">Game Development</li>
                            <li data-filter=".app-dev">App Development</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container">
                    <div class="col-lg-4 col-md-6 portfolio-item web-dev">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/posrtfolio-1.jpg" class="img-fluid" alt="">
                                <a href="img/portfolio-1.jpg" data-lightbox="portfolio" data-title="Lorem ipsum dolor sit" class="link-preview" title="Preview"><i class="fa fa-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="fa fa-link"></i></a>
                                <h4 class="portfolio-title">Lorem ipsum dolor sit <span>Web Development</span></h4>
                            </figure>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item web-dev">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/posrtfolio-2.jpg" class="img-fluid" alt="">
                                <a href="img/portfolio-2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Lorem ipsum dolor sit" title="Preview"><i class="fa fa-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="fa fa-link"></i></a>
                                <h4 class="portfolio-title">Lorem ipsum dolor sit <span>Web Development</span></h4>
                            </figure>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item game-dev">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/posrtfolio-3.jpg" class="img-fluid" alt="">
                                <a href="img/portfolio-3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Lorem ipsum dolor sit" title="Preview"><i class="fa fa-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="fa fa-link"></i></a>
                                <h4 class="portfolio-title">Lorem ipsum dolor sit <span>Game Development</span></h4>
                            </figure>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item game-dev">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/posrtfolio-4.jpg" class="img-fluid" alt="">
                                <a href="img/portfolio-4.jpg" class="link-preview" data-lightbox="portfolio" data-title="Lorem ipsum dolor sit" title="Preview"><i class="fa fa-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="fa fa-link"></i></a>
                                <h4 class="portfolio-title">Lorem ipsum dolor sit <span>Game Development</span></h4>
                            </figure>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item app-dev">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/posrtfolio-5.jpg" class="img-fluid" alt="">
                                <a href="img/portfolio-5.jpg" class="link-preview" data-lightbox="portfolio" data-title="Lorem ipsum dolor sit" title="Preview"><i class="fa fa-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="fa fa-link"></i></a>
                                <h4 class="portfolio-title">Lorem ipsum dolor sit <span>App Development</span></h4>
                            </figure>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item app-dev">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/posrtfolio-6.jpg" class="img-fluid" alt="">
                                <a href="img/portfolio-6.jpg" class="link-preview" data-lightbox="portfolio" data-title="Lorem ipsum dolor sit" title="Preview"><i class="fa fa-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="fa fa-link"></i></a>
                                <h4 class="portfolio-title">Lorem ipsum dolor sit <span>App Development</span></h4>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio End -->

        <!-- Testimonials Start -->
        <div id="testimonials">
            <div class="container">
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="img/tesstimonial-1.jpg" alt="">
                        </div>
                        <div class="testimonial-content">
                            <h3>Jayden Vaughan</h3>
                            <h4>Science technician</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra at massa sit amet ultricies. Nullam consequat, mauris non interdum cursus.
                            </p>
                        </div>
                    </div>

                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="img/tesstimonial-2.jpg" alt="">
                        </div>
                        <div class="testimonial-content">
                            <h3>Aidan Brooks</h3>
                            <h4>Industrial relations manager</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra at massa sit amet ultricies. Nullam consequat, mauris non interdum cursus.
                            </p>
                        </div>
                    </div>

                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="img/tesstimonial-3.jpg" alt="">
                        </div>
                        <div class="testimonial-content">
                            <h3>Reece Kent</h3>
                            <h4>Videographer</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra at massa sit amet ultricies. Nullam consequat, mauris non interdum cursus.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonials End -->

        <!-- Contact Start -->
        <div class="contact" id="contact">
            <div class="container">
                <div class="section-header">
                    <h3>Contact Us</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra at massa sit amet ultricies. Nullam consequat, mauris non interdum cursus
                    </p>
                </div>

                <div class="row align-items-center">
                    <div class="col-md-7">
                        <div class="form">
                            <form action="" method="">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" placeholder="Your Name" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="email" class="form-control" placeholder="Your Email" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Subject" />
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" placeholder="Message"></textarea>
                                </div>
                                <div><button type="submit">Send Message</button></div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="contact-info">
                            <img src="img/masp.jpg" alt="Map" />
                            <p><i class="fa fa-map-marker"></i>123 Traders City, Los Angeles, CA, USA</p>
                            <p><i class="fa fa-envelope"></i>email@example.com</p>
                            <p><i class="fa fa-phone"></i>+123-456-7890</p>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                                <a href=""><i class="fa fa-instagram"></i></a>
                                <a href=""><i class="fa fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

        <!-- Footer Start -->
        <div id="footer">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <p>&copy; Copyright <a href="https://htmlcodex.com">HTML Codex</a>. All Rights Reserved</p>
                    </div>
                    <div class="col-md-6">
                        <p>Template by <a href="https://htmlcodex.com">HTML Codex</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/menuspy/menuspy.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
