@extends('user.master')
@section('title','Team Member')
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
                            <h1 class="text-white mb-0">Our Team</h1>
                            <div class="custom-breadcrumb">
                                <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                    <li class="list-inline-item breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="list-inline-item breadcrumb-item"><a href="#">Company</a></li>
                                    <li class="list-inline-item breadcrumb-item active">Team</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--header section end-->

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

        <!--call to action progressbar start-->
        <section class="call-to-action ptb-100"
                 style="background: url('img/ctg-bg-2.jpg')no-repeat center center / cover">
            <div class="container">
                <div class="row">
                    @foreach($roundService as $val)
                        <div class="col-md-3 col-sm-6">
                            <div class="circle-box">
                                <div class="chart" data-percent="{{$val->percentage}}">
                                    <span>{{$val->percentage}}%</span>
                                </div>
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

        <!--contact us section start-->
        <section class="contact-us-section ptb-100">
            <div class="container contact">
                <div class="col-12 pb-3 message-box d-none">
                    <div class="alert alert-danger"></div>
                </div>
                <div class="row justify-content-around">
                    <div class="col-md-6">
                        <div class="contact-us-form gray-light-bg rounded p-5">
                            <h4>Ready to get started?</h4>
                            <form action="/sentMail" method="POST" id="contactForm" class="contact-us-form">
                                @csrf
                                <div class="form-row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name"
                                                   placeholder="Enter name here"
                                                   required="required">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email"
                                                   placeholder="Enter email here" required="required">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="phone" class="form-control" name="phone"
                                                   placeholder="Enter phone number" required="required">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea name="message" id="message" class="form-control" rows="7"
                                                      cols="25" placeholder="Enter your message here"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-3">
                                        <button type="submit" class="btn secondary-solid-btn" id="btnContactUs">
                                            Send Message
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="contact-us-content">
                            <h2>Looking for a excellent Business idea?</h2>
                            <p class="lead">Seamlessly deliver pandemic e-services and next-generation initiatives.</p>

                            <a href="/contact" class="btn outline-btn align-items-center">Get Directions <span
                                    class="ti-arrow-right pl-2"></span></a>

                            <hr class="my-5">

                            <h5>Our Headquarters</h5>
                            <address>
                                Road-7,House-2,Block E,Kaderabad
                                Housing <br>
                                Mohammmadpur,Dhaka 1207
                            </address>
                            <br>
                            <span>Phone: <a href="tel:+8801916842929">+88 0191-6842929</a></span> <br>
                            <span>Email: <a
                                    href="mailto:info@includework.com"
                                    class="link-color">info@includework.com</a></span>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--contact us section end-->


    </div>
    <!--body content wrap end-->
@endsection
