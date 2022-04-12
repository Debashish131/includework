@extends('admin.adminMaster')
@section('title','Member Add')


@section('maincontent')

    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Team</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Member Add</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-0 text-uppercase">Member Information Add</h6>
                    <hr/>

                    <form action="/memberAdd" method="post" enctype="multipart/form-data">
                        @csrf
                        <label for="team_name" class="control-label mb-1">Member Name</label>
                        <input class="form-control mb-3" name="team_name" id="team_name" type="text"
                               placeholder="Enter Member Name"
                               aria-label="default input example" required>

                        <label for="designation" class="control-label mb-1">Designation</label>
                        <input class="form-control mb-3" name="designation" id="designation" type="text"
                               placeholder="Enter designation"
                               aria-label="default input example" required>

                        <label for="quote" class="control-label mb-1">Quote</label>
                        <input class="form-control mb-3" name="quote" id="quote" type="text"
                               placeholder="Enter quote (if any)"
                               aria-label="default input example" required>

                        <label for="image" class="control-label mb-1">Image</label>
                        <input class="form-control mb-3" name="image" id="image" type="file"
                               aria-label="default input example" required>

                        <label for="fbLink" class="control-label mb-1">Email ID</label>
                        <input class="form-control mb-3" name="fbLink" id="fbLink" type="text"
                               placeholder="Enter Email id (if any)"
                               aria-label="default input example">

                        <label for="fiverrLink" class="control-label mb-1">Fiverr Link</label>
                        <input class="form-control mb-3" name="fiverrLink" id="fiverrLink" type="text"
                               placeholder="Enter fiverrLink (if any)"
                               aria-label="default input example">

                        <label for="upworkLink" class="control-label mb-1">Upwork Link</label>
                        <input class="form-control mb-3" name="upworkLink" id="upworkLink" type="text"
                               placeholder="Enter upworkLink (if any)"
                               aria-label="default input example">
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

@push('js')


@endpush
