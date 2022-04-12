@extends('user.master')
@section('title','Career')
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
                            <h1 class="text-white mb-0">Career</h1>
                            <div class="custom-breadcrumb">
                                <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                    <li class="list-inline-item breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="list-inline-item breadcrumb-item active">Career</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--header section end-->
    @if($errors->any())
        {{ implode('', $errors->all('message')) }}
    @endif

    <!--contact us section start-->
        <section class="contact-us-section ptb-100">
            <div class="container contact">
                <div class="col-12 pb-3 message-box d-none">
                    <div class="alert alert-danger"></div>
                </div>
                <div class="row justify-content-around">
                    <div class="col-md-12">
                        <h4>Ready to get started?</h4>
                        <form action="/cvUpload" method="post" id="contactForm" class="contact-us-form"
                              enctype="multipart/form-data">
                            @csrf
                            {{--                            @method('PUT')--}}
                            <div class="form-row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="firstname" class="form-group">First Name</label>
                                        <input type="text" class="form-control" name="firstname"
                                               placeholder="Enter first name" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lastname" class="form-group">Last Name</label>
                                        <input type="text" class="form-control" name="lastname"
                                               placeholder="Enter last name"
                                               required>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="dob" class="form-group">Date of birth</label>
                                        <input type="date" class="form-control" name="dob"
                                               required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="contactnumber" class="form-group">Contact Number</label>
                                        <input type="text" class="form-control" name="contactnumber"
                                               placeholder="Enter Contact Number"
                                               required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="gender" class="form-group">Gender</label>
                                        <select type="text" class="form-control" name="gender"
                                                required>
                                            <option value="Select any" disabled>Select One</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Others">Others</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nid" class="form-group">NID Number</label>
                                        <input type="text" class="form-control" name="nid"
                                               placeholder="Enter NID Number">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="position" class="form-group">Position</label>
                                        <input type="text" class="form-control" name="position"
                                               placeholder="Enter which position you want to apply">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="email" class="form-group">Email Id</label>
                                        <input type="email" class="form-control" name="email"
                                               placeholder="Enter email" required>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="address" class="form-group">Mailing Address</label>
                                        <textarea type="text" class="form-control" name="address" rows="3"
                                                  placeholder="Enter address" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="image" class="form-group">Image</label>
                                        <input type="file" class="form-control" name="image"
                                               placeholder="Enter your passport sie image here">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="file" class="form-group">CV</label>
                                        <input type="file" class="form-control" name="file"
                                               placeholder="Enter your cv here">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                            <textarea name="message" id="message" class="form-control" rows="7"
                                                      cols="25" placeholder="Message"></textarea>
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

            </div>

        </section>
        <!--contact us section end-->


    </div>
    <!--body content wrap end-->


@endsection
