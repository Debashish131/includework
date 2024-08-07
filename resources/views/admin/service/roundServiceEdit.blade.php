@extends('admin.adminMaster')
@section('title','Round Service Edit')

@section('maincontent')
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Round Service</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Round Service Page Edited</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-0 text-uppercase">Round Service Edit</h6>
                    <hr/>
                    <h6 class="mb-0 text-uppercase">Round Services</h6>
                    <hr/>
                    <form action="/roundServiceUpdate{{$service->id}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label for="service_name" class="control-label mb-1">Service name</label>
                        <input class="form-control mb-3" name="service_name" id="service_name" type="text"
                               value="{{$service->service_name}}"
                               placeholder="Enter Round Service Name"
                               required>

                        <label for="keyword" class="control-label mb-1">Keyword</label>
                        <input class="form-control mb-3" name="keyword" id="keyword" type="text"
                               value="{{$service->keyword}}"
                               placeholder="Enter Keyword here"
                               required>

                        <label for="percentage" class="control-label mb-1">percentage</label>
                        <input class="form-control mb-3" name="percentage" id="percentage" type="text"
                               value="{{$service->percentage}}"
                               placeholder="Enter percentage here"
                               required>
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

