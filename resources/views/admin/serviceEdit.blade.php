@extends('admin.adminMaster')
@section('title','Service page Edit')

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

                    <h6 class="mb-0 text-uppercase">Service Editor</h6>
                    <hr/>

                    <form action="/serviceUpdate{{$service->id}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label for="service_name" class="control-label mb-1">Service Name</label>
                        <input class="form-control mb-3" name="service_name" id="service_name" type="text"
                               value="{{$service->service_name}}"
                               placeholder="Enter Service Name"
                               aria-label="default input example" required>

                        <label for="service_short" class="control-label mb-1">Service Short Description</label>
                        <input class="form-control md-3" name="service_short" id="service_short" type="text"
                               value="{{$service->service_short}}"
                               required>
                        <br>
                        <label for="service_details" class="control-label mb-1">Service Details Description <span style="color: #bd2130">( Recommended 30 words )</span></label>
                        <textarea name="short_des" id="short_des" rows="3" class="form-control md-3"
                                  required="required">{{$service->service_details}}</textarea>
                        &nbsp;
                        <div>
                            <button type="submit" class="btn btn-success btn-lg px-xl-5">
                                Update
                            </button>
                        </div>
                    </form>

                    &nbsp;


                </div>
            </div>
        </div>
    </div

@endsection

