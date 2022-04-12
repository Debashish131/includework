@extends('user.master')
@section('title','Service Details')

@section('maincontent')

    <!--body content wrap start-->
    <div class="main">

        <!--header section start-->
        <section class="hero-section ptb-100 gradient-overlay"
                 style="background: url('img/header-bg-5.jpg')no-repeat top center / cover">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-7">
                        <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                            <h1 class="text-white mb-0">Service Details</h1>
                            <div class="custom-breadcrumb">
                                <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                    <li class="list-inline-item breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="list-inline-item breadcrumb-item"><a href="#">Service</a></li>
                                    <li class="list-inline-item breadcrumb-item active">Service Details</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--header section end-->

        <!--services details start-->
        <section class="service-details-section ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="service-details-wrap">
                            <img src="img/slider-img-<?php echo(rand(2, 8))?>.jpg" alt="services"
                                 class="img-fluid rounded shadow-sm"/>
                            <div class="services-detail-content mt-4">

                                <h4>{{$singleservice->service_name}}</h4>
                                <p>{{$singleservice->service_short}}</p>
                                <p>{{$singleservice->service_details}}</p>
                                <div class="row mt-5">
                                    <div class="col-md-6">
                                        <div class="img-wrap">
                                            <img src="img/images<?php echo(rand(0, 4))?>.jpg" alt="services" class="img-fluid"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Globally transition proactive niches without progressive processes.
                                            Objectively syndicate
                                            enterprise-wide services through timely metrics. </p>
                                        <ul class="list-unstyled tech-feature-list">
                                            <li class="py-1"><span
                                                    class="ti-control-forward mr-2 color-secondary"></span><strong>Lead</strong>
                                                Lead Generation
                                            </li>

                                            <li class="py-1"><span
                                                    class="ti-control-forward mr-2 color-secondary"></span><strong>Web</strong>
                                                Web Researchers
                                            </li>
                                            <li class="py-1"><span
                                                    class="ti-control-forward mr-2 color-secondary"></span><strong>Corporate</strong>
                                                Content Marketing
                                            </li>
                                            <li class="py-1"><span
                                                    class="ti-control-forward mr-2 color-secondary"></span><strong>SEO</strong>
                                                Optimization Services
                                            </li>
                                            <li class="py-1"><span
                                                    class="ti-control-forward mr-2 color-secondary"></span><strong>Company</strong>
                                                Brand Solutions
                                            </li>
                                            <li class="py-1"><span
                                                    class="ti-control-forward mr-2 color-secondary"></span><strong>Marketing</strong>
                                                Digital Marketing
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div id="accordion-1" class="accordion accordion-faq mt-5">
                                    <!-- Accordion card 1 -->
                                    <div class="card">
                                        <div class="card-header py-3 collapsed" id="heading-1-1" data-toggle="collapse"
                                             role="button" data-target="#collapse-1-1" aria-expanded="false"
                                             aria-controls="collapse-1-1">
                                            <h6 class="mb-0"><span class="ti-receipt mr-3"></span> Which license do I
                                                need?</h6>
                                        </div>
                                        <div id="collapse-1-1" class="collapse" aria-labelledby="heading-1-1"
                                             data-parent="#accordion-1" style="">
                                            <div class="card-body">
                                                <p>Uniquely leverage other's distinctive infomediaries rather than
                                                    leveraged supply chains. Continually seize distributed collaboration
                                                    and idea-sharing whereas user.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Accordion card 2 -->
                                    <div class="card">
                                        <div class="card-header py-3" id="heading-1-2" data-toggle="collapse"
                                             role="button" data-target="#collapse-1-2" aria-expanded="false"
                                             aria-controls="collapse-1-2">
                                            <h6 class="mb-0"><span class="ti-gallery mr-3"></span> How do I get access
                                                to a theme?</h6>
                                        </div>
                                        <div id="collapse-1-2" class="collapse" aria-labelledby="heading-1-2"
                                             data-parent="#accordion-1">
                                            <div class="card-body">
                                                <p>Rapidiously incentivize virtual e-commerce and exceptional e-tailers.
                                                    Progressively network focused catalysts for change without
                                                    orthogonal benefits. Dramatically empower.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Accordion card 3 -->
                                    <div class="card">
                                        <div class="card-header py-3" id="heading-1-3" data-toggle="collapse"
                                             role="button" data-target="#collapse-1-3" aria-expanded="false"
                                             aria-controls="collapse-1-3">
                                            <h6 class="mb-0"><span class="ti-wallet mr-3"></span> How do I see previous
                                                orders?
                                            </h6>
                                        </div>
                                        <div id="collapse-1-3" class="collapse" aria-labelledby="heading-1-3"
                                             data-parent="#accordion-1">
                                            <div class="card-body">
                                                <p>Proactively monetize long-term high-impact innovation and scalable
                                                    relationships. Dynamically mesh principle-centered functionalities
                                                    before next-generation best practices. Distinctively empower.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="sidebar-right pl-4">

                            <!--all services list-->
                            <aside class="widget widget-categories">
                                <div class="widget-title">
                                    <h5>All Services</h5>
                                </div>
                                <ul class="all-service-list">
                                    @foreach($service as $val)
                                        <li><a href="/service_details{{$val->id}}">{{$val->service_name}}</a></li>
                                    @endforeach
                                </ul>
                            </aside>

                            <!--need help-->
                            <aside class="widget widget-categories">
                                <div class="widget-title">
                                    <h5>Need Help?</h5>
                                </div>
                                <p>We are available in 24/7 hours for dedicated support</p>
                                <ul class="primary-list mt-25">
                                    <li><span class="ti-location-pin mr-2 color-primary"></span>Road-7,House- 2,E
                                        Block,Kaderabad
                                        Housing,Mohammmadpur,Dhaka 1207
                                    </li>
                                    <li><span class="ti-mobile mr-2 color-primary"></span>+88 0191-6842929</li>
                                    <li class="d-flex align-items-center py-2"><span
                                            class="fas fa-envelope mr-2"></span> <a href="mailto:info@includeword.com">info@includework.com</a>
                                    </li>
                                </ul>
                            </aside>


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--services details end-->

        <!--call to action section start-->
        <section class="call-to-action py-5 gray-light-bg">
            <div class="container">
                <div class="row justify-content-around align-items-center">
                    <div class="col-md-7">
                        <div class="subscribe-content">
                            <h3 class="mb-1">Consulting with us for Your Business</h3>
                            <p>All of our services are centered on our promise to strengthen brand visibility</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="action-btn text-lg-right text-sm-left">
                            <a href="/contact" class="btn secondary-solid-btn">Become our client</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--call to action section end-->


    </div>
    <!--body content wrap end-->
@endsection
