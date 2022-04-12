@extends('admin.adminMaster')
@section('title','Circular Add')
@section('maincontent')

    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Circular Add</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Circular Add</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-0 text-uppercase">Circular Add</h6>
                    <hr/>

                    <form action="/circularAdd" method="post" enctype="multipart/form-data">
                        @csrf
                        <label for="position" class="control-label mb-1">Position</label>
                        <input class="form-control mb-3" name="position" id="position" type="text"
                               placeholder="Enter Position name"
                               aria-label="default input example" required>


                        <label for="noPost" class="control-label mb-1">No of Post</label>
                        <input class="form-control mb-3" name="noPost" id="noPost" type="text"
                               placeholder="Enter No of Post"
                               aria-label="default input example" required>

                        <label for="file" class="control-label mb-1">File(PDF)</label>
                        <input class="form-control mb-3" name="file" id="file" type="file"
                               aria-label="default input example" required>

                        <label for="date" class="control-label mb-1">Last date of application</label>
                        <input class="form-control mb-3" name="date" id="date" type="date"
                               aria-label="default input example" required>


                        <div>

                            <button type="submit" class="btn btn-warning px-xl-5">
                                Submit
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div

@endsection

