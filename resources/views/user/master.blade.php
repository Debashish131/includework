<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta description -->
    <meta name="description"
          content="Include Work is a Leading Digital Marketing Agency. Which provides Various Online Marketing services like Brand Promotion, SEO, SMM, Website Designing">
    <meta name="author" content="Include Work">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="Include Work"/> <!-- website name -->
    <meta property="og:site" content="www.includework.com"/> <!-- website link -->
    <meta property="og:title" content="Include Work"/> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="Include work is one of the best outsourcing company in Bangladesh, uses various tools and
software to provide the quality of services. With those professional software G IT desk use some
software to maintain their accounting activities and employees efficiencies"/>
    <!-- description shown in the actual shared post -->
    <meta property="og:image" content=""/> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content=""/> <!-- where do you want your post to link to -->
    <meta property="og:type" content="portoflio"/>

    <!--title-->
    <title>@yield('title') - {{ config('app.name', 'Home') }}</title>

    <!--favicon icon-->
    <link rel="icon" href="img/favicon.png" type="png" sizes="16x16">

    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7COpen+Sans:400,600&amp;display=swap"
          rel="stylesheet">

    <!--Bootstrap css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--Magnific popup css-->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!--Themify icon css-->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!--Fontawesome icon css-->
    <link rel="stylesheet" href="css/all.min.css">
    <!--animated css-->
    <link rel="stylesheet" href="css/animate.min.css">
    <!--ytplayer css-->
    <link rel="stylesheet" href="css/jquery.mb.YTPlayer.min.css">
    <!--Owl carousel css-->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!--custom css-->
    <link rel="stylesheet" href="css/style.css">
    <!--responsive css-->
    <link rel="stylesheet" href="css/responsive.css">

    @stack('css')

</head>
<body>

<!--loader start-->
<!--loader start-->
<div id="preloader">
    <div class="loader1">
        <span></span>
        <span></span>
        {{--        <span></span>--}}
        {{--        <span></span>--}}
        {{--        <span></span>--}}
    </div>
</div>
<!--loader end-->

<!--loader end-->

<!--header section start-->
<header class="header">
    <!--topbar start-->

    {{--    Top nav bar  24x7 Technical Support--}}
    @yield('navbar')
    <nav class="navbar navbar-expand-lg fixed-top white-bg">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="img/logo-white1.png" alt="logo" class="img-fluid" width="100" height="30"/>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ti-menu"></span>
            </button>
            <div class="collapse navbar-collapse h-auto" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto menu">
                    <li><a href="/"> Home</a>

                    </li>
                    <li><a href="/aboutUs">About Us</a></li>

                    <li><a href="/service" class="dropdown-toggle">Services</a>

                        <ul>

                            <li><a href="/service_details1" class="dropdown-toggle-inner">Market Research</a>
                            </li>
                            <li><a href="/service_details2" class="dropdown-toggle-inner">Content Marketing</a>
                            </li>
                            <li><a href="/service_details3" class="dropdown-toggle-inner">Digital Marketing</a>
                            </li>
                            <li><a href="/service_details4" class="dropdown-toggle-inner">Social Media Management</a>
                            </li>
                            <li><a href="/service_details5" class="dropdown-toggle-inner">Web Research</a>
                            </li>
                            <li><a href="/service_details6" class="dropdown-toggle-inner">Lead Generation</a>
                            </li>
                            <li><a href="/service_details8" class="dropdown-toggle-inner">Data Entry</a>
                            </li>
                            <li><a href="/service_details9" class="dropdown-toggle-inner">Graphic Design</a>
                            </li>
                        </ul>

                    </li>

                    <li><a href="/review">Review Page</a></li>

                    <li><a href="#" class="dropdown-toggle">Company</a>

                        <ul>
                            <li><a href="/contact">Contact Us</a></li>

                            <li><a href="/project">Case Study</a></li>
                            <li><a href="/team_member">Our Team Members</a></li>
                            <li><a href="/careerCircular">Career</a></li>
                        </ul>

                    </li>
                    <li><a href="/contact" class="btn secondary-solid-btn check-btn">Message Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!--topbar end-->


{{--content part start--}}
@yield('maincontent')

{{--content end--}}


<!--footer section start-->
<footer class="footer-section">
    <!--footer top start-->
    <div class="footer-top gradient-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-9">
                    <div class="row footer-top-wrap">
                        <div class="col-md-4 col-sm-6">
                            <div class="footer-nav-wrap text-white">
                                <ul class="nav flex-column">
                                    <p style="font-size: small">Our mission is to remain a successful entrepreneurial,
                                        diversified, and socially
                                        responsible
                                        growth company that provides high-quality value-added services for our
                                        clients.</p>
                                    <img src="img/logo-black1.png" alt="logo" class="text-white" height="80"
                                         width="150">
                                </ul>

                            </div>

                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="footer-nav-wrap text-white">
                                <h4 class="text-white">COMPANY</h4>
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="/service">About Our Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/careerCircular">Check Our Careers</a>
                                    </li>

                                </ul>

                            </div>

                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="footer-nav-wrap text-white">
                                <h4 class="text-white">LEGAL</h4>
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="/privacy">Legal Information</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/privacy">Privacy Policy</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/contact">Report Abuse</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/service">Terms of Service</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="row footer-top-wrap mt-md-4 mt-sm-0 mt-lg-0">
                        <div class="col-12">
                            <div class="footer-nav-wrap text-white">
                                <h4 class="text-white">GET IN TOUCH</h4>
                                <ul class="get-in-touch-list">
                                    <li class="d-flex align-items-center py-2"><span
                                            class="fas fa-phone-alt mr-2"></span> <a
                                            href="tel:+8801916842929">+88 0191-6842929</a>
                                    </li>
                                    <li class="d-flex align-items-center py-2"><span
                                            class="fas fa-map-marker-alt mr-2"></span><a
                                            href="https://goo.gl/maps/ECHM3bxXGHEHxhJ79">Road-7,E Block,Kaderabad
                                            Housing,Mohammmadpur,Dhaka 1207</a>
                                    </li>
                                    <li class="d-flex align-items-center py-2"><span
                                            class="fas fa-envelope mr-2"></span> <a href="mailto:info@includeword.com">info@includework.com</a>
                                    </li>
                                    <div class="social mt-4">
                                        <ul class="list-unstyled social-list mb-0">
                                            <li class="list-inline-item tooltip-hover">
                                                <a href="https://www.facebook.com/includework" class="rounded"><span
                                                        class="ti-facebook"></span></a>
                                                <div class="tooltip-item">Facebook</div>
                                            </li>
                                            <li class="list-inline-item tooltip-hover"><a
                                                    href="https://twitter.com/includework" class="rounded"><span
                                                        class="ti-twitter"></span></a>
                                                <div class="tooltip-item">Twitter</div>
                                            </li>
                                            <li class="list-inline-item tooltip-hover"><a
                                                    href="https://www.linkedin.com/company/includework"
                                                    class="rounded"><span
                                                        class="ti-linkedin"></span></a>
                                                <div class="tooltip-item">Linkedin</div>
                                            </li>
                                            <li class="list-inline-item tooltip-hover"><a
                                                    href="https://www.instagram.com/includework/" class="rounded"><span
                                                        class="ti-instagram"></span></a>
                                                <div class="tooltip-item">instagram</div>
                                            </li>
                                        </ul>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer top end-->

    <!--footer copyright start-->
    <div class="footer-bottom gray-light-bg py-2">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-5 col-lg-5">
                    <p class="copyright-text pb-0 mb-0">Copyrights ©

                        <script>document.write(new Date().getFullYear());</script>

                        . All
                        rights reserved by IncludeWork
                </div>
                <div class="col-md-7 col-lg-6 d-none d-md-block d-lg-block">
                    <ul class="list-inline policy-nav text-right social-list">
                        <li class="list-inline-item"><a href="/privacy">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="/privacy">Terms & Conditions</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--footer copyright end-->
</footer>
<!--footer section end-->

<!--bottom to top button start-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="ti-angle-up"></span>
</button>
<!--bottom to top button end-->


<!--jQuery-->
<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="js/jquery-3.5.0.min.js"></script>
<!--Popper js-->
<script src="js/popper.min.js"></script>
<!--Bootstrap js-->
<script src="js/bootstrap.min.js"></script>
<!--Magnific popup js-->
<script src="js/jquery.magnific-popup.min.js"></script>
<!--jquery easing js-->
<script src="js/jquery.easing.min.js"></script>
<!--jquery ytplayer js-->
<script src="js/jquery.mb.YTPlayer.min.js"></script>
<!--Isotope filter js-->
<script src="js/mixitup.min.js"></script>
<!--wow js-->
<script src="js/wow.min.js"></script>
<!--owl carousel js-->
<script src="js/owl.carousel.min.js"></script>
<!--countdown js-->
<script src="js/jquery.countdown.min.js"></script>
<!--jquery easypiechart-->
<script src="js/jquery.easy-pie-chart.js"></script>
<!--custom js-->
<script src="js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    setTimeout(function () {
        $('.loader_bg').fadeToggle();
    }, 1500);
</script>
@stack('js')

</body>


</html>
