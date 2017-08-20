<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Papillon International</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Papillon International Excursions</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

        <!-- Favicon-->
        <link rel="shortcut icon" href="images/favicon.png" >

        <!-- Stylesheets -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="font/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="libs/materialize/css/materialize.min.css" media="screen,projection" />
        <link rel="stylesheet" href="css/bootstrap.css" media="screen,projection" />

        <link rel="stylesheet" href="css/animate.min.css" media="screen,projection" />
        <link rel="stylesheet" href="libs/sweetalert/sweet-alert.css" media="screen,projection" />

        <link rel="stylesheet" href="libs/owl-carousel/owl.carousel.css" media="screen,projection" />
        <link rel="stylesheet" href="libs/owl-carousel/owl.transitions.css" media="screen,projection" />
        <link rel="stylesheet" href="libs/owl-carousel/owl.theme.css" media="screen,projection" />

        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/responsive.css">

        <!-- Choose your default colors -->
        <link rel="stylesheet" href="css/colors/color1.css">
        <!--<link rel="stylesheet" href="assets/css/colors/color2.css"> -->
        <!--<link rel="stylesheet" href="assets/css/colors/color3.css"> -->
        <!--<link rel="stylesheet" href="assets/css/colors/color4.css"> -->
        <!--<link rel="stylesheet" href="assets/css/colors/color5.css"> -->
        <!--<link rel="stylesheet" href="assets/css/colors/color6.css"> -->
        <!--<link rel="stylesheet" href="assets/css/colors/color7.css"> -->

        <!--<link rel="stylesheet" href="assets/css/colors/color8.css"> -->
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.js"></script>
        <![endif]-->


    </head>
    <body>
        <!-- Preloader -->
        <!-- Preloader -->
        <div id="preloader">
            <div class="loader">
                <svg class="circle-loader" height="50" width="50">
                    <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="6" stroke-miterlimit="10" />
                </svg>
            </div>
        </div><!--preloader end-->

        <!-- Main Container -->
        <main id="app" class="main-section">
            <!-- header navigation start -->
            <header id="navigation" class="root-sec white nav">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="nav-inner">
                                <nav class="primary-nav">
                                    <div class="clearfix nav-wrapper">
                                        <!--ToDo Change Logo Here-->
                                        <a href="#home" class="left brand-logo menu-smooth-scroll" data-section="#home"><img src="images/blue_plane.svg" alt="">
                                        </a>

                                        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                                        <ul class="right static-menu">
                                            <li class="search-form-li">
                                                <a id="initSearchIcon" class=""><i class="mdi-action-search"></i> </a>
                                                <div class="search-form-wrap hide">
                                                    <form action="#" class="">
                                                        <input type="search" class="search">
                                                        <button type="submit"><i class="mdi-action-search"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </li>
                                            <li>
                                                <a class="dropdown-button blog-submenu-init" href="#!" data-activates="dropdown1">
                                                    <i class="mdi-navigation-more-vert right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        <ul class="inline-menu side-nav" id="mobile-demo">

                                            <!-- Mini Profile // only visible in Tab and Mobile -->
                                            <li class="mobile-profile">
                                                <div class="profile-inner">
                                                    <div class="pp-container">
                                                        <img src="images/blue_plane.svg" alt="">
                                                    </div>
                                                    <h3>Papillon International Excursions</h3>
                                                    <h5>Because with travel comes <span>possibility</span></h5>
                                                </div>
                                            </li><!-- mini profile end-->


                                            <!--<li><a href="#about" data-section="#about" class="menu-smooth-scroll"><i class="fa fa-user fa-fw"></i>About Us</a>
                                            </li>-->
                                            <li><a href="#resume" data-section="#education" class="menu-smooth-scroll"><i class="fa fa-file-text fa-fw"></i>Current Tours</a>
                                            </li>
                                            <li><a href="#resume" data-section="#education" class="menu-smooth-scroll"><i class="fa fa-file-text fa-fw"></i>Different Tour Options</a>
                                            </li>
                                            <li><a href="#portfolio" data-section="#portfolio" class="menu-smooth-scroll"><i class="fa fa-briefcase fa-fw"></i>Why Choose Us</a>
                                            </li>
                                            {{--<li><a href="#team" data-section="#team" class="menu-smooth-scroll"><i class="fa fa-users fa-fw"></i>Meet The Team</a>--}}
                                            {{--</li>--}}
                                            {{--<li><a href="#testimonial" data-section="#testimonial" class="menu-smooth-scroll"><i class="fa fa-comments fa-fw"></i>Testimonials</a>--}}
                                                {{--<!--</li>--}}
                                                <li><a href="#blog" data-section="#blog" class="menu-smooth-scroll"><i class="fa fa-pencil fa-fw"></i>Blog</a>
                                                </li>-->
                                            <li><a href="#contact" data-section="#contact" class="menu-smooth-scroll"><i class="fa fa-paper-plane fa-fw"></i>Contact</a>
                                            </li>
                                        </ul>
                                        <ul id="dropdown1" class="inline-menu submenu-ul dropdown-content">
                                            <li>Home</li>
                                                @if (Route::has('login'))

                                                    @auth
                                                        <li><a href="{{ url('/home') }}">Home</a></li>
                                                     @else
                                                        <li><a href="{{ route('login') }}"><i class="fa fa-sign-in fa-fw"></i>Login</a></li>
                                                        <li><a href="{{ route('register') }}"><i class="fa fa-user-plus fa-fw"></i>Register</a></li>
                                                    @endauth
                                                @endif
                                        </ul>

                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .container end -->
            </header>
            <!-- #header  navigation end -->

            <!-- Home Section start -->
            <section id="home" class="scroll-section root-sec grey lighten-5 home-wrap">
                <div class="sec-overlay">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="home-inner">
                                    <div class="center-align home-content">
                                        <h1 class="home-title"><span>Papillon International Excursions</span></h1>
                                        <h2 class="home-subtitle">Because with travel comes possibility</h2>
                                        <a href="#contact" class="hire-me-btn btn waves-effect waves-light btn-large brand-bg white-text regular-text">Create Your Tour<i class="mdi-content-send left"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .container end -->
                    <div class="section-call-to-area">
                        <div class="container">
                            <div class="row">
                                <a href="#about" class="btn-floating btn-large button-middle call-to-about section-call-to-btn animated btn-up btn-hidden" data-section="#about">
                                    <i class="mdi-navigation-expand-more"></i>
                                </a>
                            </div>
                        </div>
                        <!-- .container end -->
                    </div>
                </div>
            </section>
            <!-- #home Section end -->

            <section id="education" class="root-sec grey lighten-5 padd-tb-120 education-wrap">
                <div class="container">
                    <div class="row">
                        <div class="education-inner">
                            <div class="col-sm-12 col-md-10 card-box-wrap">
                                <div class="row">
                                    <div class="clearfix section-head education-text">
                                        <div class="col-sm-12">
                                            <h2 class="title">Current Tours</h2>
                                            <p class="regular-text">We offer a spectrum of tours including high school,college, adult travel, high school exchanges, service learning trips</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="overflow-hidden">
                                            <div class="row">
                                                <div id="educationSlider" class="clearfix card-element-wrapper">

                                                    <!-- single education -->
                                                    <div class="col-sm-4 single-card-box wow fadeInUpSmall" data-wow-duration=".7s">
                                                        <div class="card">
                                                            <div class="card-image waves-effect waves-block waves-light">
                                                                <h2 class="left-align card-title-top">June 11-June 26, 2017 </h2>
                                                                <div class="card-img-wrap">
                                                                    <img class="activator" src="images/EuropeTour.webp" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="card-content">
                                                                <span class="card-title activator brand-text">Madame Schlup's Europe tour 2017<i class="mdi-navigation-more-vert right"></i></span>
                                                                <p>15 Days</p>
                                                            </div>
                                                            <!-- Reveal content-->
                                                            <div class="card-reveal">
                                                                <div class="rev-title-wrap">
                                                                    <span class="card-title activator brand-text">Madame Schlup's Europe tour 2017<i class="mdi-navigation-close right"></i></span>
                                                                    <p>15 Days</p>
                                                                </div>
                                                                <p class="rev-content">
                                                                    Where: Paris, (London, opt), French Riviera, Monaco, Pisa, Venice, Florence, Rome, Pompeii, (Iceland, opt).When: June 11-June 26, 2017 (June 29th with Iceland, opt.)**Private tour**</p>
                                                            </div>
                                                        </div>
                                                    </div> <!-- single education end -->

                                                    <!-- single education -->
                                                    <div class="col-sm-4 single-card-box wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration=".7s">
                                                        <div class="card">
                                                            <div class="card-image waves-effect waves-block waves-light">
                                                                <h2 class="left-align card-title-top">Summer 2018</h2>
                                                                <div class="card-img-wrap">
                                                                    <img class="activator" src="images/FrauBarnes.webp" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="card-content">
                                                                <span class="card-title activator brand-text">Frau Barnes' Europe tour 2018<i class="mdi-navigation-more-vert right"></i></span>
                                                                <p>13 Days</p>
                                                            </div>
                                                            <div class="card-reveal">
                                                                <div class="rev-title-wrap">
                                                                    <span class="card-title activator brand-text">Frau Barnes' Europe tour 2018<i class="mdi-navigation-close right"></i></span>
                                                                    <p>13 Days</p>
                                                                </div>
                                                                <p class="rev-content">Where: Luxembourg, Germany, Austria, Switzerland, and Liechtenstein. (Iceland optional) When: Summer 2018 (dates TBD) **Private tour**                                </p>
                                                            </div>
                                                        </div>
                                                    </div> <!-- single education -->

                                                    <!-- single education -->
                                                    <div class="col-sm-4 single-card-box wow fadeInUpSmall" data-wow-delay=".4s" data-wow-duration=".7s">
                                                        <div class="card">
                                                            <div class="card-image waves-effect waves-block waves-light">
                                                                <h2 class="left-align card-title-top">[2017-2018]</h2>
                                                                <div class="card-img-wrap">
                                                                    <img class="activator" src="images/yourDestination.webp" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="card-content">
                                                                <span class="card-title activator brand-text">[Your Destiantion Here]<i class="mdi-navigation-more-vert right"></i></span>
                                                                <p># Days</p>
                                                            </div>
                                                            <div class="card-reveal">
                                                                <div class="rev-title-wrap">
                                                                    <span class="card-title activator brand-text">A Level<i class="mdi-navigation-close right"></i></span>
                                                                    <p># Days</p>
                                                                </div>
                                                                <p class="rev-content">
                                                                    Want to offer a tour for your students? This could be your sign-up page...</p>
                                                            </div>
                                                        </div>
                                                    </div> <!-- single education -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-wrapp edu-ctrl">
                                <a class="btn-floating waves-effect waves-light btn-large brand-bg go go-left"><i class="mdi-navigation-chevron-left"></i></a>
                                <a class="btn-floating waves-effect waves-light btn-large brand-bg go go-right"><i class="mdi-navigation-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            </section>
            <!-- #resume Section end -->

            <!-- Portfolio Section start -->
            <section id="portfolio" class="scroll-section root-sec white portfolio-wrap">
                <div class="padd-tb-120 brand-bg portfolio-top">
                    <div class="portfolio-inner">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h2 class="title">Make Your Next Tour With US</h2>
                                    <ul class="inline-menu clearfix portfolio-category" id="portfolio-msnry-sort">
                                        <li class="active"><a href="#" data-target="*">All</a>
                                        </li>
                                        <li><a href="#" data-target=".category-1">Student Tours</a>
                                        </li>
                                        <li><a href="#" data-target=".category-2">Adult Tours</a>
                                        </li>
                                        <li><a href="#" data-target=".category-3">History</a>
                                        </li>
                                        <li><a href="#" data-target=".category-4">Art</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .container end -->
                </div>
                <div id="portfolioModal" class="modal white">
                    <div class="model-img"></div>
                    <div class="modal-content">
                        <h2 class="title">Lorem ipsum dolor sit fugit dolore.</h2>
                        <p class="m-content">A portfolio is a collection of documents and writing that you assemble in order to demonstrate that you have the appropriate prior.</p>
                    </div>

                    <div class="modal-footer">
                        <a href="#" target="_blank" class="waves-effect btn-flat brand-text modal-action">Live Demo</a>
                        <a href="#" class="waves-effect btn-flat brand-text modal-action modal-close">cancel</a>
                    </div>
                </div>

                <div class="portfolio-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="clearfix protfolio-item" id="protfolio-msnry">

                                    <!-- Single Portfolio-->
                                    <li class="single-port-item category-1 category-3">
                                        <a href="#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" data-image-source="images/castle_group.jpg" data-title="Your awesome portfolio title" data-content="A portfolio is a collection of documents and writing that you assemble in order to demonstrate that you have the appropriate prior." data-demo-link="#"> <!-- Portfolio pop-up content-->
                                            <div class="protfolio-image">
                                                <img src="images/castle_group.jpg" alt="portfolio"> <!-- portfolio thumbnail-->
                                                <div class="protfolio-content waves-effect waves-block waves-light">
                                                    <div class="protfolio-content__inner">
                                                        <h2 class="p-title">Student Growth</h2>
                                                    </div>
                                                </div>
                                                <div class="p-overlay"></div>
                                            </div>
                                        </a>
                                    </li>
                                    <!--/ single portfolio -->

                                    <!-- Single Portfolio-->
                                    <li class="single-port-item category-1 category-3">
                                        <a href="#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" data-image-source="images/streets1.jpg" data-title="Your awesome portfolio title" data-content="A portfolio is a collection of documents and writing that you assemble in order to demonstrate that you have the appropriate prior." data-demo-link="#">
                                            <div class="protfolio-image">
                                                <img src="images/streets1.jpg" alt="portfolio">
                                                <div class="protfolio-content waves-effect waves-block waves-light">
                                                    <div class="protfolio-content__inner">
                                                        <h2 class="p-title">item name</h2>
                                                    </div>
                                                </div>
                                                <div class="p-overlay"></div>
                                            </div>
                                        </a>
                                    </li>
                                    <!--/ single portfolio -->

                                    <!-- Single Portfolio-->
                                    <li class="single-port-item category-1 category-3">
                                        <a href="#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" data-image-source="images/group_eye.jpg" data-title="Your awesome portfolio title" data-content="A portfolio is a collection of documents and writing that you assemble in order to demonstrate that you have the appropriate prior." data-demo-link="#">
                                            <div class="protfolio-image">
                                                <img src="images/group_eye.jpg" alt="portfolio">
                                                <div class="protfolio-content waves-effect waves-block waves-light">
                                                    <div class="protfolio-content__inner">
                                                        <h2 class="p-title">item name</h2>
                                                    </div>
                                                </div>
                                                <div class="p-overlay"></div>
                                            </div>
                                        </a>
                                    </li>
                                    <!--/ single portfolio -->

                                    <!-- Single Portfolio-->
                                    <li class="single-port-item category-1 category-2">
                                        <a href="#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" data-image-source="images/ryan_city.jpg" data-title="Your awesome portfolio title" data-content="A portfolio is a collection of documents and writing that you assemble in order to demonstrate that you have the appropriate prior." data-demo-link="#">
                                            <div class="protfolio-image">
                                                <img src="images/ryan_city.jpg" alt="portfolio">
                                                <div class="protfolio-content waves-effect waves-block waves-light">
                                                    <div class="protfolio-content__inner">
                                                        <h2 class="p-title">item name</h2>
                                                    </div>
                                                </div>
                                                <div class="p-overlay"></div>
                                            </div>
                                        </a>
                                    </li>
                                    <!--/ single portfolio -->

                                    <!-- Single Portfolio-->
                                    <li class="single-port-item category-1 category-2">
                                        <a href="#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" data-image-source="images/streets2.jpg" data-title="Your awesome portfolio title" data-content="A portfolio is a collection of documents and writing that you assemble in order to demonstrate that you have the appropriate prior." data-demo-link="#">
                                            <div class="protfolio-image">
                                                <img src="images/streets2.jpg" alt="portfolio">
                                                <div class="protfolio-content waves-effect waves-block waves-light">
                                                    <div class="protfolio-content__inner">
                                                        <h2 class="p-title">item name</h2>
                                                    </div>
                                                </div>
                                                <div class="p-overlay"></div>
                                            </div>
                                        </a>
                                    </li>
                                    <!--/ single portfolio -->

                                    <!-- Single Portfolio-->
                                    <li class="single-port-item category-1 category-2">
                                        <a href="#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" data-image-source="images/group_walking.jpg" data-title="Your awesome portfolio title" data-content="A portfolio is a collection of documents and writing that you assemble in order to demonstrate that you have the appropriate prior." data-demo-link="#">
                                            <div class="protfolio-image">
                                                <img src="images/group_walking.jpg" alt="portfolio">
                                                <div class="protfolio-content waves-effect waves-block waves-light">
                                                    <div class="protfolio-content__inner">
                                                        <h2 class="p-title">item name</h2>
                                                    </div>
                                                </div>
                                                <div class="p-overlay"></div>
                                            </div>
                                        </a>
                                    </li>
                                    <!--/ single portfolio -->

                                </ul>
                                <!-- portfolio load more button-->
                                <a id="portfolio-item-loader" href="#" class="btn-floating btn-large waves-effect waves-light brand-bg"><i class="mdi-content-add"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- #portfolio Section end -->

            <!-- Team Section Start -->
            <section id="team" class="scroll-section root-sec brand-bg padd-tb-120 team-wrap">
                <div class="container">
                    <div class="row">
                        <div class="clearfix team-inner">
                            <div class="col-sm-12 col-md-10 card-box-wrap">
                                <div class="row">
                                    <div class="clearfix section-head team-text">
                                        <div class="col-sm-12">
                                            <h2 class="title">Our Awesome Team!!</h2>
                                            <p class="regular-text">Our Team is dedicated to bringing you a personal experience. Our directors bring leadership to teachers while creating lasting relationships</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="overflow-hidden">
                                            <div class="row">
                                                <div id="teamSlider" class="clearfix card-element-wrapper">
                                                    <div class="col-sm-4 single-card-box wow fadeInUpSmall" data-wow-duration=".7s">
                                                        <div class="card">
                                                            <div class="card-image waves-effect waves-block waves-light">
                                                                <div class="card-img-wrap">
                                                                    <img class="activator" src="images/ryan_&_kelly.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="card-content">
                                                                <span class="card-title activator brand-text">Ryan and Kelly Schlup<i class="mdi-navigation-more-vert right"></i></span>
                                                                <p>Tour Directors</p>
                                                            </div>
                                                            <div class="card-reveal">
                                                                <div class="rev-title-wrap">
                                                                    <span class="card-title activator brand-text">Ryan and Kelly<i class="mdi-navigation-close right"></i></span>
                                                                    <p>Tour Directors</p>
                                                                </div>
                                                                <p class="rev-content">
                                                                    When Kelly first began taking her students abroad, she was disheartened by the large profit companies that dominated the market on student travel and made the most basic of tours unaffordable for most families. Her dream was to start a company that provided personalized travel at affordable prices to extend the availablity of these adventures to all students.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div> <!-- single team member -->
                                                    <div class="col-sm-4 single-card-box wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration=".7s">
                                                        <div class="card">
                                                            <div class="card-image waves-effect waves-block waves-light">
                                                                <div class="card-img-wrap">
                                                                    <img class="activator" src="images/Kelly1.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="card-content">
                                                                <span class="card-title activator brand-text">Kelly Schlup<i class="mdi-navigation-more-vert right"></i></span>
                                                                <p>Owner Operator</p>
                                                            </div>
                                                            <div class="card-reveal">
                                                                <div class="rev-title-wrap">
                                                                    <span class="card-title activator brand-text">Kelly Schlup<i class="mdi-navigation-close right"></i></span>
                                                                    <p>Owner Operator</p>
                                                                </div>
                                                                <p class="rev-content">
                                                                    When Kelly first began taking her students abroad, she was disheartened by the large profit companies that dominated the market on student travel and made the most basic of tours unaffordable for most families. Her dream was to start a company that provided personalized travel at affordable prices to extend the availablity of these adventures to all students.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div> <!-- single team member -->
                                                    <div class="col-sm-4 single-card-box wow fadeInUpSmall" data-wow-delay=".4s" data-wow-duration=".7s">
                                                        <div class="card">
                                                            <div class="card-image waves-effect waves-block waves-light">
                                                                <div class="card-img-wrap">
                                                                    <img class="activator" src="images/ryan_scenic.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="card-content">
                                                                <span class="card-title activator brand-text">Ryan Schlup<i class="mdi-navigation-more-vert right"></i></span>
                                                                <p>Director</p>
                                                            </div>
                                                            <div class="card-reveal">
                                                                <div class="rev-title-wrap">
                                                                    <span class="card-title activator brand-text">Ryan Schlup<i class="mdi-navigation-close right"></i></span>
                                                                    <p>Director</p>
                                                                </div>
                                                                <p class="rev-content">
                                                                    Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div> <!-- single team member -->
                                                    <div class="col-sm-4 single-card-box">
                                                        <div class="card">
                                                            <div class="card-image waves-effect waves-block waves-light">
                                                                <div class="card-img-wrap">
                                                                    <img class="activator" src="http://placehold.it/300x280" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="card-content">
                                                                <span class="card-title activator brand-text">Letizia Toye<i class="mdi-navigation-more-vert right"></i></span>
                                                                <p>Front End Developer</p>
                                                            </div>
                                                            <div class="card-reveal">
                                                                <div class="rev-title-wrap">
                                                                    <span class="card-title activator brand-text">Letizia Toye<i class="mdi-navigation-close right"></i></span>
                                                                    <p>Front End Developer</p>
                                                                </div>
                                                                <p class="rev-content">
                                                                    Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div> <!-- single team member -->
                                                    <div class="col-sm-4 single-card-box">
                                                        <div class="card">
                                                            <div class="card-image waves-effect waves-block waves-light">
                                                                <div class="card-img-wrap">
                                                                    <img class="activator" src="http://placehold.it/300x280" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="card-content">
                                                                <span class="card-title activator brand-text">Tandi Battle<i class="mdi-navigation-more-vert right"></i></span>
                                                                <p>Team Manager</p>
                                                            </div>
                                                            <div class="card-reveal">
                                                                <div class="rev-title-wrap">
                                                                    <span class="card-title activator brand-text">Tandi Battle<i class="mdi-navigation-close right"></i></span>
                                                                    <p>Team Manager</p>
                                                                </div>
                                                                <p class="rev-content">
                                                                    Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div> <!-- single team member -->
                                                    <div class="col-sm-4 single-card-box">
                                                        <div class="card">
                                                            <div class="card-image waves-effect waves-block waves-light">
                                                                <div class="card-img-wrap">
                                                                    <img class="activator" src="http://placehold.it/300x280" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="card-content">
                                                                <span class="card-title activator brand-text">Tandi Battle<i class="mdi-navigation-more-vert right"></i></span>
                                                                <p>Team Manager</p>
                                                            </div>
                                                            <div class="card-reveal">
                                                                <div class="rev-title-wrap">
                                                                    <span class="card-title activator brand-text">Tandi Battle<i class="mdi-navigation-close right"></i></span>
                                                                    <p>Team Manager</p>
                                                                </div>
                                                                <p class="rev-content">
                                                                    Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div> <!-- single team member -->
                                                </div> <!-- #teamSlider end -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-wrapp tmu-ctrl">
                                <a class="btn-floating waves-effect waves-light btn-large white go go-left"><i class="mdi-navigation-chevron-left brand-text"></i></a>
                                <a class="btn-floating waves-effect waves-light btn-large white go go-right"><i class="mdi-navigation-chevron-right brand-text"></i></a>
                            </div>
                        </div>
                    </div>

                </div> <!-- .container -->
            </section>
            <!-- #team Section end -->



            <!-- Testimonial Section end -->
            <section id="testimonial" class="scroll-section root-sec brand-bg padd-tb-120 testimonial-wrap">
                <div class="container">
                    <div class="row">
                        <div class="testimonial-inner">
                            <div class="col-sm-12 col-md-10 card-box-wrap">
                                <div class="row">
                                    <div class="clearfix section-head testimonial-text">
                                        <div class="col-sm-12">
                                            <h2 class="title">testimonials</h2>
                                            <p class="regular-text">See what past travelers have to say...</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="overflow-hidden">
                                            <div class="row">
                                                <div id="testimonialSlider" class="clearfix card-element-wrapper">
                                                    <div class="col-sm-6 single-card-box wow fadeInUpSmall" data-wow-duration=".7s">
                                                        <div class="card">
                                                            <div class="card-image waves-effect waves-block waves-light">
                                                                <div class="card-img-wrap">
                                                                    <img class="activator" src="images/Lauren_Wanman.webp" alt="">
                                                                    <p class="saying-about">"Having the opportunity to travel is the experience of a lifetime. And being able to go twice now to Europe has been incredible. Thank to Kelly and her company, Ive ben able to travel affordably this past summer and enjoy Europe to the fullest which I couldn't do going through [another] tour company. I'm so thankful for Kelly's hard work and dedication to make these trips exciting and memorable."</p>
                                                                </div>
                                                            </div>
                                                            <div class="card-content">
                                                                <span class="card-title activator brand-text">Lauren Wanman -</span>
                                                                <a href="#">Student</a>
                                                            </div>
                                                        </div>
                                                    </div> <!-- ./single testimonial box -->
                                                    <div class="col-sm-6 single-card-box wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration=".7s">
                                                        <div class="card">
                                                            <div class="card-image waves-effect waves-block waves-light">
                                                                <div class="card-img-wrap">
                                                                    <img class="activator" src="images/Grace_Hill.webp" alt="">
                                                                    <p class="saying-about">"Through having the opportunity to travel and leave home, I have learned just as much about myself as I have about the world. As a teenager, traveling taught me more about the concept of responsibility and independence than I ever could learn from home. Being surrounded by new cultures, environments, languages and people brought me out of my comfort zone immensely, and I couldn't be happier. Changing your surroundings also changes you."</p>
                                                                </div>
                                                            </div>
                                                            <div class="card-content">
                                                                <span class="card-title activator brand-text">Grace Hill -</span>
                                                                <a href="#">Teacher</a>
                                                            </div>
                                                        </div>
                                                    </div> <!-- ./single testimonial box -->
                                                    <div class="col-sm-6 single-card-box">
                                                        <div class="card">
                                                            <div class="card-image waves-effect waves-block waves-light">
                                                                <div class="card-img-wrap">
                                                                    <img class="activator" src="images/Mandi_Wallace.webp" alt="">
                                                                    <p class="saying-about">"The Europe trip honestly was the best experience thus far in my life and I am so lucky you put all the work into it that you did. My favorite part was the freedom we were granted to explore, it made me feel like an independent traveler and that I could arrange something like that on my own. We got to make our own decisions about how we spent our time and with who. Another thing I loved was the ability to experience the reality of foreign cultures, unlike most trips for teens we were not staying in tourist areas the whole time and we were immersed in what being apart of the area was really about."</p>
                                                                </div>
                                                            </div>
                                                            <div class="card-content">
                                                                <span class="card-title activator brand-text"> Mandi Wallace -</span>
                                                                <a href="#">Student</a>
                                                            </div>
                                                        </div>
                                                    </div> <!-- ./single testimonial box -->
                                                    <div class="col-sm-6 single-card-box">
                                                        <div class="card">
                                                            <div class="card-image waves-effect waves-block waves-light">
                                                                <div class="card-img-wrap">
                                                                    <img class="activator" src="images/Joy_Smith.webp" alt="">
                                                                    <p class="saying-about">"Traveling made me unafraid to explore and has pushed me to study abroad so I can experience many more adventures!"</p>
                                                                </div>
                                                            </div>
                                                            <div class="card-content">
                                                                <span class="card-title activator brand-text">Ivy Smith-</span>
                                                                <a href="#">Student</a>
                                                            </div>
                                                        </div>
                                                    </div> <!-- ./single testimonial box -->
                                                    <div class="col-sm-6 single-card-box">
                                                        <div class="card">
                                                            <div class="card-image waves-effect waves-block waves-light">
                                                                <div class="card-img-wrap">
                                                                    <img class="activator" src="images/Ashlyn_Vande_Vooren.webp" alt="">
                                                                    <p class="saying-about">"Honestly, I can't pick a favorite memory! Everyday was a new adventure, whether it was planned in the itinerary or not! If I absolutely had to choose though, my favorite part of the trip was visiting the little towns and villages. I feel like that's where you really get to experience the culture of the country."</p>
                                                                </div>
                                                            </div>
                                                            <div class="card-content">
                                                                <span class="card-title activator brand-text">Ashlyn Vande Vooren -</span>
                                                                <a href="#">Student</a>
                                                            </div>
                                                        </div>
                                                    </div> <!-- ./single testimonial box -->
                                                </div> <!-- #testimonialSlider end -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-wrapp tmo-ctrl">
                                <a class="btn-floating waves-effect waves-light btn-large white go go-left"><i class="mdi-navigation-chevron-left brand-text"></i></a>
                                <a class="btn-floating waves-effect waves-light btn-large white go go-right"><i class="mdi-navigation-chevron-right brand-text"></i></a>
                            </div>
                        </div>
                    </div>
                </div> <!-- ./container end -->
            </section>
            <!-- #testimonial Section end -->
            <!-- Funfacts Section end -->
            <section id="funfacts" class="root-sec grey lighten-5 funfact-wrap">
                <div class="sec-inner padd-tb-120">
                    <div class="container">
                        <div class="row">
                            <div class="funfact-inner">
                                <div class="col-sm-4 col-sm-offset-1 funfact-box">
                                    <div class="center-align card-panel white">
                                        <div class="feature-box-outer">
                                            <div class="funfact-box-inner">
                                                <div class="clearfix ">
                                                    <i class="mdi-editor-insert-emoticon"></i>
                                                    <span class="num countNumb">150</span>
                                                </div>
                                                <div class="context">Happy Students</div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- ./single fun fact box -->
                                <div class="col-sm-4 col-sm-offset-2 funfact-box">
                                    <div class="center-align card-panel white">
                                        <div class="feature-box-outer">
                                            <div class="funfact-box-inner">
                                                <div class="clearfix ">
                                                    <i class="mdi-action-wallet-travel"></i>
                                                    <span class="num countNumb">10</span>
                                                </div>
                                                <div class="context">Tours Completed</div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- ./single fun fact box -->
                            </div>
                        </div>
                    </div>  <!-- .container end -->
                </div>
            </section>
            <!-- #funfacts Section end -->
            <!-- Contact Section end -->
            <section id="contact" class="scroll-section root-sec brand-bg padd-tb-120 contact-wrap">
                <div class="container">
                    <div class="row">
                        <div class="contact-inner">
                            <div class="col-sm-12 card-box-wrap">
                                <div class="row">
                                    <div class="clearfix section-head contact-text">
                                        <div class="col-sm-12">
                                            <h2 class="title">Contact</h2>
                                            <p class="regular-text">The Heart of Boise Idaho</p>
                                            <ul class="clearfix contact-info">
                                                <li><a href="">1-208-861-3913</a>
                                                </li>
                                                <li><a href="">info@papillion-international.com</a>
                                                </li>
                                                <!--<li><a href="">www.website.net</a>
                                                </li>-->
                                            </ul>
                                        </div>
                                    </div> <!-- contact text end -->

                                    <div class="clearfix contact-form">

                                        <!-- Map Start -->
                                        <div class="col-sm-7">
                                            <div class="map-wrapper">
                                                <div id="map"></div>
                                            </div>
                                        </div> <!-- Map end -->

                                        <!-- Contact Form start -->
                                        <div class="col-sm-5">
                                            <div class="clearfix card-panel grey lighten-5 cform-wrapper">
                                                <form action="#" id="contactForm" novalidate>
                                                    <div class="input-field">
                                                        <input id="contact_name" type="text" name="contactName" class="validate input-box">
                                                        <label for="contact_name" class="input-label">Name</label>
                                                    </div>
                                                    <div class="input-field">
                                                        <input id="email" type="email" name="contactEmail" class="validate input-box">
                                                        <label for="email" class="input-label">Email</label>
                                                    </div>
                                                    <div class="input-field">
                                                        <input id="subject" type="text" name="contactSubject" class="validate input-box">
                                                        <label for="subject" class="input-label">Subject</label>
                                                    </div>
                                                    <div class="input-field textarea-input">
                                                        <textarea id="textarea1" name="contactMessage" class="validate materialize-textarea" style="height: 22px;"></textarea>
                                                        <label for="textarea1" class="input-label">Message</label>
                                                    </div>
                                                    <div class="input-field submit-wrap clearfix">
                                                        <button type="submit" class="left waves-effect btn-flat brand-text submit-btn">send message</button>
                                                        <div class="right form-loader-area">
                                                            <svg class="circular size-20" height="20" width="20">
                                                                <circle class="path" cx="10" cy="10" r="7" fill="none" stroke-width="3" stroke-miterlimit="10" />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div> <!-- ./contact form end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- ./container end -->
                <div class="section-call-to-area">
                    <div class="container">
                        <div class="row">
                            <a href="#home" class="btn-floating btn-large button-middle call-to-home section-call-to-btn animated btn-up btn-hidden" data-section="#home">
                                <i class="mdi-navigation-expand-less"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- #contact Section end -->

            <!-- Footer Section end -->
            <footer id="footer" class="root-sec white root-sec footer-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="clearfix footer-inner">
                                <ul class="left social-icons">
                                    <li><a href="#" class="tooltips tooltipped facebook" data-position="top" data-delay="50" data-tooltip="Facebook"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href="#" class="tooltips tooltipped linkedin" data-position="top" data-delay="50" data-tooltip="Linkdin"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li><a href="#" class="tooltips tooltipped twitter" data-position="top" data-delay="50" data-tooltip="Twitter"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li><a href="#" class="tooltips tooltipped google-plus" data-position="top" data-delay="50" data-tooltip="Google Plus"><i class="fa fa-google-plus"></i></a>
                                    </li>
                                    <li><a href="#" class="tooltips tooltipped dribbble" data-position="top" data-delay="50" data-tooltip="Dribbble"><i class="fa fa-dribbble"></i></a>
                                    </li>
                                    <li><a href="#" class="tooltips tooltipped behance" data-position="top" data-delay="50" data-tooltip="Behance"><i class="fa fa-behance"></i></a>
                                    </li>
                                </ul> <!-- ./social icons end -->
                                <div class="right copyright">
                                    <p>papillion-international.com All Rights Reserved</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- ./container end-->
            </footer>
            <!-- #footer end -->

        </main>
        <!-- Main Container end-->


        <!-- JavaScripts -->
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/detectmobilebrowser.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/waypoints.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/jquery.nicescroll.min.js"></script>
        <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="js/gmaps.js"></script>
        <script src="libs/owl-carousel/owl.carousel.min.js"></script>
        <script src="libs/materialize/js/materialize.min.js"></script>
        <script src="libs/jwplayer/jwplayer.js"></script>
        <script src="libs/sweetalert/sweet-alert.min.js"></script>
        <script src="js/common.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>
