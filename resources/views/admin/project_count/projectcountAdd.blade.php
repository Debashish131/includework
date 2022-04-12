@extends('admin.adminMaster')
@section('title','Project Count Add')


@push('cs')
    <link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet"/>

@endpush

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
                            <li class="breadcrumb-item active" aria-current="page">Project Count</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-0 text-uppercase">Project Count Information Add</h6>
                    <hr/>

                    <form action="/projectCountAdd" method="post" enctype="multipart/form-data">
                        @csrf
                        <label for="total_project" class="control-label mb-1">Total Project</label>
                        <input class="form-control mb-3" name="total_project" id="total_project" type="text"
                               placeholder="Enter total project"
                               aria-label="default input example" required>

                        <label for="total_customer" class="control-label mb-1">Total Customer</label>
                        <input class="form-control mb-3" name="total_customer" id="total_customer" type="text"
                               placeholder="Enter total customer"
                               aria-label="default input example" required>

                        <label for="total_coffecup" class="control-label mb-1">Total Coffee Cup</label>
                        <input class="form-control mb-3" name="total_coffecup" id="total_coffecup" type="text"
                               placeholder="Enter total coffee cup"
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
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Project Count</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Project Count</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">

                        <table id="example" class="table table-striped table-bordered" style="width:100%">

                            <thead>
                            <tr>
                                <th>Total Project</th>
                                <th>Total Customer</th>
                                <th>Total Coffee Cup</th>
                                <th>Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($project as $val)
                                <tr>
                                    <td>{{$val->total_project}}</td>
                                    <td>{{$val->total_customer}}</td>
                                    <td>{{$val->total_coffecup}}</td>
                                    <td>
                                        <div class="d-flex order-actions">
                                            <a href="/projectCountEdit{{$val->id}}"><i
                                                    class='bx bxs-edit text-primary'></i></a>

                                        </div>
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection

@push('js')
    <script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
    <script>
        $(document).ready(function () {
            var table = $('#example2').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'print']
            });

            table.buttons().container()
                .appendTo('#example2_wrapper .col-md-6:eq(0)');
        });
    </script>


@endpush
