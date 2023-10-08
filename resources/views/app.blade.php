<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Login</title>

    <script src="{{asset('dist/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('dist/js/popper.min.js')}}"></script>
    <script src="{{asset('dist/js/tooltip.js')}}"></script>
    <script src="{{asset('dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('dist/js/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('dist/js/moment.min.js')}}"></script>
    <script src="{{asset('dist/js/jscolor.js')}}"></script>
    <script src="{{asset('dist/js/stisla.js')}}"></script>
    <script src="{{asset('dist/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('dist/js/bootstrap-timepicker.min.js')}}"></script>
    <script src="{{asset('dist/js/bootstrap-tagsinput.min.js')}}"></script>
    <script src="{{asset('dist/js/select2.full.min.js')}}"></script>
    <script src="{{asset('dist/js/summernote-bs4.js')}}"></script>
    <script src="{{asset('dist/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('dist/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('dist/js/iziToast.min.js')}}"></script>
    <script src="{{asset('dist/js/fontawesome-iconpicker.js')}}"></script>
    <script src="{{asset('dist/js/bootstrap4-toggle.min.js')}}"></script>

    <link rel="stylesheet" href="{{asset('dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/font_awesome_5_free.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/bootstrap-datepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/bootstrap-timepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/bootstrap-tagsinput.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/duotone-dark.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/iziToast.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/fontawesome-iconpicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/bootstrap4-toggle.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/summernote-bs4.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/components.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/spacing.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/custom.css')}}">

</head>
<body id="app-layout">

    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="w-100">
            @yield('content')
        </div>
    </div>


    <script src="{{asset('dist/js/scripts.js')}}"></script>
    <script src="{{asset('dist/js/custom.js')}}"></script>


</body>
</html>
