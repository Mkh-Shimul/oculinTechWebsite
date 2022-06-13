
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Home</title>
    <!-- Stylesheets -->
    <link href="{{ asset('webassets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('webassets/css/style.css') }}" rel="stylesheet">
    <!-- Responsive File -->
    <link href="{{ asset('webassets/css/responsive.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('webassets/images/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('webassets/images/favicon.png') }}" type="image/x-icon">

    <!-- Responsive Settings -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="{{ asset('webassets/js/respond.js') }}"></script><![endif]-->

</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"><div class="icon"></div></div>

    <!-- Main Header -->
    <header class="main-header header-style-one">
        <!-- Header Top -->
{{--        <div class="header-top header-top-one">--}}
{{--            <div class="auto-container">--}}
{{--                <div class="inner clearfix">--}}
{{--                    <div class="top-left clearfix">--}}
{{--                        <div class="top-text">IT solutions that are designed to integrate multiple sectors</div>--}}
{{--                    </div>--}}

{{--                    <div class="top-right clearfix">--}}
{{--                        <!--Info-->--}}
{{--                        <div class="info">--}}
{{--                            <ul class="clearfix">--}}
{{--                                <li class="phone"><a href="tel:500.369.2580"><span class="icon sl-icon-call-in"></span>Phone <strong>500.369.2580</strong></a></li>--}}
{{--                                <li class="email"><a href="mailto:info@zentec.com"><span class="icon sl-icon-envelope-open"></span>info@zentec.com</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <!--Language-->--}}
{{--                        <div class="language">--}}
{{--                            <div class="lang-btn">--}}
{{--                                <span class="flag"><img src="{{ asset('webassets/images/icons/icon-lang.png') }}" alt="" title="English"></span>--}}
{{--                                <span class="txt">En</span>--}}
{{--                                <span class="arrow fa fa-angle-down"></span>--}}
{{--                            </div>--}}
{{--                            <div class="lang-dropdown">--}}
{{--                                <ul>--}}
{{--                                    <li><a href="#">German</a></li>--}}
{{--                                    <li><a href="#">Italian</a></li>--}}
{{--                                    <li><a href="#">Chinese</a></li>--}}
{{--                                    <li><a href="#">Russian</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="auto-container">
                <div class="inner-container clearfix" style="background: transparent !important;">
                    <!--Logo-->
                    <div class="logo-box">
                        <div class="logo"><a href="/ocuweb2" title="Oculin Tech BD LTd"><img src="{{ asset('webassets/images/ocu_logo.png') }}" alt="Oculin Tech BD Ltd" title="Oculin Tech BD Ltd"></a></div>
                    </div>
                    <div class="right-nav clearfix">
                        <div class="nav-outer clearfix">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>

                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class="current dropdown"><a href="/ocuweb2">Home</a>
                                        </li>
                                        <li  class="dropdown"><a href="#">About Us</a>
{{--                                            <ul>--}}
{{--                                                <li><a href="about.html">About Us</a></li>--}}
{{--                                                <li><a href="case-studies.html">Case Studies</a></li>--}}
{{--                                                <li><a href="faqs.html">FAQ's</a></li>--}}
{{--                                            </ul>--}}
                                        </li>
                                        <li class="dropdown"><a href="#">Services</a>
                                            <ul>
                                                <li><a href="#">AMI for Power & Electricity</a></li>
                                                <li><a href="#">Data Center Solution</a></li>
                                                <li><a href="#">Computer Network</a></li>
                                                <li><a href="#">IT Security</a></li>
{{--                                                <li><a href="product-engineering.html">Product Engineering</a></li>--}}
{{--                                                <li><a href="business-security.html">Business Security</a></li>--}}
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Resource</a>
                                        </li>
                                        <li class="dropdown"><a href="#">Career</a>
{{--                                            <ul>--}}
{{--                                                <li><a href="blog-grid.html">Blog Grid Style</a></li>--}}
{{--                                                <li><a href="blog-fullwidth.html">Blog Fullwidth</a></li>--}}
{{--                                                <li><a href="blog-single.html">Blog Post Details</a></li>--}}
{{--                                            </ul>--}}
                                        </li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>

                        <!--Search Btn-->
{{--                        <div class="search-btn">--}}
{{--                            <button type="button" class="theme-btn search-toggler"><span class="fa fa-search"></span></button>--}}
{{--                        </div>--}}

                    </div>
                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="/ocuweb2" title=""><img src="{{ asset('webassets/images/ocu_logo.png') }}" alt="" title=""></a>
                </div>
                <!--Right Col-->
                <div class="pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav><!-- Main Menu End-->
                </div>
            </div>
        </div><!-- End Sticky Menu -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-targeting-cross"></span></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="#"><img src="{{ asset('webassets/images/ocu_logo.png') }}" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <!--Social Links-->
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->
    </header>
    <!-- End Main Header -->

    <!--Search Popup-->
{{--    <div id="search-popup" class="search-popup">--}}
{{--        <div class="close-search theme-btn"><span class="flaticon-targeting-cross"></span></div>--}}
{{--        <div class="popup-inner">--}}
{{--            <div class="overlay-layer"></div>--}}
{{--            <div class="search-form">--}}
{{--                <form method="post" action="#">--}}
{{--                    <div class="form-group">--}}
{{--                        <fieldset>--}}
{{--                            <label>--}}
{{--                                <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required />--}}
{{--                            </label>--}}
{{--                            <input type="submit" value="Search Now!" class="theme-btn"/>--}}
{{--                        </fieldset>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
    <!--Default Background Section-->
    <section class="default-bg-section">
        <div class="image-layer" style="background-image: url({{ url('webassets/images/background/stock-photo-green-space_6.jpg') }}); margin-top: -80px; height: 130%; !important;"></div>

        <div class="auto-container">
            <div class="content-box">
                <h2>Deliver <strong>Innovative IT Solutions</strong> For Technology Insights</h2>
                <div class="link-box">
                    <a href="#" class="theme-btn btn-style-one"><div class="btn-title">Explore More</div></a>
                </div>
            </div>
        </div>
    </section>

    <!--About Section-->
    <section class="about-section">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Text Column-->
                <div class="text-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="sec-title">
{{--                            <div class="upper-text">Oculin Tech BD Ltd.</div>--}}
                            <h2><b>About Us</b></h2>
                        </div>

                        <div class="text-content">
                            <p>
                                Oculin Tech (BD) is the pioneer Information Technology company registered in Bangladesh.
                                Oculin Tech helps organizations from project initiation through execution and capability building.
                                We deliver end to end industry solutions for power and utility, FSI, Public sector, Media & Communications and Manufacturing.
                            </p>
                            <ul class="list-style-one">
                                <li>We are committed to providing quality IT Services</li>
                                <li>Our benefits are endless for local IT Companies & Startups</li>
                                <li>Really know the true needs and expectations of customers</li>
                                <li>Talented & experienced management solutions for IT</li>
                                <li>Processes of achieving the excellence and continue improvements</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Image Column-->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner">
                        <!--Images-->
                        <div class="images">
                            <div class="row clearfix">
                                <figure class="image col-md-6 col-sm-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms"><img src="{{ asset('webassets/images/resource/about-image-1.jpg') }}" alt="" title=""></figure>
                                <figure class="image col-md-6 col-sm-6 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms"><img src="{{ asset('webassets/images/resource/about-image-2.jpg') }}" alt="" title=""></figure>
                                <figure class="image col-md-6 col-sm-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms"><img src="{{ asset('webassets/images/resource/blog-image-2.jpg') }}" alt="" title="" style="height:100%"></figure>
                                <figure class="image col-md-6 col-sm-6 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms"><img src="{{ asset('webassets/images/resource/about-image-4.jpg') }}" alt="" title=""></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Separator-->
    <div class="theme-separator"></div>



    <!--Services Section-->
    <section class="services-section">
        <div class="gradient-layer"></div>
        <div class="pattern-layer"></div>

        <div class="auto-container">
            <div class="row clearfix">
                <!--Column-->
                <div class="column col-lg-4 col-md-12 col-sm-12">
                    <div class="sec-title wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
{{--                        <div class="upper-text">Solutions</div>--}}
                        <h2><strong>Solutions</strong></h2>
{{--                        <div class="lower-text">Digital Transformation By IT Solutions</div>--}}
                    </div>

                    <!--Service Block-->
                    <div class="service-block wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-outer">
                                <span class="icon-bg"></span>
                                <div class="icon-box"><img src="{{ asset('webassets/images/icons/services/1.png') }}" alt="" title=""></div>
                            </div>
                            <h3><a href="#">ADVANCED METERING INFRASTRUCTURE FOR POWER AND ELECTRICITY</a></h3>
                            <div class="text"><strong>First of its kind in Bangladesh</strong></div>
                            <div class="text">We provide all the core components of the AMI system.</div>
                            <div class="more-link"><a href="#"><span class="fa fa-arrow-right"></span></a></div>
                        </div>
                    </div>

                </div>

                <!--Column-->
                <div class="column col-lg-4 col-md-12 col-sm-12">

                    <!--Service Block-->
                    <div class="service-block wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-outer">
                                <span class="icon-bg"></span>
                                <div class="icon-box"><img src="{{ asset('webassets/images/icons/services/2.png') }}" alt="" title=""></div>
                            </div>
                            <h3><a href="#">SPECIALIZED IN DATA CENTER SOLUTIONS</a></h3>
                            <div class="text">
                                We provide Advanced metering infrastructure (AMI) for your smart grid ecosystem with integrating software and hardware components, data management, monitoring systems and smart meters
                            </div>
                            <div class="more-link">
                                <a href="#">
                                    <span class="fa fa-arrow-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!--Service Block-->
                    <div class="service-block wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-outer">
                                <span class="icon-bg"></span>
                                <div class="icon-box"><img src="{{ asset('webassets/images/icons/services/3.png') }}" alt="" title=""></div>
                            </div>
                            <h3><a href="#">BIG DATA , ADVANCED ANALYTICS AND SOCIAL SENTIMENT ANALYTICS</a></h3>
                            <div class="text">
                                Newer opportunities are getting unfolded from the insights harnessed by Advance Analytical Models comprising of Machine Learning and Deep Learning.
                            </div>
                            <div class="more-link"><a href="#"><span class="fa fa-arrow-right"></span></a></div>
                        </div>
                    </div>

                </div>

                <!--Column-->
                <div class="column col-lg-4 col-md-12 col-sm-12">
                    <!--Service Block-->
                    <div class="service-block wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-outer">
                                <span class="icon-bg"></span><div class="icon-box"><img src="{{ asset('webassets/images/icons/services/4.png') }}" alt="" title=""></div>
                            </div>
                            <h3><a href="#">INNOVATIVE COMPUTER NETWORK</a></h3>
                            <div class="text">Businesses today are looking for ways to create an integrated security program so that they can adapt faster and more efficiently. Think of it as security that is built in, rather than bolted on.</div>
                            <div class="more-link"><a href="#"><span class="fa fa-arrow-right"></span></a></div>
                        </div>
                    </div>

                    <!--Service Block-->
                    <div class="service-block wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-outer"><span class="icon-bg"></span><div class="icon-box"><img src="{{ asset('webassets/images/icons/services/5.png') }}" alt="" title=""></div></div>
                            <h3><a href="#">IT SECURITY AUDIT AND TRAINING</a></h3>
                            <div class="text">We provide companies with the innovative computer network infrastructure design to facilitate optimum performance and availability and security.</div>
                            <div class="more-link"><a href="#"><span class="fa fa-arrow-right"></span></a></div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>

{{--    <div class="theme-separator"></div>--}}

    <!--Default Background Section-->
    <section class="default-bg-section">
        <div class="image-layer" style="background-image: url({{ url('webassets/images/background/image-1.jpg') }});"></div>

        <div class="auto-container">
            <div class="content-box">
                <h2>Our IT Solutions will get you on move towards your destination faster than rivals in a more reliably way!</h2>
                <div class="link-box"><a href="#" class="theme-btn btn-style-one"><div class="btn-title">Explore Our Projects</div></a></div>
            </div>
        </div>
    </section>

{{--    <div class="theme-separator"></div>--}}

    <!--Fun Facts Section-->
    <section class="fun-facts-section">
        <div class="auto-container">
            <div class="fact-counter">

                <div class="row clearfix">
                    <!--Column-->
                    <div class="counter-column col-lg-4 col-md-4 col-sm-12">
                        <div class="inner wow fadeInUp" data-wow-delay="0ms">
                            <div class="upper-title">System Integrations Done</div>
                            <div class="count-box"><span class="count-text" data-speed="1000" data-stop="1500">0</span></div>
{{--                            <div class="counter-title">for customers</div>--}}
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-lg-4 col-md-4 col-sm-12 wow fadeInUp">
                        <div class="inner wow fadeInUp" data-wow-delay="300ms">
                            <div class="upper-title">Powerful Team to Focus</div>
                            <div class="count-box"><span class="count-text" data-speed="10" data-stop="100">0</span>+</div>
{{--                            <div class="counter-title">Expert Members</div>--}}
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-lg-4 col-md-4 col-sm-12 wow fadeInUp">
                        <div class="inner wow fadeInUp" data-wow-delay="600ms">
                            <div class="upper-title">Projects in Pipeline</div>
                            <div class="count-box"><span class="count-text" data-speed="0" data-stop="60">0</span></div>
{{--                            <div class="counter-title">Fully Launched</div>--}}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--Separator-->
    <div class="theme-separator"></div>

    <section class="sponsors-section">
        <div class="sec-title centered">
            {{--            <div class="upper-text">Clients</div>--}}
                        <h2><strong>Clients</strong></h2>
            {{--            <div class="lower-text">Sit amet consectetur adipisicing elitm sed eiusmod temp sed incididunt labore dolore magna aliquatenim veniam quis ipsum nostrud exer citation ullamco laboris.</div>--}}
        </div>
        <div class="sponsors-outer">
            <!--Sponsors-->
            <div class="auto-container">
                <!--Sponsors Carousel-->
                <div class="sponsors-carousel theme-carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 30, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 500, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "2" }, "768" :{ "items" : "3" } , "800":{ "items" : "3" }, "1024":{ "items" : "4" }, "1200":{ "items" : "5" }}}'>
                    <div class="slide-item"><figure class="image-box"><a href="https://bitopi.com/" target="_blank"><img src="{{ asset('webassets/images/clients/clients_pic/bitopi_adv.jpg') }}" alt="bitopi_adv"></a></figure></div>
                    <div class="slide-item"><figure class="image-box"><a href="https://bcc.gov.bd/" target="_blank"><img src="{{ asset('webassets/images/clients/clients_pic/bcc.jpeg') }}" alt="bcc"></a></figure></div>
                    <div class="slide-item"><figure class="image-box"><a href="http://www.reb.gov.bd/" target="_blank"><img src="{{ asset('webassets/images/clients/clients_pic/BREB.png') }}" alt="breb"></a></figure></div>
                    <div class="slide-item"><figure class="image-box"><a href="https://www.desco.org.bd/bangla/" target="_blank"><img src="{{ asset('webassets/images/clients/clients_pic/desco.png') }}" alt="desco"></a></figure></div>
                    <div class="slide-item"><figure class="image-box"><a href="https://dpdc.gov.bd/" target="_blank"><img src="{{ asset('webassets/images/clients/clients_pic/dpdc-logo.png') }}" alt="dpdc"></a></figure></div>
                    <div class="slide-item"><figure class="image-box"><a href="http://nesco.gov.bd/" target="_blank"><img src="{{ asset('webassets/images/clients/clients_pic/nesco.png') }}" alt="nesco"></a></figure></div>
                    <div class="slide-item"><figure class="image-box"><a href="http://www.wzpdcl.org.bd/" target="_blank"><img src="{{ asset('webassets/images/clients/clients_pic/WZPDCL.jpg') }}" alt="WZPDCL"></a></figure></div>
                    <div class="slide-item"><figure class="image-box"><a href="https://www.bitopi-group.com/" target="_blank"><img src="{{ asset('webassets/images/clients/clients_pic/bitopigroup.jpg') }}" alt="bitopi"></a></figure></div>
                    <div class="slide-item"><figure class="image-box"><a href="https://www.dnb.com/business-directory/company-profiles.bulk_trade_international_ltd.a7098711b88bca7bc1c394db0545ad0e.html" target="_blank"><img src="{{ asset('webassets/images/clients/clients_pic/bulk_trade.jpg') }}" alt="bulk"></a></figure></div>
                    <div class="slide-item"><figure class="image-box"><a href="http://www.bpdb.gov.bd/" target="_blank"><img src="{{ asset('webassets/images/clients/clients_pic/bpdb.jpeg') }}" alt="bpdb"></a></figure></div>
                </div>
            </div>
        </div>
    </section>

    <!--Cases Section-->
    <section class="cases-section">
{{--        <div class="gradient-layer"></div>--}}

        <div class="auto-container">

            <div class="sec-title centered">
{{--                <div class="upper-text">Oculin Tech Services</div>--}}
                <h2><strong>Services</strong></h2>
{{--                <div class="lower-text">Sit amet consectetur adipisicing elitm sed eiusmod temp sed incididunt labore dolore magna aliquatenim veniam quis ipsum nostrud exer citation ullamco laboris.</div>--}}
            </div>

            <!--Carousel Box-->
            <div class="carousel-box">
                <div class="cases-carousel theme-carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 40, "autoheight":true, "lazyload":true, "nav": true, "dots": false, "autoplay": true, "autoplayTimeout": 7000, "smartSpeed": 700, "responsive":{ "0" :{ "items": "1" }, "991" :{ "items" : "1" } , "992":{ "items" : "2" }, "1024":{ "items" : "2" }}}'>
                    <!-- Slide Item -->
                    <div class="slide-item">
                        <!--Case Block-->
                        <div class="case-block">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <a href="#"><img src="http://oculintech.com/storage/app/public/services/July2020/shutterstock_596100563.jpg" alt="" title=""></a>
                                </figure>
                                <div class="content-box">
                                    <div class="title-box">
                                        <h4><a href="#">Strategy & Operations</a></h4>
{{--                                        <div class="sub-text">IT Networking</div>--}}

                                    </div>
                                    <div class="text-content">
                                        <div class="text">Eiusmod sed incididunt labore magna sed aliquatenim veniam ipsum nostrud exercit.</div>
                                        <div class="link-box"><a href="#">Show More <span class="arrow fa fa-arrow-right"></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide Item -->
                    <div class="slide-item">
                        <!--Case Block-->
                        <div class="case-block">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <a href="#"><img src="http://oculintech.com/storage/app/public/services/July2020/shutterstock_242852335.jpg" alt="" title=""></a>
                                </figure>
                                <div class="content-box">
                                    <div class="title-box">
                                        <h4><a href="#">Cloud, Data Lake, Analytics</a></h4>
{{--                                        <div class="sub-text">Artificial Intelligence</div>--}}
                                    </div>
                                    <div class="text-content">
                                        <div class="text">Eiusmod sed incididunt labore magna sed aliquatenim veniam ipsum nostrud exercit.</div>
                                        <div class="link-box"><a href="#">Show More<span class="arrow fa fa-arrow-right"></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide Item -->
                    <div class="slide-item">
                        <!--Case Block-->
                        <div class="case-block">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <a href="#"><img src="http://oculintech.com/storage/app/public/services/July2020/shutterstock_1010302885.jpg" alt="" title=""></a>
                                </figure>
                                <div class="content-box">
                                    <div class="title-box">
                                        <h4><a href="#">Technologies</a></h4>
{{--                                        <div class="sub-text">IT Networking</div>--}}
                                    </div>
                                    <div class="text-content">
                                        <div class="text">Eiusmod sed incididunt labore magna sed aliquatenim veniam ipsum nostrud exercit.</div>
                                        <div class="link-box"><a href="#">Show More<span class="arrow fa fa-arrow-right"></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!--End Carousel Box-->

{{--            <div class="bottom-text">--}}
{{--                <div class="text">We’re ready to discover and unlock your potential. <strong>Call us Today!</strong> &nbsp;<a href="tel:258-000-3694"><strong>258-000-3694</strong></a></div>--}}
{{--            </div>--}}

        </div>
    </section>


{{--    <div class="theme-separator"></div>--}}


    <!--Sponsors Section-->
{{--    <section class="sponsors-section">--}}
{{--        <div class="sec-title centered">--}}
{{--            <div class="upper-text">Clients</div>--}}
{{--            <h2><strong>Clients</strong></h2>--}}
{{--            <div class="lower-text">Sit amet consectetur adipisicing elitm sed eiusmod temp sed incididunt labore dolore magna aliquatenim veniam quis ipsum nostrud exer citation ullamco laboris.</div>--}}
{{--        </div>--}}
{{--        <div class="sponsors-outer">--}}
{{--            <!--Sponsors-->--}}
{{--            <div class="auto-container">--}}
{{--                <!--Sponsors Carousel-->--}}
{{--                <div class="sponsors-carousel theme-carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 30, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 500, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "2" }, "768" :{ "items" : "3" } , "800":{ "items" : "3" }, "1024":{ "items" : "4" }, "1200":{ "items" : "5" }}}'>--}}
{{--                    <div class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('webassets/images/clients/clients_pic/bitopi_adv.jpg') }}" alt="bitopi_adv"></a></figure></div>--}}
{{--                    <div class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('webassets/images/clients/clients_pic/bcc.jpeg') }}" alt="bcc"></a></figure></div>--}}
{{--                    <div class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('webassets/images/clients/clients_pic/BREB.png') }}" alt="breb"></a></figure></div>--}}
{{--                    <div class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('webassets/images/clients/clients_pic/desco.png') }}" alt="desco"></a></figure></div>--}}
{{--                    <div class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('webassets/images/clients/clients_pic/dpdc-logo.png') }}" alt="dpdc"></a></figure></div>--}}
{{--                    <div class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('webassets/images/clients/clients_pic/nesco.png') }}" alt="nesco"></a></figure></div>--}}
{{--                    <div class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('webassets/images/clients/clients_pic/WZPDCL.jpg') }}" alt="WZPDCL"></a></figure></div>--}}
{{--                    <div class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('webassets/images/clients/clients_pic/bitopigroup.jpg') }}" alt="bitopi"></a></figure></div>--}}
{{--                    <div class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('webassets/images/clients/clients_pic/bulk_trade.jpg') }}" alt="bulk"></a></figure></div>--}}
{{--                    <div class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('webassets/images/clients/clients_pic/bpdb.jpeg') }}" alt="bpdb"></a></figure></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

{{--    <div class="theme-separator"></div>--}}


    <!--Testimonials Section-->
    <section class="testimonials-section">
{{--        <div class="image-layer" style="background-image: url({{ url('webassets/images/background/image-2.jpg') }});"></div>--}}
        <div class="image-layer" style="background-image: url({{ url('https://assets.website-files.com/5980b84b2dea980001263e02/5d277d2ab8cff8ea3cf56731_shutterstock_1178215546.jpg') }});"></div>

        <div class="auto-container">
            <div class="carousel-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="testimonial-carousel theme-carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 5000, "smartSpeed": 500, "responsive":{ "0" :{ "items": "1" }, "768" :{ "items" : "1" } , "1024":{ "items" : "1" }}}'>
                    <!--Slide-->
                    <div class="slide-item">
                        <div class="inner">
                            <div class="icon-box"><span class="flaticon-chat-2"></span></div>
                            <div class="title">Speech of Board of Director(s)</div>
{{--                            <div class="text">Quis nostrud exercitation duis aute irure dolor reprehenderit voluptate. velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecas cupidatat non proident, sunt in culpa qui officia deserunt.</div>--}}
                            <div class="text">This is sample text. This is sample text. This is sample text. This is sample text. This is sample text. This is sample text. This is sample text. This is sample text. This is sample text. This is sample text. </div>
                            <div class="info">
                                <div class="name">Miran Ali</div>
                                <div class="designation">Chairman</div>
                            </div>
                        </div>
                    </div>
                    <!--Slide-->
                    <div class="slide-item">
                        <div class="inner">
                            <div class="icon-box"><span class="flaticon-chat-2"></span></div>
                            <div class="title">Speech of Board of Director(s)</div>
                            {{--                            <div class="text">Quis nostrud exercitation duis aute irure dolor reprehenderit voluptate. velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecas cupidatat non proident, sunt in culpa qui officia deserunt.</div>--}}
                            <div class="text">This is sample text. This is sample text. This is sample text. This is sample text. This is sample text. This is sample text. This is sample text. This is sample text. This is sample text. This is sample text. </div>
                            <div class="info">
                                <div class="name">Sadab Sajid</div>
                                <div class="designation">Managing Director</div>
                            </div>
                        </div>
                    </div>
                    <!--Slide-->
                    <div class="slide-item">
                        <div class="inner">
                            <div class="icon-box"><span class="flaticon-chat-2"></span></div>
                            <div class="title">Speech of Board of Director(s)</div>
                            {{--                            <div class="text">Quis nostrud exercitation duis aute irure dolor reprehenderit voluptate. velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecas cupidatat non proident, sunt in culpa qui officia deserunt.</div>--}}
                            <div class="text">This is sample text. This is sample text. This is sample text. This is sample text. This is sample text. This is sample text. This is sample text. This is sample text. This is sample text. This is sample text. </div>
                            <div class="info">
                                <div class="name">K Rumman Akhter</div>
                                <div class="designation">Chief Technical Officer</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <!--Separator-->
{{--    <div class="theme-separator"></div>--}}

    <!--News Section-->
    <section class="news-section">
        <div class="auto-container">

            <div class="sec-title centered">
{{--                <div class="upper-text">Oculin Tech Realm</div>--}}
                <h2>Latest News & Media</h2>
{{--                <div class="lower-text">Sit amet consectetur adipisicing elitm sed eiusmod temp sed incididunt labore dolore magna aliquatenim veniam quis ipsum nostrud exer citation ullamco laboris.</div>--}}
            </div>
            <div class="upper-row">
                <div class="row clearfix">
                    <!--News Block-->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image-box">
                                <a href="#"><img src="https://media-exp1.licdn.com/dms/image/C5622AQEBsGJjmkYLfw/feedshare-shrink_1280/0/1651032728250?e=1657152000&v=beta&t=BxKliGKSqZtFBVzrMTsBAK-Zg0VokhIFd62rJU12KbE" alt="" title=""></a>
                            </div>
                            <div class="lower-box">
{{--                                <div class="category">IT Projects</div>--}}
                                <h3><a href="#">Contract Signing with Sakti Foundation</a></h3>
                                <div class="meta-info">
                                    <ul class="clearfix">
                                        <li><a href="#">By Admin</a></li>
                                        <li><a href="#">APRIL 26, 2022</a></li>
                                    </ul>
                                </div>
                                <div class="more-link"><a href="#"><span class="fa fa-arrow-right"></span></a></div>
                            </div>
                        </div>
                    </div>
                    <!--News Block-->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="image-box">
                                <a href="#"><img src="https://media-exp1.licdn.com/dms/image/C4E22AQHyZJm-08TVrw/feedshare-shrink_1280/0/1644990178180?e=1657152000&v=beta&t=WvDfyznSp87ZMf2t8LHdJpqD_bi-vNowo66B_eRhhAY" alt="" title=""></a>
                            </div>
                            <div class="lower-box">
{{--                                <div class="category">Mobile Apps</div>--}}
                                <h3><a href="#">Official Tour</a></h3>
                                <div class="meta-info">
                                    <ul class="clearfix">
                                        <li><a href="#">By Admin</a></li>
                                        <li><a href="#">FEBRUARY 10, 2022</a></li>
                                    </ul>
                                </div>
                                <div class="more-link"><a href="#"><span class="fa fa-arrow-right"></span></a></div>
                            </div>
                        </div>
                    </div>
                    <!--News Block-->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="image-box">
                                <a href="#"><img src="https://media-exp1.licdn.com/dms/image/C4E22AQEUDSuvvlzwjw/feedshare-shrink_1280/0/1640172025601?e=1657152000&v=beta&t=MyvGXn3KTUhonWwgnaepkV3KFrOcPHneH8meogz3YI4" alt="" title=""></a>
                            </div>
                            <div class="lower-box">
{{--                                <div class="category">Development</div>--}}
                                <h3><a href="#">DESCO Contract Signing</a></h3>
                                <div class="meta-info">
                                    <ul class="clearfix">
                                        <li><a href="#">By Admin</a></li>
                                        <li><a href="#">DECEMBER 4, 2021</a></li>
                                    </ul>
                                </div>
                                <div class="more-link"><a href="#"><span class="fa fa-arrow-right"></span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


{{--    <div class="theme-separator"></div>--}}

    <!-- Main Footer -->
    <footer class="main-footer" style="background: #edf5f8;">
        <div class="top-pattern-layer-dark"></div>
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="column col-xl-4 col-lg-12 col-md-12 col-sm-12">

                        <div class="footer-widget about-widget">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <div class="widget-title">
                                        <h4>CORPORATE OFFICE</h4>
                                    </div>
                                    <div class="info">
                                        <ul>
                                            <li>
                                                <b>Address</b> : Bay's 23 Gulshan Avenue, Plot # 6, Floor - 10,
                                                <br>&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;Gulshan - 1, Dhaka - 1212, Bangladesh.
                                            </li>
                                            <li>
                                                <b>Call us:</b> &ensp;
                                                <a href="#">: +880 9612 113 300</a>
                                            </li>
                                            <li>
                                                <b>Email</b> &emsp;
                                                <a href="#" class="text-decoration-none">
                                                    : info@oculintech.com
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="column col-xl-4 col-lg-12 col-md-12 col-sm-12">

                        <div class="footer-widget about-widget">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <div class="widget-title">
                                        <h4>REGISTERED OFFICE</h4>
                                    </div>
                                    <div class="info">
                                        <ul>
                                            <li>
                                                <b>Address</b> : 822/3, Begum Rokeya Sharani,
                                                <br>&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;Mirpur, Dhaka-1216, Bangladesh.
                                            </li>
                                            <li>
                                                <b>Call us:</b> &ensp;
                                                <a href="#">: +880 9612 113 300</a></li>
                                            <li>
                                                <b>Email</b> &emsp;
                                                <a href="#" class="text-decoration-none">
                                                    : info@oculintech.com
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="column col-xl-4 col-lg-12 col-md-12 col-sm-12">

                        <div class="footer-widget about-widget">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <div class="widget-title">
                                        <h4>PROJECT OFFICE</h4>
                                    </div>
                                    <div class="info">
                                        <ul>
                                            <li>
                                                <b>Address</b> : House # 28, Road # 02, Niketon,
                                                <br>&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;Gulshan - 01, Dhaka - 1212, Bangladesh.
                                            </li>
                                            <li>
                                                <b>Call us:</b> &ensp;
                                                <a href="#" style="text-decoration: none">: +880 9612 113 300</a></li>
                                            <li>
                                                <b>Email</b> &emsp;
                                                <a href="#" class="text-decoration-none">
                                                    : info@oculintech.com
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
                <div class="row clearfix">
                    <div class="column col-lg-12 col-md-12 col-sm-12">
                        <!--Newsletter-->
                        <div class="social-links">
{{--                            <div class="title text">Get the latest news & updates</div>--}}
                            <ul class="clearfix">
                                <li>
                                    <a href="https://www.facebook.com/OculinTech" target="_blank">
                                        <span class="fab fa-facebook-square" style="font-size: 25px;"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://bd.linkedin.com/company/oculin" target="_blank">
                                        <span class="fab fa-linkedin" style="font-size: 25px;"></span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="inner">
                    <div class="copyright">&copy; {{date('Y')}} <strong>Oculin Tech BD Ltd.</strong>. All rights reserved. <a href="#" class="text-decoration-none">Privacy Policy</a></div>
                </div>
            </div>
        </div>

    </footer>

</div>
<!--End pagewrapper-->

<script src="{{ asset('webassets/js/jquery.js') }}"></script>
<script src="{{ asset('webassets/js/popper.min.js') }}"></script>
<script src="{{ asset('webassets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('webassets/js/jquery-ui.js') }}"></script>
<script src="{{ asset('webassets/js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('webassets/js/owl.js') }}"></script>
<script src="{{ asset('webassets/js/scrollbar.js') }}"></script>
<script src="{{ asset('webassets/js/validate.js') }}"></script>
<script src="{{ asset('webassets/js/appear.js') }}"></script>
<script src="{{ asset('webassets/js/wow.js') }}"></script>
<script src="{{ asset('webassets/js/custom-script.js') }}"></script>

</body>
</html>
