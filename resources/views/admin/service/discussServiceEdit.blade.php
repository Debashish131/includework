@extends('admin.adminMaster')
@section('title','Discuss Service Edit')

@section('maincontent')
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Discuss Service</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Discuss Service Page Edited</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-0 text-uppercase">Discuss Service Edit</h6>
                    <hr/>
                    <form action="/discussServiceUpdate{{$service->id}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label for="numbering" class="control-label mb-1">Number</label>
                        <input class="form-control mb-3" name="numbering" id="numbering" type="text"
                               value="{{$service->numbering}}"
                               placeholder="Enter Number ex: 01"
                               required>
                        <label for="title" class="control-label mb-1">Title</label>
                        <input class="form-control mb-3" name="title" id="title" type="text" value="{{$service->title}}"
                               placeholder="Enter title here"
                               required>

                        <label for="short_des" class="control-label mb-1">Short Description</label>
                        <textarea name="short_des" id="short_des" rows="3" class="form-control md-3"
                                  required="required">{{$service->short_des}}</textarea>
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

