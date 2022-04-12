@extends('user.master')
@section('title','About Us')
@section('maincontent')

    <div class="main">

        <!--header section start-->
        <section class="hero-section ptb-100 gradient-overlay"
                 style="background: url('img/header-bg-5.jpg')no-repeat center center / cover">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-7">
                        <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                            <h1 class="text-white mb-0">About Us</h1>
                            <div class="custom-breadcrumb">
                                <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                    <li class="list-inline-item breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="list-inline-item breadcrumb-item active">About Us</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--header section end-->

        <!--promo section start-->
        <section class="promo-section pt-100">
            <div class="container">
                <div class="row justify-content-center">
                    @foreach($discuss as $val)
                        <div class="col-md-6 col-lg-4">
                            <div class="promo-single-wrap p-5 text-center border rounded">
                                <div class="promo-icon mb-4">
                                    <img src="img/search-engine.svg" alt="promo" width="65">
                                    <span class="number-bg">{{$val->numbering}}</span>
                                </div>
                                <div class="promo-info">
                                    <strong class="color-secondary">Discuss with Users</strong>
                                    <h4>{{$val->title}}</h4>
                                    <p>{{$val->short_des}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!--promo section end-->

        <!--about us section start-->
        <section class="about-us-section ptb-100">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-12 col-lg-5">
                        <div class="about-us-content-wrap">
                            <strong class="color-secondary">About Us</strong>
                            <h3>Grow Your Business With Experienced Lead Generation Experts</h3>
                            <span class="animate-border mb-4"></span>
                            <p>Globally transition proactive niches without progressive processes. Objectively syndicate
                                enterprise-wide services through timely metrics. </p>
                            <ul class="list-unstyled tech-feature-list">
                                <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>Lead</strong>
                                    Lead Generation
                                </li>

                                <li class="py-1"><span
                                        class="ti-control-forward mr-2 color-secondary"></span><strong>Web</strong>
                                    Web Researchers
                                </li>
                                <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>Corporate</strong>
                                    Content Marketing
                                </li>


                                <li class="py-1"><span
                                        class="ti-control-forward mr-2 color-secondary"></span><strong>Marketing</strong>
                                    Digital Marketing
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
                    <div class="col-md-12 col-lg-6">
                        <div class="card border-0 text-white">
                            <img src="img/why-choose-us.png" alt="video" class="img-fluid">
                            <div class="card-img-overlay text-center">
                                <a href="https://www.youtube.com/watch?v=9No-FiEInLA"
                                   class="popup-youtube video-play-icon color-bip shadow"><span
                                        class="ti-control-play"></span> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--about us section end-->

        <!--work process section start-->
        <section class="work-process-section ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-9">
                        <div class="section-heading text-center">
                            <strong class="color-secondary">Work Process</strong>
                            <h2>We follow Few Steps</h2>
                            <span class="animate-border mr-auto ml-auto mb-4"></span>
                            <p class="lead">A content workflow is a combination of actions that a team must accomplish
                                for a specific client or types of content – a web page, a piece of content, a white
                                paper, an email, or any other type of content that the team must deliver.</p>
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
                                    <h5>Contact With Us</h5>
                                    <p>Fist of All Client Contact with us by any communication way.We are always to be
                                        welcome</p>
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
                                    <h5>Collect Sample</h5>
                                    <p>Client send us a simple sample what he/she wants to do from us.</p>
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
                                    <h5>Feedback</h5>
                                    <p>After a certain time we send our work sample and get feedback from client</p>
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
                                    <h5>Get Service Charges</h5>
                                    <p>After a certain time we charges client advance 20% payment for the work</p>
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
                                    <h5>Final Delivery</h5>
                                    <p>After complete the whole project we send it to client and get some feedback if
                                        need</p>
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

        <!--call to action progressbar start-->
        <section class="call-to-action ptb-100"
                 style="background: url('img/ctg-bg-2.jpg')no-repeat center center / cover">
            <div class="container">
                <div class="row">
                    @foreach($round as $val)
                        <div class="col-md-3 col-sm-6">
                            <div class="circle-box">
                                <div class="chart" data-percent="{{$val->percentage}}">
                                    <span>{{$val->percentage}}%</span></div>
                            </div>
                            <div class="progress-info text-center mt-3">
                                <strong class="color-secondary">{{$val->service_name}}</strong>
                                <h5 class="text-white">{{$val->keyword}}</h5>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
        <!--call to action progressbar end-->


        <!--team two section start-->
        <section class="team-two-section ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <strong class="color-secondary">Our Team</strong>
                            <h2>Awesome Team Members</h2>
                            <span class="animate-border mr-auto ml-auto mb-4"></span>
                            <p class="lead">All the team members are extremely trained and experienced with past
                                exposure in the corporate world as distinguished professionals.Our teams have confidence
                                with handling any background irrespective of the complexity linked to such a task. We
                                have a balanced team of professionals simplifying all projects that we handle.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-3">
                        <div class="staff-member my-md-3 my-lg-3 my-sm-0">
                            <div class="card text-center">
                                <img src="/img/client-1.jpg" alt="team image"
                                     width="120"
                                     class="img-fluid m-auto pt-4">
                                {{--                                <img src="img/team-member-1.png" alt="team image" width="120"--}}
                                {{--                                     class="img-fluid m-auto pt-4">--}}
                                <div class="card-body">
                                    <h5 class="teacher mb-0">Md. Shakhawat Hossain</h5>
                                    <span>Director</span>
                                    <ul class="list-inline pt-2 social">
                                        <li class="list-inline-item"><a href="mailto:shakhawat@includework.com"
                                                                        target="_blank"><span
                                                    class="ti-email"></span></a></li>
                                        <li class="list-inline-item"><a href="#"
                                                                        target="_blank"><span
                                                    class="ti-linkedin"></span></a></li>
                                        <li class="list-inline-item"><a href="#"
                                                                        target="_blank"><span
                                                    class="ti-instagram"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="overlay d-flex align-items-center justify-content-center">
                                <div class="overlay-inner">
                                    <h5 class="mb-0 teacher text-white">Md. Shakhwat Hossain</h5>
                                    <span class="teacher-field text-white">Director</span>
                                    <ul class="list-inline py-4 social">
                                        <li class="list-inline-item"><a href="mailto:shakhawat@includework.com"
                                                                        target="_blank"><span
                                                    class="ti-email"></span></a></li>
                                        <li class="list-inline-item"><a href=""
                                                                        target="_blank"><span
                                                    class="ti-linkedin"></span></a></li>
                                        <li class="list-inline-item"><a href=""
                                                                        target="_blank"><span
                                                    class="ti-instagram"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">

                    <div class="col-md-6 col-lg-3">
                        <div class="staff-member my-md-3 my-lg-3 my-sm-0">
                            <div class="card text-center">
                                <img src="/img/client-2.jpg" alt="team image"
                                     width="120"
                                     class="img-fluid m-auto pt-4">
                                {{--                                <img src="img/team-member-1.png" alt="team image" width="120"--}}
                                {{--                                     class="img-fluid m-auto pt-4">--}}
                                <div class="card-body">
                                    <h5 class="teacher mb-0">Md.Sarowar Hossain</h5>
                                    <span>General Manager</span>
                                    <ul class="list-inline pt-2 social">
                                        <li class="list-inline-item"><a href="mailto:sarowar99bd@gmail.com"
                                                                        target="_blank"><span
                                                    class="ti-email"></span></a></li>
                                        <li class="list-inline-item"><a href="#"
                                                                        target="_blank"><span
                                                    class="ti-linkedin"></span></a></li>
                                        <li class="list-inline-item"><a href="#"
                                                                        target="_blank"><span
                                                    class="ti-instagram"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="overlay d-flex align-items-center justify-content-center">
                                <div class="overlay-inner">
                                    <h5 class="mb-0 teacher text-white">Md.Sarowar Hossain</h5>
                                    <span class="teacher-field text-white">General Manager</span>
                                    <ul class="list-inline py-4 social">
                                        <li class="list-inline-item"><a href="mailto:sarowar99bd@gmail.com"
                                                                        target="_blank"><span
                                                    class="ti-email"></span></a></li>
                                        <li class="list-inline-item"><a href=""
                                                                        target="_blank"><span
                                                    class="ti-linkedin"></span></a></li>
                                        <li class="list-inline-item"><a href=""
                                                                        target="_blank"><span
                                                    class="ti-instagram"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="staff-member my-md-3 my-lg-3 my-sm-0">
                            <div class="card text-center">
                                <img src="/img/client-1.jpg" alt="team image"
                                     width="120"
                                     class="img-fluid m-auto pt-4">
                                {{--                                <img src="img/team-member-1.png" alt="team image" width="120"--}}
                                {{--                                     class="img-fluid m-auto pt-4">--}}
                                <div class="card-body">
                                    <h5 class="teacher mb-0">Md. Shahinur Islam</h5>
                                    <span>Assistant General Manager</span>
                                    <ul class="list-inline pt-2 social">
                                        <li class="list-inline-item"><a href="mailto:shakhawat@includework.com"
                                                                        target="_blank"><span
                                                    class="ti-email"></span></a></li>
                                        <li class="list-inline-item"><a href="#"
                                                                        target="_blank"><span
                                                    class="ti-linkedin"></span></a></li>
                                        <li class="list-inline-item"><a href="#"
                                                                        target="_blank"><span
                                                    class="ti-instagram"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="overlay d-flex align-items-center justify-content-center">
                                <div class="overlay-inner">
                                    <h5 class="mb-0 teacher text-white">Md. Shahinur Islam</h5>
                                    <span class="teacher-field text-white">Assistant General Manager</span>
                                    <ul class="list-inline py-4 social">
                                        <li class="list-inline-item"><a href="mailto:shakhawat@includework.com"
                                                                        target="_blank"><span
                                                    class="ti-email"></span></a></li>
                                        <li class="list-inline-item"><a href=""
                                                                        target="_blank"><span
                                                    class="ti-linkedin"></span></a></li>
                                        <li class="list-inline-item"><a href=""
                                                                        target="_blank"><span
                                                    class="ti-instagram"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="staff-member my-md-3 my-lg-3 my-sm-0">
                            <div class="card text-center">
                                <img src="/img/client-3.jpg" alt="team image"
                                     width="120"
                                     class="img-fluid m-auto pt-4">
                                {{--                                <img src="img/team-member-1.png" alt="team image" width="120"--}}
                                {{--                                     class="img-fluid m-auto pt-4">--}}
                                <div class="card-body">
                                    <h5 class="teacher mb-0">Mahamudul Hasan Niloy</h5>
                                    <span>Project Manager</span>
                                    <ul class="list-inline pt-2 social">
                                        <li class="list-inline-item"><a href="mailto:shakhawat@includework.com"
                                                                        target="_blank"><span
                                                    class="ti-email"></span></a></li>
                                        <li class="list-inline-item"><a href="#"
                                                                        target="_blank"><span
                                                    class="ti-linkedin"></span></a></li>
                                        <li class="list-inline-item"><a href="#"
                                                                        target="_blank"><span
                                                    class="ti-instagram"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="overlay d-flex align-items-center justify-content-center">
                                <div class="overlay-inner">
                                    <h5 class="mb-0 teacher text-white">Mahamudul Hasan Niloy</h5>
                                    <span class="teacher-field text-white">Project Manager</span>
                                    <ul class="list-inline py-4 social">
                                        <li class="list-inline-item"><a href="mailto:shakhawat@includework.com"
                                                                        target="_blank"><span
                                                    class="ti-email"></span></a></li>
                                        <li class="list-inline-item"><a href=""
                                                                        target="_blank"><span
                                                    class="ti-linkedin"></span></a></li>
                                        <li class="list-inline-item"><a href=""
                                                                        target="_blank"><span
                                                    class="ti-instagram"></span></a></li>
                                    </ul>
                                </div>
                            </div>
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
                                        {{--                                        <p class="teacher-quote pt-3">{{$val->quote}}</p>--}}
                                        <ul class="list-inline pt-2 social">
                                            <li class="list-inline-item"><a href="{{$val->fbLink}}"
                                                                            target="_blank"><span
                                                        class="ti-email"></span></a></li>
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
                                        {{--                                        <p class="teacher-quote">"{{$val->quote}}" </p><a--}}
                                        {{--                                            href="#" class="teacher-name">--}}
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!--team two section end-->
    </div>
@endsection
