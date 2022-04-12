<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{asset('assets/images/favicon-32x32.png')}}" type="image/png"/>
    <!--plugins-->
    <link href="{{asset('assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet"/>
    <!-- Bootstrap CSS -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/app.css')}}}" rel="stylesheet">
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet">
    <title>Admin Dashboard</title>
</head>

<body class="bg-login">
<!--wrapper-->
<div class="wrapper">
    <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
        <div class="container-fluid">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                <div class="col mx-auto">

                    <div class="card">
                        <div class="card-body">
                            <div class="border p-4 rounded">
                                <div class="text-center">
                                    <h3 class="">Admin Sign in</h3>
                                </div>
                                <div class="d-grid">
                                    <a class="btn my-4 shadow-sm btn-white" href="javascript:;"> <span
                                            class="d-flex justify-content-center align-items-center">
                          <img class="me-2" src="{{asset('assets/images/icons/search.svg')}}" width="16"
                               alt="Image Description">
                          <span>Sign in with Google</span>
											</span>
                                    </a> <a href="javascript:;" class="btn btn-facebook"><i class="bx bxl-facebook"></i>Sign
                                        in with Facebook</a>
                                </div>
                                <div class="login-separater text-center mb-4"><span>OR SIGN IN WITH EMAIL</span>
                                    <hr/>
                                </div>
                                <div class="form-body">

                                    <form method="POST" action="{{ route('admin.login') }}">
                                        @csrf
                                        <div class="col-12">
                                            <label for="inputEmailAddress" class="form-label">Email Address</label>
                                            <input id="email" type="email"
                                                   class="form-control @error('email') is-invalid @enderror"
                                                   name="email" value="{{ old('email') }}" required autocomplete="email"
                                                   autofocus>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="inputChoosePassword" class="form-label">Enter
                                                Password</label>
                                            <div class="input-group" id="show_hide_password">
                                                <input id="password" type="password"
                                                       class="form-control @error('password') is-invalid @enderror"
                                                       name="password" required autocomplete="current-password"><a
                                                    href="javascript:;" class="input-group-text bg-transparent"><i
                                                        class='bx bx-hide'></i></a>

                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                       id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="flexSwitchCheckChecked">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 text-end"><a
                                                href="authentication-forgot-password.html">Forgot Password ?</a>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-grid">

                                                <button type="submit" class="btn btn-primary"><i
                                                        class="bx bxs-lock-open"></i>
                                                    {{ __('Login') }}
                                                </button>
                                                @if (Route::has('password.request'))
                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                        {{ __('Forgot Your Password?') }}
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </div>
</div>
<!--end wrapper-->
<!-- Bootstrap JS -->
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<!--plugins-->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
<script src="{{asset('assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
<script src="{{asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
<!--Password show & hide js -->
<script>
    $(document).ready(function () {
        $("#show_hide_password a").on('click', function (event) {
            event.preventDefault();
            if ($('#show_hide_password input').attr("type") == "text") {
                $('#show_hide_password input').attr('type', 'password');
                $('#show_hide_password i').addClass("bx-hide");
                $('#show_hide_password i').removeClass("bx-show");
            } else if ($('#show_hide_password input').attr("type") == "password") {
                $('#show_hide_password input').attr('type', 'text');
                $('#show_hide_password i').removeClass("bx-hide");
                $('#show_hide_password i').addClass("bx-show");
            }
        });
    });
</script>
<!--app JS-->
<script src="{{asset('assets/js/app.js')}}"></script>
</body>

</html>
