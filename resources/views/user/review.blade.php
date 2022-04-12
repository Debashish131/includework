@extends('user.master')
@section('title','Review')
@section('maincontent')


    <!--body content wrap start-->
    <div class="main">

        <!--hero section start-->
        <section class="hero-section ptb-100 gradient-overlay"
                 style="background: url('img/header-bg-5.jpg')no-repeat center center / cover">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-9 col-lg-7">
                        <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                            <h1 class="text-white mb-0">Customer Say About Us</h1>
                            <div class="custom-breadcrumb">
                                <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                    <li class="list-inline-item breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="list-inline-item breadcrumb-item"><a href="#">Company</a></li>
                                    <li class="list-inline-item breadcrumb-item active">Review</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--hero section end-->


        <!--customer review section start-->
        <section class="customer-review-section ptb-100">
            <div class="container">
                <div class="row">
                    @foreach($review as $val)
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="single-review my-md-4 my-lg-4 my-sm-0">
                                <div class="testimonial-single shadow-sm gray-light-bg rounded p-4">
                                    <blockquote>
                                        {{$val->quote}}
                                    </blockquote>
                                    <div class="client-ratting mt-2">
                                        <ul class="list-inline client-ratting-list">
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span>
                                            </li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span>
                                            </li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span>
                                            </li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span>
                                            </li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span>
                                            </li>
                                            <li class="list-inline-item rating"> (5.0)</li>
                                        </ul>
                                        <h6 class="font-weight-bold"><small
                                                class="font-weight-lighter">{{$val->company}}</small></h6>
                                    </div>
                                </div>
                                <div class="client-info-wrap d-flex align-items-center mt-5">
                                    <div class="client-img mr-3">
                                        <img src="team/{{$val['image']}}" alt="client" width="60"
                                             class="img-fluid rounded-circle shadow-sm"/>
                                    </div>
                                    <div class="client-info">
                                        <h5 class="mb-0">{{$val->reviewer_name}}</h5>
                                        <p class="mb-0">{{$val->company}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!--customer review section end-->


    </div>
    <!--body content wrap end-->

@endsection
