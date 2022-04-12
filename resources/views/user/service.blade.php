@extends('user.master')
@section('title','Service')
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
                            <h1 class="text-white mb-0">Our Services</h1>
                            <div class="custom-breadcrumb">
                                <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                    <li class="list-inline-item breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="list-inline-item breadcrumb-item"><a href="#">Pages</a></li>
                                    <li class="list-inline-item breadcrumb-item active">Services</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--header section end-->

        <!--promo section start-->
        <section class="promo-section ptb-100">
            <div class="container">

                <div class="row justify-content-center">
                    @foreach($discuss as $val)
                        <div class="col-md-6 col-lg-4">
                            <div class="promo-single-wrap p-5 text-center custom-shadow rounded">
                                <div class="promo-icon mb-4">
                                    <i class="ti-vector"></i>
                                    <span class="number-bg">{{$val->numbering}}</span>
                                </div>
                                <div class="promo-info">
                                    <strong class="color-secondary">Discuss with Users</strong>
                                    <h4>{{$val->title}}</h4>
                                    <p> {{$val->short_des}} </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!--promo section end-->

        <!--services section start-->
        <section class="services-section ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="section-heading text-center mb-4">
                            <strong class="color-secondary">Our Services</strong>
                            <h2>First Class Business Solutions for You</h2>
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
                            <form action="#" method="POST" id="contactForm" class="contact-us-form">
                                <div class="form-row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="Enter name"
                                                   required="required">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email"
                                                   placeholder="Enter email"
                                                   required="required">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                        <textarea name="message" id="message" class="form-control" rows="7" cols="25"
                                                  placeholder="Message"></textarea>
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

                            <a href="#" class="btn outline-btn align-items-center">Get Directions <span
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
