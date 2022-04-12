<!--favicon-->
<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png"/>
<!--plugins-->
<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet"/>
<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet"/>

<!-- Bootstrap CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/app.css" rel="stylesheet">
<link href="assets/css/icons.css" rel="stylesheet">
<!-- Theme Style CSS -->
<link rel="stylesheet" href="assets/css/dark-theme.css"/>
<link rel="stylesheet" href="assets/css/semi-dark.css"/>
<link rel="stylesheet" href="assets/css/header-colors.css"/>





<!-- Bootstrap JS -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!--plugins-->

<script src="assets/js/jquery.min.js"></script>
<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>

<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>


{{--Toastr--}}
<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}


<script src="assets/js/index.js"></script>
<!--app JS-->
<script src="assets/js/app.js"></script>

<script src="assets/js/dashboard-eCommerce.js"></script>

<script>
    new PerfectScrollbar('.product-list');
    new PerfectScrollbar('.customers-list');
</script>
{{--Toaster--}}
<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

@stack('js')
<script>
    @if($errors->any)
    @foreach($errors->all() as $error)
    toastr.error('{{$error}}', 'Error', {
        closeButton: true,
        progressBar: true,

    })
    @endforeach
    @endif
</script>



//Original

<!-- Bootstrap JS -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!--plugins-->

<script src="assets/js/jquery.min.js"></script>
<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>


{{--Toastr--}}
<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}



<script src="assets/js/dashboard-eCommerce.js"></script>

<script>
    new PerfectScrollbar('.product-list');
    new PerfectScrollbar('.customers-list');
</script>























//Toaster

{{--Toaster--}}
<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

@stack('js')
<script>
    @if($errors->any)
    @foreach($errors->all() as $error)
    toastr.error('{{$error}}', 'Error', {
        closeButton: true,
        progressBar: true,

    })
    @endforeach
    @endif
</script>
