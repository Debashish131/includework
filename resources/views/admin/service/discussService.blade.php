@extends('admin.adminMaster')
@section('title','Service List')
@push('css')
    <link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet"/>
@endpush
@section('maincontent')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">

                        <a href="/adminService">
                            <button class="btn btn-primary btn-sm" style="float: right">Add Service</button>
                        </a>
                        <br>
                        <br>
                        <table id="example" class="table table-striped table-bordered" style="width:100%">

                            <thead>
                            <tr>
                                <th>Numbering</th>
                                <th>Title</th>
                                <th>Service Short Description</th>
                                <th>Action</th>


                            </tr>
                            </thead>
                            <tbody>
                            @foreach($service as $val)
                                <tr>
                                    <td>{{$val->numbering}}</td>
                                    <td>{{$val->title}}</td>
                                    <td>{{$val->short_des}}</td>
                                    <td>
                                        <div class="d-flex order-actions">
                                            <a href="/discussServiceEdit{{$val->id}}"><i
                                                    class='bx bxs-edit text-primary'></i></a>

                                            &nbsp; &nbsp;
                                            <a href="/discussServiceDelete/{{$val->id}}"
                                               onclick="return confirm('Are you sure?')"><i
                                                    class='bx bxs-trash text-danger'></i></a>

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
    </div>
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
@endsection
