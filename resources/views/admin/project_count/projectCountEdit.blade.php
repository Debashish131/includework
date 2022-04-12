@extends('admin.adminMaster')
@section('title','Project Count Edit')

@section('maincontent')

    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Project Count</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Project Count Edit</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-0 text-uppercase">Project Count Information Add</h6>
                    <hr/>

                    <form action="/projectCountUpdate{{$count->id}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label for="total_project" class="control-label mb-1">Total Project</label>
                        <input class="form-control mb-3" name="total_project" id="total_project" type="text"
                               value="{{$count->total_project}}"
                               placeholder="Enter total project"
                               aria-label="default input example" required>

                        <label for="total_customer" class="control-label mb-1">Total Customer</label>
                        <input class="form-control mb-3" name="total_customer" id="total_customer" type="text"
                               value="{{$count->total_customer}}"
                               placeholder="Enter total customer"
                               aria-label="default input example" required>

                        <label for="total_coffecup" class="control-label mb-1">Total Coffee Cup</label>
                        <input class="form-control mb-3" name="total_coffecup" id="total_coffecup" type="text"
                               value="{{$count->total_coffecup}}"
                               placeholder="Enter total coffee cup"
                               aria-label="default input example" required>
                        &nbsp;
                        <div>
                            <button type="submit" class="btn btn-success btn-lg px-5">
                                Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
