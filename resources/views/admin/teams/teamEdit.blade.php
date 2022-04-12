@extends('admin.adminMaster')
@section('title','Member Edit')


@push('cs')


@endpush

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
                            <li class="breadcrumb-item active" aria-current="page">Member Edit</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-0 text-uppercase">Member Information Edit</h6>
                    <hr/>

                    <form action="/memberUpdate{{$team->id}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label for="team_name" class="control-label mb-1">Member Name</label>
                        <input class="form-control mb-3" name="team_name" id="team_name" type="text"
                               placeholder="Enter Member Name" value="{{$team->team_name}}"
                               aria-label="default input example" required>

                        <label for="designation" class="control-label mb-1">Designation</label>
                        <input class="form-control mb-3" name="designation" id="designation" type="text"
                               value="{{$team->designation}}"
                               placeholder="Enter designation"
                               aria-label="default input example" required>

                        <label for="quote" class="control-label mb-1">Quote ( Insert random value)</label>
                        <input class="form-control mb-3" name="quote" id="quote" type="text" value="{{$team->quote}}"
                               placeholder="Enter quote random(if any)"
                               aria-label="default input example" required>

                        <label for="image" class="control-label mb-1">Image</label>
                        <input class="form-control mb-3" name="image" id="image" type="file" value="{{$team->image}}"
                               aria-label="default input example" required>

                        <label for="fbLink" class="control-label mb-1">Email Id</label>
                        <input class="form-control mb-3" name="fbLink" id="fbLink" type="text" value="{{$team->fbLink}}"
                               placeholder="Enter Email Id (if any)"
                               aria-label="default input example">

                        <label for="fiverrLink" class="control-label mb-1">Fiverr Link</label>
                        <input class="form-control mb-3" name="fiverrLink" id="fiverrLink" type="text"
                               value="{{$team->fiverrLink}}"
                               placeholder="Enter fiverrLink (if any)"
                               aria-label="default input example">

                        <label for="upworkLink" class="control-label mb-1">Upwork Link</label>
                        <input class="form-control mb-3" name="upworkLink" id="upworkLink" type="text"
                               value="{{$team->upworkLink}}"
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

    <script>

        CKEDITOR.replace('short_des');
        CKEDITOR.replace('privacy_policy');
    </script>
    <script src='https://cdn.tiny.cloud/1/vdqx2klew412up5bcbpwivg1th6nrh3murc6maz8bukgos4v/tinymce/5/tinymce.min.js'
            referrerpolicy="origin">
    </script>
    <script>
        tinymce.init({
            selector: '#mytextarea'
        });
    </script>

@endpush
