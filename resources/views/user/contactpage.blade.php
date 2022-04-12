@extends('user.master')
@section('title','Contact Page')
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
                            <h1 class="text-white mb-0">Contact Us</h1>
                            <div class="custom-breadcrumb">
                                <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                    <li class="list-inline-item breadcrumb-item"><a href="/">Company</a></li>
                                    <li class="list-inline-item breadcrumb-item active">Contact Us</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--header section end-->


        <!--contact us promo start-->
        <section class="contact-us-promo pt-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card single-promo-card single-promo-hover text-center shadow-sm">
                            <div class="card-body py-5">
                                <div class="pb-2">
                                    <span class="ti-mobile icon-sm color-secondary"></span>
                                </div>
                                <div><h5 class="mb-0">Call Us</h5>
                                    <p class="text-muted mb-0"><a href="tel:+8801916842929">+88 0191-6842929</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card single-promo-card single-promo-hover text-center shadow-sm">
                            <div class="card-body py-5">
                                <div class="pb-2">
                                    <span class="ti-location-pin icon-sm color-secondary"></span>
                                </div>
                                <div><h5 class="mb-0">Visit Us</h5>
                                    <p class="text-muted mb-0">Road-7,Kaderabad
                                        Housing,Mohammmadpur</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card single-promo-card single-promo-hover text-center shadow-sm">
                            <div class="card-body py-5">
                                <div class="pb-2">
                                    <span class="ti-email icon-sm color-secondary"></span>
                                </div>
                                <div><h5 class="mb-0">Mail Us</h5>
                                    <p class="text-muted md-0"><a
                                            href="mailto:info@incldework.com">info@incldework.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card single-promo-card single-promo-hover text-center shadow-sm">
                            <div class="card-body py-5">
                                <div class="pb-2">
                                    <span class="ti-headphone-alt icon-sm color-secondary"></span>
                                </div>
                                <div><h5 class="mb-0">Hot Line</h5>
                                    <p class="text-muted mb-0">Call Us 24/7</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--contact us promo end-->

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

        <!--google map block start-->
        <div class="google-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.8519876656533!2d90.35734201429698!3d23.752656994608547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf5c956cd819%3A0xbd7c136049c7b96f!2sG%20IT%20Desk!5e0!3m2!1sen!2sbd!4v1649575537054!5m2!1sen!2sbd"
                height="450" style="border:0;" allowfullscreen=""></iframe>

        </div>
        <!--google map block end-->


    </div>
    <!--body content wrap end-->
@endsection
