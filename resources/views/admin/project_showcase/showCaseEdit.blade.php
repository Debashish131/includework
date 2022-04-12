@extends('admin.adminMaster')
@section('title','Review Add')

@section('maincontent')

    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Show Case</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Show Case Edit</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-0 text-uppercase">Show Case Information Edit</h6>
                    <hr/>

                    <form action="/showCaseUpdate{{$showCase->id}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label for="name" class="control-label mb-1">Show Case Name</label>
                        <input class="form-control mb-3" name="name" id="name" type="text" value="{{$showCase->name}}"
                               placeholder="Enter Show Case Name"
                               aria-label="default input example" required>

                        <label for="categoryType" class="control-label mb-1">Category Type</label>
                        <select class="form-select mb-3" name="categoryType" id="categoryType"
                                value="{{$showCase->categoryType}}"
                                aria-label="default input example" required>
                            <option selected>Select Menu</option>
                            <option value="all">Digital Marketing</option>
                            <option value="branding">Marketing Strategy</option>
                            {{--                            <option value="animation">Marketing Strategy New(branding)</option>--}}
                            <option value="animation">Content Marketing</option>
                            <option value="other">SEO Service</option>

                        </select>

                        <label for="tagName" class="control-label mb-1">Tag name</label>
                        <input class="form-control mb-3" name="tagName" id="tagName" type="text"
                               value="{{$showCase->tagName}}"
                               placeholder="Enter Tag name"
                               aria-label="default input example" required>

                        <label for="image" class="control-label mb-1">Image</label>
                        <input class="form-control mb-3" name="image" id="image" type="file"
                               value="{{$showCase->image}}"
                               aria-label="default input example" required>

                        &nbsp; <label for="hoverName" class="control-label mb-1">Hover name</label>
                        <input class="form-control mb-3" name="hoverName" id="hoverName" type="text"
                               value="{{$showCase->hoverName}}"
                               placeholder="Enter Hover name"
                               aria-label="default input example" required>
                        <div>


                            <label for="category" class="control-label mb-1">Category name</label>
                            <input class="form-control mb-3" name="category" id="category" type="text"
                                   value="{{$showCase->category}}"
                                   placeholder="Enter Category name"
                                   aria-label="default input example" required>

                            <hr>
                            <h4 style="background-color: #3dd5f3">Optional Section (For Project Details)</h4>

                            <label for="companyName" class="control-label mb-1">Company name</label>
                            <input class="form-control mb-3" name="companyName" id="companyName" type="text"
                                   placeholder="Enter Company name" value="{{$showCase->companyName}}"
                                   aria-label="default input example" required>

                            <label for="projectDuration" class="control-label mb-1">Project Duration (optional)</label>
                            <input class="form-control mb-3" name="projectDuration" id="projectDuration" type="text"
                                   placeholder="Enter Project Duration (optional)"
                                   value="{{$showCase->projectDuration}}"
                                   aria-label="default input example" required>

                            <label for="projectType" class="control-label mb-1">Project type (Graphics/SEO base)</label>
                            <input class="form-control mb-3" name="projectType" id="projectType" type="text"
                                   value="{{$showCase->projectType}}"
                                   placeholder="Enter Project type (Graphics/SEO base)"
                                   aria-label="default input example" required>


                            <label for="projectDes1" class="control-label mb-1">Project Description paragraph 1</label>
                            <textarea class="form-control mb-3" name="projectDes1" id="projectDes1" type="text"
                                      value="{{$showCase->projectDes1}}"
                                      placeholder="Enter Project Description Paragraph 1 name (Minimum topic)"
                                      aria-label="default input example" required>{{$showCase->projectDes1}}</textarea>

                            <label for="projectDes2" class="control-label mb-1">Project Description paragraph 2</label>
                            <textarea class="form-control mb-3" name="projectDes2" id="projectDes2" type="text"
                                      value="{{$showCase->projectDes2}}"
                                      placeholder="Enter Project Description Paragraph 2(Optional)"
                                      aria-label="default input example" required>{{$showCase->projectDes2}}</textarea>

                            <label for="projectDes3" class="control-label mb-1">Project Description paragraph 3</label>
                            <textarea class="form-control mb-3" name="projectDes3" id="projectDes3" type="text"
                                      value="{{$showCase->projectDes3}}"
                                      placeholder="Enter Project Description Paragraph 3(Optional)"
                                      aria-label="default input example" required>{{$showCase->projectDes3}}</textarea>

                            <div>

                                <button type="submit" class="btn btn-warning btn-lg px-5">
                                    Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div

@endsection

