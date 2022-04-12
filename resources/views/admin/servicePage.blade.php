@extends('admin.adminMaster')
@section('title','Service Add')

@section('maincontent')

    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Service</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Service Page Edit</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-0 text-uppercase">Service Add</h6>
                    <hr/>

                    <form action="/serviceAdd" method="post" enctype="multipart/form-data">
                        @csrf
                        <label for="service_name" class="control-label mb-1">Service Name</label>
                        <input class="form-control mb-3" name="service_name" id="service_name" type="text"
                               placeholder="Enter Service Name"
                               aria-label="default input example" required>

                        <label for="service_short" class="control-label mb-1">Service Short Description</label>
                        <textarea name="service_short" id="short_des " rows="3" class="form-control"
                                  required="required"></textarea>
                        <br>
                        <label for="service_details" class="control-label mb-1">Service Details Description <span style="color: #bd2130">( Recommended 30 words )</span></label>
                        <textarea name="service_details" id="short_des " rows="5" class="form-control"
                                  required="required"></textarea>
                        &nbsp;
                        <div>
                            <button type="submit" class="btn btn-facebook btn-lg px-5">
                                Submit
                            </button>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>

@endsection
