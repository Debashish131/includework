@extends('admin.adminMaster')
@section('title','Review Add')

@section('maincontent')

    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Review</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Review Add</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-0 text-uppercase">Review Information Add</h6>
                    <hr/>

                    <form action="/reviewAdd" method="post" enctype="multipart/form-data">
                        @csrf
                        <label for="reviewer_name" class="control-label mb-1">Reviewer Name</label>
                        <input class="form-control mb-3" name="reviewer_name" id="reviewer_name" type="text"
                               placeholder="Enter Reviewer Name"
                               aria-label="default input example" required>

                        <label for="company" class="control-label mb-1">Company</label>
                        <input class="form-control mb-3" name="company" id="company" type="text"
                               placeholder="Enter company name"
                               aria-label="default input example" required>

                        <label for="quote" class="control-label mb-1">Quote</label>
                        <input class="form-control mb-3" name="quote" id="quote" type="text"
                               placeholder="Enter quote (if any)"
                               aria-label="default input example" required>

                        <label for="image" class="control-label mb-1">Image</label>
                        <input class="form-control mb-3" name="image" id="image" type="file"
                               aria-label="default input example" required>

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
    </div

@endsection
