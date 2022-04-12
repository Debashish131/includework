@extends('user.master')
@section('title','Project Details')
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
                            <h1 class="text-white mb-0">Project Details</h1>
                            <div class="custom-breadcrumb">
                                <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                    <li class="list-inline-item breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="list-inline-item breadcrumb-item"><a href="#">Pages</a></li>
                                    <li class="list-inline-item breadcrumb-item active">Project Details</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--header section end-->

        <!--project details section start-->
        <section class="project-details-section ptb-100">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-12 col-lg-8">
                        <div class="img-wrap mb-md-4 mb-lg-0">
                            <img src="case/{{$showcase['image']}}" alt="project" class="img-fluid rounded shadow-sm"/>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="project-details-sidebar">
                            <ul class="project-info-list">
                                <li class="d-flex align-items-center mb-3 p-4 rounded">
                                    <span class="ti-user icon-sm color-secondary d-block mr-3"></span>
                                    <div class="d-block">
                                        <h5 class="mb-0">Company Name</h5>
                                        <p>{{$showcase->companyName}}</p>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center mb-3 p-4 rounded">
                                    <span class="ti-time icon-sm color-secondary d-block mr-3"></span>
                                    <div class="d-block">
                                        <h5 class="mb-0">Project Duration</h5>
                                        <p>{{$showcase->projectDuration}}</p>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center mb-3 p-4 rounded">
                                    <span class="ti-link icon-sm color-secondary d-block mr-3"></span>
                                    <div class="d-block">
                                        <h5 class="mb-0">Project Type</h5>
                                        <a href="#">{{$showcase->projectType}}</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!--project details row start-->
                <div class="row mt-5">
                    <div class="col-md-12">
                        <div class="project-details-content">
                            <h5>{{$showcase->name}} Project Description</h5>
                            <p>{{$showcase->projectDes1}}</p>
                            <p>{{$showcase->projectDes2}}</p>
                            <p>{{$showcase->projectDes3}}</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-6">
                        <div class="project-details-feature">
                            <ul class="list-unstyled tech-feature-list">
                                <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span><strong>Foreclosure</strong>
                                    consultant Human resource consulting
                                </li>
                                <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span><strong>Corporate</strong>
                                    Immigration consultant, Information consulting
                                </li>
                                <li class="py-1"><span
                                        class="ti-check-box mr-2 color-secondary"></span><strong>SEO</strong>
                                    Optimization Creative consultant
                                </li>
                                <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span><strong>Rapidiously</strong>
                                    conceptualize strategic before communities
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="project-details-feature">
                            <ul class="list-unstyled tech-feature-list">
                                <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span><strong>Consultant</strong>
                                    pharmacist Creative consultant
                                </li>
                                <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span><strong>Monotonectally</strong>
                                    customize B2B core competencies
                                </li>
                                <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span><strong>Immigration</strong>
                                    consultant, Information consulting
                                </li>
                                <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span><strong>Consultant</strong>
                                    pharmacist Creative consultant
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--project details row end-->
            </div>
        </section>
        <!--project details section end-->

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
                            <a href="#" class="btn secondary-solid-btn">Become a Client</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--call to action section end-->


    </div>
    <!--body content wrap end-->
@endsection
