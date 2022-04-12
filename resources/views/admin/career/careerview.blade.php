@extends('admin.adminMaster')
@section('title','Career View')

@push('css')
    <link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet"/>
@endpush
@section('maincontent')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <br>
                        <br>
                        <table id="example" class="table table-striped table-bordered" style="width:100%">

                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Image</th>

                                <th>File</th>
                                <th>Position for apply</th>
                                <th>Submission Time</th>

                                <th>Action</th>


                            </tr>
                            </thead>
                            <tbody>
                            @foreach($career as $val)
                                <tr>
                                    <td>{{$val->id}}</td>
                                    <td>{{$val->firstname}}</td>
                                    <td>{{$val->email}}</td>
                                    <td><img src="case/{{$val['image']}}" alt="No image found"
                                             height="80"
                                             width="80"></td>
                                    <td>{{$val->file}}</td>
                                    <td>{{$val->position}}</td>
                                    <td>{{\Carbon\Carbon::parse($val['updated_at'])->diffForHumans()}}</td>

                                    <td>
                                        <div class="d-flex order-actions">
                                            <a href="/uploads/{{$val->file}}"><i
                                                    class='bx bx-folder-open text-primary'></i></a>

                                            &nbsp; &nbsp;
                                            <a href="/careerCvdelete/{{$val->id}}"
                                               onclick="return confirm('Are you sure?')"><i
                                                    class='bx bxs-trash text-danger'></i></a>
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
