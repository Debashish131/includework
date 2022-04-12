@extends('user.master')
@section('title','Project ShowCase')
@section('maincontent')

    <!--body content wrap start-->
    <div class="main">

        <!--header section start-->
        <section class="hero-section ptb-100 gradient-overlay"
                 style="background: url('img/header-bg-5.jpg')no-repeat center center / cover">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-7">
                        <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                            <h1 class="text-white mb-0">Case Studies</h1>
                            <div class="custom-breadcrumb">
                                <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                    <li class="list-inline-item breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="list-inline-item breadcrumb-item active">Case Studies</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--header section end-->


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


        <!--call to action section start-->
        <section class="call-to-action-video">
            <div class="row m-0">
                <div class="col-md-12 col-lg-6">
                    <div class="card border-0 text-white">
                        <img src="img/about-1.jpg" alt="video" class="img-fluid">
                        <div class="card-img-overlay text-center">
                            <a href="https://www.youtube.com/watch?v=niiZxQggUJM"
                               class="popup-youtube video-play-icon color-bip shadow"><span
                                    class="ti-control-play"></span> </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 p-0">
                    <div class="free-trial-content text-white">
                        <h2 class="text-white">Our Business Strategy</h2>
                        <p>We provide to your brand our extensive background in advertising, design, branding, corporate
                            communications, research, and strategic planning.
                            Your resources will not only look great, but they will also provide results. </p>
                        <a href="/contact" class="btn primary-solid-btn mt-3">Start Now</a>
                    </div>
                </div>
            </div>
        </section>
        <!--call to action section end-->


        <!--testimonial section start-->
        <section class="testimonial-section ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading mb-5 text-center">
                            <strong class="color-secondary">Testimonials</strong>
                            <h2>What Clients Say About Us</h2>
                            <span class="animate-border mr-auto ml-auto mb-4"></span>
                            <p class="lead">Happy customers are gold for our business, not just because they buy but
                                also because
                                they add value to our marketing strategy.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="owl-carousel owl-theme client-testimonial custom-arrow mb-5">
                            @foreach($review as $val)
                                <div class="item">
                                    <div class="testimonial-single shadow-sm gray-light-bg rounded p-4">
                                        <blockquote>
                                            {{$val->quote}}
                                        </blockquote>
                                        <div class="client-ratting mt-2">
                                            <ul class="list-inline client-ratting-list">
                                                <li class="list-inline-item"><span
                                                        class="fas fa-star ratting-color"></span></li>
                                                <li class="list-inline-item"><span
                                                        class="fas fa-star ratting-color"></span></li>
                                                <li class="list-inline-item"><span
                                                        class="fas fa-star ratting-color"></span></li>
                                                <li class="list-inline-item"><span
                                                        class="fas fa-star ratting-color"></span></li>
                                                <li class="list-inline-item"><span
                                                        class="fas fa-star ratting-color"></span></li>
                                                <li class="list-inline-item rating"> (5.0)</li>
                                            </ul>
                                            <h6 class="font-weight-bold"><small
                                                    class="font-weight-lighter"> {{$val->company}}</small></h6>
                                        </div>
                                    </div>
                                    <div class="client-info-wrap d-flex align-items-center mt-5">
                                        <div class="client-img mr-3">
                                            {{--                                            <img src="img/client-1.jpg" alt="client" width="60"--}}
                                            {{--                                                 class="img-fluid rounded-circle shadow-sm"/>--}}
                                            <img src="team/{{$val['image']}}" alt="client" width="60"
                                                 class="img-fluid rounded-circle shadow-sm"/>
                                        </div>
                                        <div class="client-info">
                                            <h5 class="mb-0">{{$val->reviewer_name}}</h5>
                                            <p class="mb-0">{{$val->company}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--testimonial section end-->


    </div>
    <!--body content wrap end-->
@endsection
