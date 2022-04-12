@extends('admin.adminMaster')
@section('title','Admin Dashboard')

@section('maincontent')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
                <div class="col">
                    <div class="card radius-10 overflow-hidden">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0">Total Career Apply</p>
                                    <h5 class="mb-0">{{$count = \App\career::all()->count()}}</h5>
                                </div>
                                <div class="ms-auto"><i class='bx bx-user-voice font-30'></i>
                                </div>
                            </div>
                        </div>
                        <div class="" id="w-chart4"></div>
                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10 overflow-hidden">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0">Total People Contact </p>
                                    <h5 class="mb-0">{{$count = \App\Contact::all()->count()}}</h5>
                                </div>
                                <div class="ms-auto"><i class='bx bx-user-pin font-30'></i>
                                </div>
                            </div>
                        </div>
                        <div class="" id="w-chart6"></div>
                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10 overflow-hidden">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0">Total Job Circular</p>
                                    <h5 class="mb-0">{{$count = \App\Circular::all()->count()}}</h5>
                                </div>
                                <div class="ms-auto"><i class='bx bx-file font-30'></i>
                                </div>
                            </div>
                        </div>
                        <div class="" id="w-chart2"></div>
                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10 overflow-hidden">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0">Total Service Added</p>
                                    <h5 class="mb-0">{{$count = \App\service::all()->count()}}</h5>
                                </div>
                                <div class="ms-auto"><i class='bx bxs-briefcase font-30'></i>
                                </div>
                            </div>
                        </div>
                        <div class="" id="w-chart8"></div>
                    </div>
                </div>
                {{--                <div class="col-lg-12">--}}
                {{--                    <div class="card radius-10">--}}
                {{--                        <div class="card-body">--}}
                {{--                            <div class="d-flex align-items-center">--}}
                {{--                                <div>--}}
                {{--                                    <p class="mb-0 text-secondary">Store Visitors</p>--}}
                {{--                                    <h4 class="my-1">59K</h4>--}}
                {{--                                    <p class="mb-0 font-13 text-danger"><i class='bx bxs-down-arrow align-middle'></i>12.4% Since last week</p>--}}
                {{--                                </div>--}}
                {{--                                <div class="widgets-icons bg-light-danger text-danger ms-auto"><i class='bx bxs-binoculars'></i>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                            <div id="chart3"></div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
            </div>
            <!--end row-->


            <div class="row row-cols-1 row-cols-lg-3">
                <div class="col d-flex">
                    <div class="card radius-10 w-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <h5 class="mb-0">Top Categories</h5>
                                </div>
                                <div class="font-22 ms-auto"><i class='bx bx-dots-horizontal-rounded'></i>
                                </div>
                            </div>
                            <div class="mt-5" id="chart15"></div>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">
                                Kids <span class="badge bg-success rounded-pill">50</span>
                            </li>
                            <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">
                                Women <span class="badge bg-danger rounded-pill">10</span>
                            </li>
                            <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">
                                Men <span class="badge bg-primary rounded-pill">10</span>
                            </li>
                            <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">
                                Furniture <span class="badge bg-warning text-dark rounded-pill">14</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col d-flex">
                    <div class="card radius-10 w-100">
                        <div class="card-body">
                            <p class="font-weight-bold mb-1 text-secondary">Total Mails Got</p>
                            <div class="d-flex align-items-center">
                                <div>
                                    <h4 class="mb-0">{{$count = \App\Contact::all()->count()}}</h4>
                                </div>
                                <div class="">
                                    <p class="mb-0 align-self-center font-weight-bold text-success ms-2"> <i
                                            class='bx bxs-up-arrow-alt mr-2'></i>
                                    </p>
                                </div>
                            </div>
                            <div id="chart21"></div>
                        </div>
                    </div>
                </div>
                <div class="col d-flex">

                    <div class="card radius-10 w-100 overflow-hidden">
                        <div class="card-body text-center px-0">
                            <h6 class="text-uppercase">Total Visitors</h6>
                            <div class="chart-container-10 d-flex align-items-center justify-content-center">
                                <div id="total-visitors"></div>
                            </div>
                        </div>
                        <div class="card-footer border-0 bg-transparent">
                            <div class="row align-items-center text-center">
                                <div class="col border-end">
                                    <h5 class="mb-0">563</h5>
                                    <small class="extra-small-font">Last Week</small>
                                </div>
                                <div class="col">
                                    <h5 class="mb-0">985</h5>
                                    <small class="extra-small-font">Last Month</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->

    </div>
    </div>
    <!--end page wrapper -->
    @push('js')
        <script src="assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
        {{--        <script src="assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>--}}


        {{--Widgets--}}
        <script src="assets/js/widgets.js"></script>
        {{--Widgets END--}}


        <script src="assets/plugins/jquery-knob/excanvas.js"></script>
        <script src="assets/plugins/jquery-knob/jquery.knob.js"></script>
        <script>
            $(function () {
                $(".knob").knob();
            });
        </script>
    @endpush

@endsection
