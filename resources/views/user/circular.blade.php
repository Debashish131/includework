@extends('user.master')
@section('title','Career')
@push('css')
    <link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet"/>
@endpush
@section('maincontent')

    <div class="main">

        <!--header section start-->
        <section class="">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-7">
                        {{--                        <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">--}}
                        {{--                            <h1 class="text-white mb-0">Career</h1>--}}
                        {{--                            <div class="custom-breadcrumb">--}}
                        {{--                                <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">--}}
                        {{--                                    <li class="list-inline-item breadcrumb-item"><a href="#">Home</a></li>--}}
                        {{--                                    <li class="list-inline-item breadcrumb-item"><a href="#">Career</a></li>--}}
                        {{--                                    <li class="list-inline-item breadcrumb-item active">Circular</li>--}}
                        {{--                                </ol>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
        </section>
        <!--header section end-->
        <!--work process section start-->
        <section class="work-process-section ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-9">
                        <div class="section-heading text-center">
                            <strong class="color-secondary">Circular</strong>
                            <h2>Circular List</h2>
                            <span class="animate-border mr-auto ml-auto mb-4"></span>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <br>
                            <br>
                            <table id="datatable" class="table table-striped table-bordered" style="width:100%">

                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Position</th>
                                    <th>No of Post</th>
                                    <th>Circular</th>
                                    <th>Deadline</th>
                                    <th>Action</th>


                                </tr>
                                </thead>
                                <tbody>
                                @foreach($circular as $val)
                                    <tr>
                                        <td>{{$val->id}}</td>
                                        <td>{{$val->position}}</td>
                                        <td>{{$val->noPost}}</td>
                                        <td>{{$val->file}}</td>
                                        <td><span
                                                style="color: red">{{\Carbon\Carbon::parse($val['date'])->format('j F, Y')}}</span>
                                        </td>
                                        <td>
                                            <a href="/circular/{{$val->file}}" target="_blank"><i
                                                    class='ti-download text-primary'></i></a>
                                            &nbsp;&nbsp;
                                            <a href="/career" target="_blank"><i
                                                    class='ti-hand-point-up text-success'></i>Apply</a>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--work process section end-->

        @push('js')
            <script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
            <script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
            <script>
                $(document).ready(function () {
                    $('#datatable').DataTable();
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
