@extends('user.master')
@section('title','Main')
@section('navbar')
@endsection


@section('maincontent')
    <!--body content wrap start-->
    <div class="main">

        <!--hero section start-->
        <section class="ptb-70 gradient-bg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12 col-lg-5">
                        <div class="hero-slider-content text-white pt-5">
                            <strong>Digital Marketing</strong>
                            <h1 class="text-white">Grow Your Business With Include Work</h1>
                            <p class="lead">Holisticly procrastinate mission-critical convergence with reliable customer
                                service. Assertively underwhelm for impactful solutions. </p>

                            <div class="action-btns mt-3">
                                <a href="#" class="btn secondary-solid-btn">Start Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-7">
                        <div class="image-wrap pt-5">
                            <img src="img/t1-hero-img.svg" class="img-fluid custom-width" alt="hero"/>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--hero section end-->

        <!--promo section start-->
        <section class="promo-section ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-lg-4">
                        <a href="#">
                            <div class="single-promo-2 single-promo-hover rounded text-center white-bg p-5 h-100">
                                <div class="circle-icon">
                                    <span class="ti-light-bulb text-white"></span>
                                </div>
                                <h5>Market Research</h5>
                                <p>Increase sales by showing true dynamics of your website.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <a href="#">
                            <div class="single-promo-2 single-promo-hover rounded text-center white-bg p-5 h-100">
                                <div class="circle-icon">
                                    <span class="ti-dashboard text-white"></span>
                                </div>
                                <h5>Content Marketing</h5>
                                <p>Build your online store’s trust using Social Proof &amp; Urgency.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <a href="#">
                            <div class="single-promo-2 single-promo-hover rounded text-center white-bg p-5 h-100">
                                <div class="circle-icon">
                                    <span class="ti-email text-white"></span>
                                </div>
                                <h5>Email Marketing</h5>
                                <p>Realize importance of social proof in customer’s purchase decision.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!--promo section end-->

        <!--about us section start-->
        <section class="about-us-section ptb-100 gray-light-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="about-us-img">
                            <img src="img/about-us-img.svg" alt="about us include work"
                                 class="img-fluid about-single-img">
                            <img src="img/about-us-img-bg.svg" alt="about bg include work" class="about-us-bg">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="about-us-content-wrap">
                            <strong class="color-secondary">About Us</strong>
                            <h3>Grow Your Business With Experienced SEO Experts</h3>
                            <span class="animate-border mb-4"></span>
                            <p>Globally transition proactive niches without progressive processes. Objectively syndicate
                                enterprise-wide services through timely metrics. </p>
                            <ul class="list-unstyled tech-feature-list">
                                <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>Creative</strong>
                                    Websites Design
                                </li>
                                <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>Accounting</strong>
                                    Procedures Guidebook
                                </li>
                                <li class="py-1"><span
                                        class="ti-control-forward mr-2 color-secondary"></span><strong>Cost</strong>
                                    Accounting Fundamentals
                                </li>
                                <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>Corporate</strong>
                                    Cash Management
                                </li>
                                <li class="py-1"><span
                                        class="ti-control-forward mr-2 color-secondary"></span><strong>SEO</strong>
                                    Optimization Services
                                </li>
                                <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>Company</strong>
                                    Brand Solutions
                                </li>
                                <li class="py-1"><span
                                        class="ti-control-forward mr-2 color-secondary"></span><strong>45-Day</strong>
                                    Money-Back Guarantee
                                </li>
                            </ul>
                            <div class="row mt-4">
                                @foreach($project as $val)
                                    <div class="col-4">
                                        <div class="counter-single">
                                            <h2 class="mb-0 color-secondary">{{$val->total_project}}</h2>
                                            <strong>Total Project</strong>
                                        </div>
                                    </div>


                                    <div class="col-4">
                                        <div class="counter-single">
                                            <h2 class="mb-0 color-secondary">{{$val->total_customer}}</h2>
                                            <strong>Total Customer</strong>
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <div class="counter-single">
                                            <h2 class="mb-0 color-secondary">{{$val->total_coffecup}}</h2>
                                            <strong>Total Coffee Cup</strong>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                            <div class="action-btns mt-4">
                                <a href="#" class="btn secondary-solid-btn mr-3">Start Now</a>
                                <a href="#" class="btn secondary-outline-btn">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--about us section end-->


        <!--services section start-->
        <section class="services-section ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="section-heading text-center mb-5">
                            <strong class="color-secondary">Our Services</strong>
                            <h2>What Can We Do For You</h2>
                            <span class="animate-border mr-auto ml-auto mb-4"></span>
                            <p class="lead">Efficiently aggregate end-to-end core competencies without maintainable
                                ideas.
                                Dynamically
                                foster tactical solutions without enabled value.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($service as $val)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div
                                class="services-single text-center p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded">
                                <span class="ti-shopping-cart icon-lg color-secondary d-block mb-4"></span>
                                <h5>{{$val->service_name}}</h5>
                                <p class="mb-0">{{$val->service_short}}</p>
                                <a href="/service_details{{$val->id}}" target="_blank" class="detail-link mt-4">Read
                                    more <span
                                        class="ti-arrow-right"></span></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!--services section end-->

        <!--why choose us section start-->
        <section class="why-choose-us ptb-100">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-6 col-lg-5">
                        <div class="why-choose-us-wrap">
                            <strong class="color-secondary">Why Choose Us</strong>
                            <h3>Best Consulting Every For Business</h3>
                            <span class="animate-border mb-4"></span>
                            <p>Globally reinvent cross-unit human capital whereas virtual catalysts for change.
                                Assertively
                                network accurate methods of empowerment rather than client-centered improvements.</p>

                            <div class="skill-content-wrap">
                                @foreach($roundService as $val)
                                    <div class="progress-item">
                                        <div class="progress-title">
                                            <h6>{{$val->keyword}}<span class="float-right"><span
                                                        class="progress-number">{{$val->percentage}}</span>%</span>
                                            </h6>
                                        </div>
                                        <div class="progress">
                                        <span style="width:{{$val->percentage}}%;"><span
                                                class="progress-line"></span></span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="image-wrap">
                            <img src="img/why-choose-us.png" alt="why choose us include work" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--why choose us section end-->

        <!--work process section start-->
        <section class="work-process-section ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-9">
                        <div class="section-heading text-center">
                            <strong class="color-secondary">Work Process</strong>
                            <h2>We follow Few Steps</h2>
                            <span class="animate-border mr-auto ml-auto mb-4"></span>
                            <p class="lead">Globally reinvent cross-unit human capital whereas virtual catalysts for
                                change.
                                Assertively
                                network accurate methods of empowerment rather than client-centered improvements.</p>
                        </div>
                    </div>
                </div>
                <!-- ============ step 1 =========== -->
                <div class="row mt-5">
                    <div class="col-md-12 col-lg-5 process-width">
                        <div class="process-box process-left">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="process-step-number">
                                        <strong>Step</strong>
                                        <h2 class="m-0">01</h2>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <h5>Technical Audit</h5>
                                    <p>Monotonectally optimize granular quality vectors vis-a-vis interdependent.</p>
                                </div>
                            </div>
                            <div class="process-line-l"></div>
                        </div>
                    </div>
                    <div class="col-md-2 process-none"></div>
                    <div class="col-md-5 col-md-5 col-lg-5 process-none">
                        <div class="process-point-right"></div>
                    </div>
                </div>
                <!-- ============ step 2 =========== -->
                <div class="row">
                    <div class="col-md-5 col-lg-5 process-none">
                        <div class="process-point-left"></div>
                    </div>
                    <div class="col-md-2 process-none"></div>
                    <div class="col-md-12 col-lg-5 process-width">
                        <div class="process-box process-right">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="process-step-number">
                                        <strong>Step</strong>
                                        <h2 class="m-0">02</h2>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <h5>Technical SEO</h5>
                                    <p>Completely synthesize one-to-one interfaces vis-a-vis client-focused
                                        alignments.</p>
                                </div>
                            </div>
                            <div class="process-line-r"></div>
                        </div>
                    </div>

                </div>
                <!-- ============ step 3 =========== -->
                <div class="row">
                    <div class="col-md-12 col-lg-5 process-width">
                        <div class="process-box process-left">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="process-step-number">
                                        <strong>Step</strong>
                                        <h2 class="m-0">03</h2>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <h5>Select Keywords</h5>
                                    <p>Progressively streamline cooperative sources whereas stand-alone channels.</p>
                                </div>
                            </div>
                            <div class="process-line-l"></div>
                        </div>
                    </div>
                    <div class="col-md-2 process-none"></div>
                    <div class="col-md-5 col-lg-5 process-none">
                        <div class="process-point-right"></div>
                    </div>
                </div>
                <!-- ============ step 4 =========== -->
                <div class="row">
                    <div class="col-md-5 col-lg-5 process-none">
                        <div class="process-point-left"></div>
                    </div>
                    <div class="col-md-2 process-none"></div>
                    <div class="col-md-12 col-lg-5 process-width">
                        <div class="process-box process-right">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="process-step-number">
                                        <strong>Step</strong>
                                        <h2 class="m-0">04</h2>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <h5>Demographics</h5>
                                    <p>Objectively underwhelm one-to-one deliverables whereas impactful solutions. </p>
                                </div>
                            </div>
                            <div class="process-line-r"></div>
                        </div>
                    </div>


                </div>
                <!-- ============ step 3 =========== -->
                <div class="row">
                    <div class="col-md-12 col-lg-5 process-width">
                        <div class="process-box process-left">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="process-step-number">
                                        <strong>Step</strong>
                                        <h2 class="m-0">05</h2>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <h5>Engine Ranking</h5>
                                    <p>Interactively seize innovative platforms vis-a-vis ubiquitous portals.</p>
                                </div>
                            </div>
                            <div class="process-line-l"></div>
                        </div>
                    </div>
                    <div class="col-md-2 custom-none"></div>
                    <div class="col-md-5 col-lg-5 custom-none">
                        <div class="process-point-right process-last"></div>
                    </div>
                </div>
                <!-- ============ -->
            </div>
        </section>
        <!--work process section end-->

        <!--call to action section start-->
        <section class="call-to-action-video">
            <div class="row m-0">
                <div class="col-lg-6 col-md-12 p-0">
                    <div class="free-trial-image text-center">
                        <img src="img/cta-2-girl-img.jpg" alt="video of include work" class="img-fluid">
                        <a href="https://www.youtube.com/watch?v=td7NqaEXLDA"
                           class="popup-youtube video-play-icon white-bip shadow"><span class="ti-control-play"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 p-0">
                    <div class="free-trial-content text-white">
                        <h2 class="text-white">Best Consulting Every Business</h2>
                        <p>Interactively evisculate performance based ROI whereas premier mindshare. Dramatically matrix
                            real-time convergence rather than empowered manufactured products.</p>
                        <a href="#" class="btn primary-solid-btn mt-3">Start Now</a>
                    </div>
                </div>
            </div>
        </section>
        <!--call to action section end-->

        <!--outstanding section start-->
        <section class="outstanding-section ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-1">
                            <strong class="color-secondary">Our Expertise</strong>
                            <h2>Outstanding Experience</h2>
                            <span class="animate-border mr-auto ml-auto mb-4"></span>
                            <p class="lead">Distinctively grow go forward manufactured products and optimal networks.
                                Enthusiastically
                                disseminate user-centric outsourcing revolutionary</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="feature-tabs-wrap">
                            <ul class="nav nav-tabs border-bottom-0 feature-tabs feature-tabs-center d-flex justify-content-center"
                                data-tabs="tabs">
                                <li class="nav-item">
                                    <a class="nav-link text-center" href="#feature-tab-1"
                                       data-toggle="tab">
                                        <span class="ti-announcement icon-sm"></span>
                                        <h6 class="mb-0">Digital Marketing</h6>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-center" href="#feature-tab-2"
                                       data-toggle="tab">
                                        <span class="ti-light-bulb icon-sm"></span>
                                        <h6 class="mb-0">SEO Services</h6>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-center active" href="#feature-tab-3"
                                       data-toggle="tab">
                                        <span class="ti-email icon-sm"></span>
                                        <h6 class="mb-0">Email Marketing</h6>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-center" href="#feature-tab-4"
                                       data-toggle="tab">
                                        <span class="ti-shield icon-sm"></span>
                                        <h6 class="mb-0">Social Media</h6>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-center" href="#feature-tab-5"
                                       data-toggle="tab">
                                        <span class="ti-vector icon-sm"></span>
                                        <h6 class="mb-0">Web Design</h6>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content feature-tab-content">
                                <div class="tab-pane mt-5" id="feature-tab-1">
                                    <div class="row justify-content-around">
                                        <div class="col-md-12 col-lg-5">
                                            <div class="about-content-right mb-md-4 mb-lg-0 my-md-3 my-lg-3 my-sm-0">
                                                <p>Objectively productivate installed base technology whereas user
                                                    friendly
                                                    ROI.
                                                    Phosfluorescently innovate functionalized potentialities
                                                    revolutionize
                                                    client-based applications.</p>

                                                <p>Holisticly utilize emerging leadership skills whereas multifunctional
                                                    customer service. Energistically functional bandwidth without
                                                    granular
                                                    mindshare. Monotonectally visualize user-centric methodologies
                                                    low-risk.</p>

                                                <ul class="list-unstyled tech-feature-list">
                                                    <li class="py-1"><span
                                                            class="ti-control-forward mr-2 color-secondary"></span><strong>Corporate</strong>
                                                        Cash Management
                                                    </li>
                                                    <li class="py-1"><span
                                                            class="ti-control-forward mr-2 color-secondary"></span><strong>SEO</strong>
                                                        Optimization Services
                                                    </li>
                                                    <li class="py-1"><span
                                                            class="ti-control-forward mr-2 color-secondary"></span><strong>Company</strong>
                                                        Brand Solutions
                                                    </li>
                                                </ul>

                                                <a href="/contact" class="mt-4 btn secondary-solid-btn">Contact With Us</a>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-6">
                                            <div class="img-wrap my-md-3 my-lg-3 my-sm-0">
                                                <img src="img/about-1.jpg" alt="about include work"
                                                     class="img-fluid rounded shadow-sm">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane mt-5" id="feature-tab-2">
                                    <div class="row align-items-center justify-content-between">
                                        <div class="col-md-6 col-lg-5">
                                            <div class="why-choose-us-wrap">
                                                <h3>Best Consulting Every For Business</h3>
                                                <p>Globally reinvent cross-unit human capital whereas virtual catalysts
                                                    for
                                                    change. Assertively
                                                    network accurate methods of empowerment rather than client-centered
                                                    improvements.</p>
                                                <ul class="list-with-icon">
                                                    <li class="d-flex align-items-start">
                                                        <img src="img/increase.svg" width="35" class="mr-3"
                                                             alt="list icon of include work">
                                                        <div class="list-icon-info">
                                                            <strong>Increased Traffic</strong>
                                                            <p>Conveniently provide access to diverse sources vis-a-vis
                                                                team
                                                                building customer service. </p>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex align-items-start">
                                                        <img src="img/search-engine.svg" width="35" class="mr-3"
                                                             alt="list icon of include work">
                                                        <div class="list-icon-info">
                                                            <strong>Site Optimisation</strong>
                                                            <p>Efficiently fashion ethical customer service with highly
                                                                efficient methods of empowerment. </p>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex align-items-start">
                                                        <img src="img/interface.svg" width="35" class="mr-3"
                                                             alt="list icon of include work">
                                                        <div class="list-icon-info">
                                                            <strong>Page Rankings</strong>
                                                            <p>Quickly fashion high-quality innovation for cutting-edge
                                                                sources assertively reinvent inexpensive. </p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="image-wrap">
                                                <img src="img/t6-hero-img1.svg" alt="why choose us include work"
                                                     class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane active mt-5" id="feature-tab-3">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="image-wrap">
                                                <img src="img/tab-img.png" alt="email section of include work"
                                                     class="img-fluid m-auto">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="content-wrap">
                                                <h3>Grow Your Business With Experienced SEO Experts</h3>
                                                <p>Intrinsicly recaptiualize alternative internal or "organic" sources
                                                    for
                                                    inexpensive outsourcing. Monotonectally create sustainable
                                                    applications
                                                    before premier vortals. Holisticly productivate stand-alone value
                                                    and
                                                    cost effective users. </p>
                                                <p>Holisticly syndicate cooperative ideas after pandemic human capital.
                                                    Professionally provide access to bricks-and-clicks functionalities
                                                    for
                                                    visionary customer service. Completely reconceptualize cross-media
                                                    data
                                                    for frictionless architectures. </p>

                                                <div class="action-btns mt-4">
                                                    <a href="#" class="btn secondary-solid-btn mr-3">Start Now</a>
                                                    <a href="#" class="btn secondary-outline-btn">Learn More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane mt-5" id="feature-tab-4">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="content-wrap">
                                                <h3>Grow Your Business With Experienced SEO Experts</h3>
                                                <p>Intrinsicly recaptiualize alternative internal or "organic" sources
                                                    for
                                                    inexpensive outsourcing. Monotonectally create sustainable
                                                    applications
                                                    before premier vortals. Holisticly productivate stand-alone value
                                                    and
                                                    cost effective users. </p>
                                                <p>Holisticly syndicate cooperative ideas after pandemic human capital.
                                                    Professionally provide access to bricks-and-clicks functionalities
                                                    for
                                                    visionary customer service. Completely reconceptualize cross-media
                                                    data
                                                    for frictionless architectures. </p>

                                                <div class="action-btns mt-4">
                                                    <a href="#" class="btn secondary-solid-btn mr-3">Start Now</a>
                                                    <a href="#" class="btn secondary-outline-btn">Learn More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="image-wrap">
                                                <img src="img/tab-img.png" alt="email section of include work"
                                                     class="img-fluid m-auto">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane mt-5" id="feature-tab-5">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <div
                                                class="services-single p-5 my-md-3 my-lg-3 my-sm-0 white-bg shadow-sm rounded">
                                                <span class="ti-announcement icon-lg color-primary d-block mb-4"></span>
                                                <h5>Marketing Services</h5>
                                                <p class="mb-0">Progressively empower business "outside the box"
                                                    thinking
                                                    with resource-leveling
                                                    partnerships.</p>
                                                <a href="services-details.html" target="_blank"
                                                   class="detail-link mt-4">Read
                                                    more <span class="ti-arrow-right"></span></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <div
                                                class="services-single p-5 my-md-3 my-lg-3 my-sm-0 white-bg shadow-sm rounded">
                                                <span class="ti-light-bulb icon-lg color-primary d-block mb-4"></span>
                                                <h5>Total SEO Services</h5>
                                                <p class="mb-0">Progressively empower business "outside the box"
                                                    thinking
                                                    with resource-leveling
                                                    partnerships.</p>
                                                <a href="services-details.html" target="_blank"
                                                   class="detail-link mt-4">Read
                                                    more <span class="ti-arrow-right"></span></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <div
                                                class="services-single p-5 my-md-3 my-lg-3 my-sm-0 white-bg shadow-sm rounded">
                                                <span
                                                    class="ti-headphone-alt icon-lg color-primary d-block mb-4"></span>
                                                <h5>24/7 Call Center Service</h5>
                                                <p class="mb-0">Progressively empower business "outside the box"
                                                    thinking
                                                    with resource-leveling
                                                    partnerships.</p>
                                                <a href="services-details.html" target="_blank"
                                                   class="detail-link mt-4">Read
                                                    more <span class="ti-arrow-right"></span></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <div
                                                class="services-single p-5 my-md-3 my-lg-3 my-sm-0 white-bg shadow-sm rounded">
                                                <span class="ti-bell icon-lg color-primary d-block mb-4"></span>
                                                <h5>Social Media Marketing</h5>
                                                <p class="mb-0">Progressively empower business "outside the box"
                                                    thinking
                                                    with resource-leveling
                                                    partnerships.</p>
                                                <a href="services-details.html" target="_blank"
                                                   class="detail-link mt-4">Read
                                                    more <span class="ti-arrow-right"></span></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <div
                                                class="services-single p-5 my-md-3 my-lg-3 my-sm-0 white-bg shadow-sm rounded">
                                                <span class="ti-briefcase icon-lg color-primary d-block mb-4"></span>
                                                <h5>Corporate Business</h5>
                                                <p class="mb-0">Progressively empower business "outside the box"
                                                    thinking
                                                    with resource-leveling
                                                    partnerships.</p>
                                                <a href="services-details.html" target="_blank"
                                                   class="detail-link mt-4">Read
                                                    more <span class="ti-arrow-right"></span></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <div
                                                class="services-single p-5 my-md-3 my-lg-3 my-sm-0 white-bg shadow-sm rounded">
                                                <span class="ti-vector icon-lg color-primary d-block mb-4"></span>
                                                <h5>Creative Consultancy</h5>
                                                <p class="mb-0">Progressively empower business "outside the box"
                                                    thinking
                                                    with resource-leveling
                                                    partnerships.</p>
                                                <a href="services-details.html" target="_blank"
                                                   class="detail-link mt-4">Read
                                                    more <span class="ti-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--outstanding section end-->

        <!--our work or portfolio section start-->
        <section class="our-portfolio-section ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-heading text-center mb-4">
                            <strong class="color-secondary">Previous Project</strong>
                            <h2>Our Case Studies</h2>
                            <span class="animate-border mr-auto ml-auto mb-4"></span>
                            <p class="lead">Dynamically pursue reliable convergence rather than 24/7 process
                                improvements.
                                Intrinsicly
                                develop end-to-end customer service without extensive data.</p>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center pb-2">
                            <button type="button" class="filter-btn" data-mixitup-control data-filter="all">Digital
                                Marketing
                            </button>
                            <button type="button" class="filter-btn" data-mixitup-control data-filter=".branding">
                                Marketing
                                Strategy
                            </button>
                            <button type="button" class="filter-btn" data-mixitup-control data-filter=".animation">
                                Content
                                Marketing
                            </button>
                            <button type="button" class="filter-btn" data-mixitup-control data-filter=".other">SEO
                                Services
                            </button>
                        </div>
                        <div class="portfolio-container" id="MixItUp">
                            @foreach($showCase as $val)
                                <div class="mix portfolio-item {{$val->categoryType}}" data-ref="mixitup-target">
                                    <div class="portfolio-wrapper">
                                        <a href="/project_details{{$val->id}}" target="_blank">
                                            <div class="content-overlay"></div>
                                            <img class="img-fluid" src="case/{{$val['image']}}" alt="portfolio"/>
                                            <div class="content-details fadeIn-bottom text-white">
                                                <h5 class="text-white mb-1">{{$val->hoverName}}</h5>
                                                <p>{{$val->category}}</p>
                                            </div>
                                        </a>
                                        <div class="text-center p-4">
                                            <h5 class="mb-1">{{$val->name}}</h5>
                                            <span>{{$val->tagName}}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="gap"></div>
                            <div class="gap"></div>
                            <div class="gap"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--our work or portfolio section end-->


        <!--testimonial section start-->
        <section class="testimonial-section ptb-100"
                 style="background: url('img/testimonial-bg.png')no-repeat center center / cover">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-5">
                        <div class="testimonial-heading text-white">
                            <h2 class="text-white">What Our Client Say About Us</h2>
                            <span class="animate-border mb-4"></span>
                            <p>Collaboratively actualize excellent schemas without effective models. Synergistically
                                engineer functionalized applications rather than backend e-commerce.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6">
                        <div class="testimonial-content-wrap">
                            <img src="img/testimonial-arrow-top.png" class="img-fluid testimonial-tb-shape shape-top"
                                 alt="testimonial shape">

                            <div class="owl-carousel owl-theme client-testimonial-1 custom-dot testimonial-shape">
                                @foreach($review as $val)
                                    <div class="item">

                                        <div class="testimonial-quote-wrap">
                                            <div class="media author-info mb-3">

                                                <div class="author-img mr-3">
                                                    <img src="team/{{$val['image']}}" alt="team image"
                                                         class="img-fluid">
                                                </div>
                                                <div class="media-body text-white">
                                                    <h5 class="mb-0 text-white">{{$val->reviewer_name}}</h5>
                                                    <span>{{$val->company}}</span>
                                                </div>

                                                <span class="fas fa-quote-right icon-md text-white"></span>
                                            </div>
                                            <div class="client-say text-white">
                                                <p>{{$val->quote}}</p>
                                            </div>
                                        </div>

                                    </div>
                                @endforeach
                            </div>

                            <img src="img/testimonial-arrow-bottom.png"
                                 class="img-fluid testimonial-tb-shape shape-bottom"
                                 alt="testimonial shape">
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--testimonial section end-->


        <!--client section start-->
        <div class="client-section ptb-100" style="background: url('img/client-bg.jpg')no-repeat center center / cover">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="client-heading-wrap">
                            <h3>Who are Happy With Services and Work</h3>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="client-para">
                            <p>Seamlessly administrate synergistic growth strategies and collaborative markets. Globally
                                empower inexpensive infomediaries after sustainable mindshare. Phosfluorescently brand
                                professional collaboration and idea-sharing without principle-centered interfaces. </p>
                        </div>
                    </div>
                </div>
                <!--clients logo start-->
                <div class="row align-items-center justify-content-center mb-4">
                    <div class="col-md-10 col-lg-9">
                        <div class="owl-carousel owl-theme clients-carousel dot-indicator client-logo-wrap">
                            <div class="item single-client">
                                <img src="img/clients-logo-01.png" alt="client logo" class="client-img">
                            </div>
                            <div class="item single-client">
                                <img src="img/clients-logo-02.png" alt="client logo" class="client-img">
                            </div>
                            <div class="item single-client">
                                <img src="img/clients-logo-03.png" alt="client logo" class="client-img">
                            </div>
                            <div class="item single-client">
                                <img src="img/clients-logo-04.png" alt="client logo" class="client-img">
                            </div>
                            <div class="item single-client">
                                <img src="img/clients-logo-05.png" alt="client logo" class="client-img">
                            </div>
                            <div class="item single-client">
                                <img src="img/clients-logo-06.png" alt="client logo" class="client-img">
                            </div>
                            <div class="item single-client">
                                <img src="img/clients-logo-07.png" alt="client logo" class="client-img">
                            </div>
                            <div class="item single-client">
                                <img src="img/clients-logo-08.png" alt="client logo" class="client-img">
                            </div>
                        </div>
                    </div>
                </div>
                <!--clients logo end-->
            </div>
        </div>
        <!--client section end-->


        <!--team two section start-->
        <section class="team-two-section ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <strong class="color-secondary">Our Team</strong>
                            <h2>Awesome Team Members</h2>
                            <span class="animate-border mr-auto ml-auto mb-4"></span>
                            <p class="lead">Distinctively grow go forward manufactured products and optimal networks.
                                Enthusiastically
                                disseminate user-centric outsourcing.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($team as $val)
                        <div class="col-md-6 col-lg-3">
                            <div class="staff-member my-md-3 my-lg-3 my-sm-0">
                                <div class="card text-center">
                                    <img src="team/{{$val['image']}}" alt="team image"
                                         width="120"
                                         class="img-fluid m-auto pt-4">
                                    {{--                                <img src="img/team-member-1.png" alt="team image" width="120"--}}
                                    {{--                                     class="img-fluid m-auto pt-4">--}}
                                    <div class="card-body">
                                        <h5 class="teacher mb-0">{{$val->team_name}}</h5>
                                        <span>{{$val->designation}}</span>
                                        <p class="teacher-quote pt-3">{{$val->quote}}</p>
                                        <ul class="list-inline pt-2 social">
                                            <li class="list-inline-item"><a href="{{$val->fbLink}}"
                                                                            target="_blank"><span
                                                        class="ti-facebook"></span></a></li>
                                            <li class="list-inline-item"><a href="{{$val->fiverrLink}}"
                                                                            target="_blank"><span
                                                        class="ti-linkedin"></span></a></li>
                                            <li class="list-inline-item"><a href="{{$val->upworkLink}}"
                                                                            target="_blank"><span
                                                        class="ti-instagram"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="overlay d-flex align-items-center justify-content-center">
                                    <div class="overlay-inner">
                                        <p class="teacher-quote">"{{$val->quote}}" </p><a
                                            href="#" class="teacher-name">
                                            <h5 class="mb-0 teacher text-white">{{$val->team_name}}</h5></a>
                                        <span class="teacher-field text-white">{{$val->designation}}</span>
                                        <ul class="list-inline py-4 social">
                                            <li class="list-inline-item"><a href="{{$val->fbLink}}"
                                                                            target="_blank"><span
                                                        class="ti-facebook"></span></a></li>
                                            <li class="list-inline-item"><a href="{{$val->fiverrLink}}"
                                                                            target="_blank"><span
                                                        class="ti-linkedin"></span></a></li>
                                            <li class="list-inline-item"><a href="{{$val->upworkLink}}"
                                                                            target="_blank"><span
                                                        class="ti-instagram"></span></a></li>
                                        </ul>
                                        <p class="teacher-see-profile">
                                            <a href="#" class="btn outline-white-btn">View my profile</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!--team two section end-->

        <!--call to action section start-->
        <section class="call-to-action py-5 gray-light-bg">
            <div class="container">
                <div class="row justify-content-around align-items-center">
                    <div class="col-md-7">
                        <div class="subscribe-content">
                            <h3 class="mb-1">Consulting Agency for Your Business</h3>
                            <p>Rapidiously engage fully tested e-commerce with progressive architectures.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="action-btn text-lg-right text-sm-left">
                            <a href="/contact" class="btn secondary-solid-btn">Contact With Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--call to action section end-->

    </div>
    <!--body content wrap end-->


@endsection
